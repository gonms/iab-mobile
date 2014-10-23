<?php

class Listado{
    
    var $seccion;
    var $id;
    var $template;
    
    function Listado($seccion, $id)
    {
        $this->seccion = $seccion;
        $this->id = $id;
    }
	
    function getData()
    {
    	include("simple_html_dom.php");
		include("include/funciones.inc.php");
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $feed[$this->seccion]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $file = curl_exec($ch);
        curl_close($ch);
    
        $xml = simplexml_load_string($file);
        $namespaces = $xml->getNamespaces(true);
		
        $aDatos = array();
        
        $encontrado = false;
        if (!empty($this->id)) $encontrado = false;

        foreach ($xml->channel->item as $item)
        {
			/* articulo */
            if (!empty($this->id))
            {
                $id = "http://www.vanidad.es/" . $this->seccion . "/" . $this->id;
                if ($id == $item->link)
                {
                    $encontrado = true;
                    $content = $item->children($namespaces['content']); 
        			$cuerpo = $content->encoded;
                    $cuerpo = str_replace("style","class",$cuerpo);
        			
        			$html = str_get_html("<html><body>".$cuerpo."</body></html>");
        			
        			$container = $html->find('img',0);
        		
        	        $img = (!empty($container)?$container->src:"");
                    $recorte = "";
        			
        			if(!empty($img))
        			{
                        $recorte = $img;
        			}
        			else
        			{
        				$patron = '/vimeo.com\/(\d+)">/';
        				
        				if(preg_match($patron,$cuerpo,$a) == 1)
        				{
        					$recorte = $a[1];

        					$video_xml = "http://vimeo.com/api/v2/video/".$a[1].".xml";
        					
        					$ch = curl_init();
        			        curl_setopt($ch, CURLOPT_URL, $video_xml);
        			        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        			        $file = curl_exec($ch);
        			        curl_close($ch);
        			    
        			        $xml = simplexml_load_string($file);
        					
        					$recorte = $xml->video->thumbnail_large;
        					
        				}
        				else
        					$recorte = "";
        			}
        			
        			$entradilla = explode("<p>La entrada", $item->description);
        			
        			list($inicio,$dia,$mes,$ano,$resto) = explode(" ", $item->pubDate);
        		
        			$fecha = $dia." ".$meses[$mes].", ".$ano;
        			
                    $aDatos = array(
                            "titulo" => htmlentities($item->title, ENT_QUOTES, 'UTF-8'),
                            "fecha" => $fecha,
                            "entradilla" => utf8_decode($entradilla[0]),
                            "imagen" => $img,
                            "recorte" => $recorte,
                            "cuerpo" => $cuerpo,
                            "url" => $item->link
                            );
                }
            }
            /* listado */
            else
            {
                $content = $item->children($namespaces['content']); 
                $cuerpo = $content->encoded;
                $cuerpo = str_replace("style","class",$cuerpo);
                
                $html = str_get_html("<html><body>".$cuerpo."</body></html>");
                
                $container = $html->find('img',0);
            
                $img = (!empty($container)?$container->src:"");
                $recorte = "";
                
                if(!empty($img))
                {
                    $recorte = $img;
                }
                else
                {
                    $patron = '/vimeo.com\/(\d+)">/';
                    
                    if(preg_match($patron,$cuerpo,$a) == 1)
                    {
                        $recorte = $a[1];

                        $video_xml = "http://vimeo.com/api/v2/video/".$a[1].".xml";
                        
                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, $video_xml);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                        $file = curl_exec($ch);
                        curl_close($ch);
                    
                        $xml = simplexml_load_string($file);
                        
                        $recorte = $xml->video->thumbnail_large;
                        
                    }
                    else
                        $recorte = "";
                }
                
                $entradilla = explode("<p>La entrada", $item->description);
                
                list($inicio,$dia,$mes,$ano,$resto) = explode(" ", $item->pubDate);
            
                $fecha = $dia." ".$meses[$mes].", ".$ano;
                
                $aDatos[] = array(
                        "titulo" => htmlentities($item->title, ENT_QUOTES, 'UTF-8'),
                        "enlace" => str_replace("http://www.vanidad.es","", $item->link),
                        "fecha" => $fecha,
                        "entradilla" => utf8_decode($entradilla[0]),
                        "imagen" => $img,
                        "recorte" => $recorte,
                        "cuerpo" =>$cuerpo,
                        "url" => $item->link
                        );
            }
	    }
	    
	    
	    if (!empty($this->id) && !$encontrado)
	    {
	    	header("Location: /");
	    	exit;
	    }
	    
		
		return $aDatos;
	}
	
    function getTemplate()
    {
        $tpl = (!empty($this->id)?"articulo.tpl":"listado.tpl");
        
        return $tpl;
    }
    
    function getTagPubli()
    {
        $tag = "";
        switch ($this->seccion)
        {
        	case "portada": $tag = "55174/413268"; break;
        	/*case "portada": $tag = ""; break;
        	case "portada": $tag = ""; break;*/
            default: $tag = "55174/498659"; break;
        	
        }
        return $tag;
    }
}
?>
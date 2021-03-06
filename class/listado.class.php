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
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://www.iabspain.net/feed/");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $file = curl_exec($ch);
        curl_close($ch);
    
        $xml = simplexml_load_string($file);
		
        $aDatos = array();
        
        $encontrado = false;
        if (!empty($this->id)) $encontrado = false;

        foreach ($xml->channel->item as $item)
        {
			/* articulo */
            if (!empty($this->id))
            {
                $id = "http://www.iabspain.net/noticias/" . $this->id;
                if ($id == $item->link)
                {
                    $encontrado = true;
                    $cuerpo = str_replace("float:left;","",$item->description);
        			list($inicio,$dia,$mes,$ano,$resto) = explode(" ", $item->pubDate);
        		
        			$fecha = $dia." ".$mes." ".$ano;
        			
                    $aDatos = array(
                            "titulo" => htmlentities($item->title, ENT_QUOTES, 'UTF-8'),
                            "fecha" => $fecha,
                            "cuerpo" => $cuerpo
                            );
                   	break;
                }
            }
            /* listado */
            else
            {
                $cuerpo = $item->description;
	            $html = str_get_html("<html><body>".$cuerpo."</body></html>");            
	            $container = $html->find('img',0);        
	            $img = (!empty($container)?$container->src:"");
	            
	            $entradilla = substr($html->plaintext,0,200);
	            
                list($inicio,$dia,$mes,$ano,$resto) = explode(" ", $item->pubDate);
            
                $fecha = $dia." ".$mes." ".$ano;
                
                $aDatos[] = array(
                        "titulo" => htmlentities($item->title, ENT_QUOTES, 'UTF-8'),
                        "enlace" => str_replace("http://www.iabspain.net","", $item->link),
                        "fecha" => $fecha,
                        "entradilla" => htmlentities($entradilla, ENT_QUOTES, 'UTF-8'),
                        "imagen" => $img
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
}
?>
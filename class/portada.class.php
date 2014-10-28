<?php

class Portada{
    
    function Portada()
    {
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
        
        $pos = 1;
        foreach ($xml->channel->item as $item)
        {
            $cuerpo = $item->description;
            $html = str_get_html("<html><body>".$cuerpo."</body></html>");            
            $container = $html->find('img',0);        
            $img = (!empty($container)?$container->src:"");
            
            $entradilla = substr($html->plaintext,0,200);
            
            $aDatos[] = array(
                    "titulo" => htmlentities($item->title, ENT_QUOTES, 'UTF-8'),
                    "enlace" => str_replace("http://www.iabspain.net","", $item->link),
                    "entradilla" => htmlentities($entradilla, ENT_QUOTES, 'UTF-8'),
                    "imagen" => $img
                    );
            $pos ++;

            if ($pos > 3)
                break;
	    }
	    	    
		return $aDatos;
	}
	
    function getTemplate()
    {
        $tpl = "portada.tpl";
        
        return $tpl;
    }    
}
?>
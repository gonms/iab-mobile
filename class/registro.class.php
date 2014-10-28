<?php

class Registro{
    
    function Registro()
    {
    }
	
    function getData()
    {
	    $aDatos = $_POST;	    
		return $aDatos;
	}
	
    function getTemplate()
    {
        $tpl = "registro.tpl";
        
        return $tpl;
    }    
}
?>
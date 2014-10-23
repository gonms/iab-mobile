<?php

class Modelo{
    
    var $seccion; // nombre de seccion
    var $id; //id del artículo
    var $template; //plantilla a pintar
    
    function Modelo()
    {
        $this->id = "";
        $this->seccion = "";
    }
    
    function setSection($op)
    {
        $this->seccion = $op;
    }
    
    function setId($op)
    {
        $this->id = $op;
    }
    
    function getData()
    {
        //coger XML y meter datos en array
        switch ($this->seccion)
        {
            case "asociate": 
                $aDatos = "";
                $this->template = $this->seccion . ".tpl";
                break;
            
            case "portada": 
                require_once("portada.class.php");
                require_once("eventos.class.php");
                $item = new Portada();
                $aDatos[0] = $item->getData();
                $this->template = $item->getTemplate();
                
                $item2 = new Eventos();
                $aDatos[1] = $item2->getCalendar();
                break;
            default: 
                require_once("listado.class.php");
                $item = new Listado($this->seccion, $this->id);
                $aDatos = $item->getData();
                $this->template = $item->getTemplate();
                break;
        }
        
        return $aDatos;
    }
    
    function getTemplate()
    {
        return $this->template;
    }    
} 
?>
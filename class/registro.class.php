<?php

class Registro{
    
    function Registro()
    {
    }
	
    function getData()
    {
        $email = "gon.munoz.sanchez@gmail.com"; //"comunicacion@iabspain.net";
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $cabeceras .= 'From: IAB <comunicacion@iabspain.net>' . "\r\n";

        // Enviarlo
        $mensaje = '<html>
                    <body>
                        <p>Se ha realizado el envío de estos datos a través de la web móvil:</p>
                        <p>Nombre: ' . $_POST['nombre'] . ' ' . $_POST['apellidos'] . '</p>
                        <p>Empresa: ' . $_POST['nomEmpresa'] . '</p>
                        <p>Email: ' . $_POST['email'] . '</p>
                    </body>
                    </html>
                    ';

        mail($email, utf8_decode("Envío datos Asociate web móvil"), $mensaje, $cabeceras);

        $aDatos['texto'] = "Los datos se han enviado correctamente!";

		return $aDatos;
	}
	
    function getTemplate()
    {
        $tpl = "registro.tpl";
        
        return $tpl;
    }    
}
?>
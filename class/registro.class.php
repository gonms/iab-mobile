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
        $cabeceras .= 'To: IAB <' . $email . '>' . "\r\n";

        // Enviarlo
        $mensaje = utf8_decode('<html>
                    <body>
                        <p>Se ha realizado el envío de estos datos a través de la web móvil:</p>
                        <p>Nombre: ' . $_POST['nombre'] . ' ' . $_POST['apellidos'] . '</p>
                        <p>Empresa: ' . $_POST['noEmpresa'] . '</p>
                        <p>Email: ' . $_POST['email'] . '</p>
                    </body>
                    </html>
                    ');

        mail($email, "Envio datos Asociate web móvil", $mensaje, $cabeceras);

		return $aDatos;
	}
	
    function getTemplate()
    {
        $tpl = "registro.tpl";
        
        return $tpl;
    }    
}
?>
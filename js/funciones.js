jQuery.fn.ForceNumericOnly=function()
{
	return this.each(function()
	{
		$(this).keydown(function(e)
		{
			var key=e.charCode||e.keyCode||0;return(key==8||key==9||key==46||(key>=37&&key<=40)||(key>=48&&key<=57)||(key>=96&&key<=105));
		});
	});
};
$(document).ready(function()
{
	$("#aPrivacidad").click(function()
	{
		$("#dPrivacidad").slideToggle("1000");
	});
	$("#dPrivacidad").click(function()
	{
		$("#dPrivacidad").fadeOut("slow");
	});
	$("bAsoClose").click(function()
	{
		$("#dPrivacidad").fadeOut("slow");
	});
	$("#aClausula").click(function()
	{
		$("#dClausula").slideToggle("1000");
	});
	$("#dClausula").click(function()
	{
		$("#dClausula").slideToggle("1000");
	});
	$("#aAsociate").click(function()
	{
		$("#dAsociate").slideToggle("1000");
	});
	$("#bAsoClose").click(function()
	{
		$("#dAsociate").fadeOut("slow");
	});
	$("#bEnviar").click(function()
	{
		compruebaForm();
	});
	$("#telefono").ForceNumericOnly();
	$('#btnBuscar').click(function()
	{
		if($('#textBuscar').val()=='')
		{
			alert("Introduzca algún texto para buscar.");
		}
		else
		{
			$('#BuscarForm').submit();
		}
	});

	checkCookie();

	$(".hayEvento").click(function()
	{
		var dia = $(this).html();
		var html = $("#d" + dia).html();
		$("#dEvento").html(html).fadeIn();
	});
	
	$('.aVideo').click(function()
	{
		$('#video').html('<iframe src="http://www.dailymotion.com/embed/video/' + $(this).attr("id") + '" frameborder="0" width="100%" height="240"></iframe>');
		window.location.hash="#video";
	});
});

function isEmail(valor)
{
	return(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(valor))
}

function compruebaForm(pagina)
{
	var error=false;
	if(jQuery.trim($('#nombre').val())=='')
	{
		error=true;
		$('#nombre').addClass('error');
	}
	else
		$('#nombre').removeClass('error');

	if(jQuery.trim($('#telefono').val())=='')
	{
		error=true;
		$('#telefono').addClass('error');
	}
	else
	{
		$('#telefono').removeClass('error');
	}
	
	if(jQuery.trim($('#email').val())!='')
	{
		if(!isEmail($('#email').val()))
		{
			error=true;
			$('#email').addClass('error');
		}
		else
		{
			$('#email').removeClass('error');
		}
	}
	
	if(jQuery.trim($('#nomEmpresa').val())=='')
	{
		error=true;
		$('#nomEmpresa').addClass('error');
	}
	else
		$('#nomEmpresa').removeClass('error');

	if(jQuery.trim($('#apellidos').val())=='')
	{
		error=true;
		$('#apellidos').addClass('error');
	}
	else
		$('#apellidos').removeClass('error');
	
	if(!$('#acepto').is(':checked'))
	{
		error=true;
		$('#txtClausula').removeClass('oculto');
	}
	else
	{
		$('#txtClausula').addClass('oculto');
	}

	if(!error)
	{
		$('#fForm').submit();
	}
	else
	{
		alert("Revisa los datos");
	}
}

function setCookie(c_name,value,exdays){
	var exdate=new Date();
	exdate.setDate(exdate.getDate() + exdays);
	var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
	document.cookie=c_name + "=" + c_value;
}
function getCookie(c_name){
	var c_value = document.cookie;
	var c_start = c_value.indexOf(" " + c_name + "=");
	if (c_start == -1)
	  {
	  c_start = c_value.indexOf(c_name + "=");
	  }
	if (c_start == -1)
	  {
	  c_value = null;
	  }
	else
	  {
	  c_start = c_value.indexOf("=", c_start) + 1;
	  var c_end = c_value.indexOf(";", c_start);
	  if (c_end == -1)
	  {
	c_end = c_value.length;
	}
	c_value = unescape(c_value.substring(c_start,c_end));
	}
	return c_value;
}
function checkCookie(){
	var leido=getCookie("leido");
	if (leido===null)
	{
		$('#caja_abierta').show();
	}
	else
	{
		$('#caja_abierta').hide();
	}
}
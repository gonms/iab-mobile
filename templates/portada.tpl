{include 'header.tpl'}

{foreach $noticias as $item}
<h1>{$item.titulo}</h1>
<p>{$item.imagen}</p>
<p>{$item.entradilla}</p>
{/foreach}

{$calendario}
</body>
</html>
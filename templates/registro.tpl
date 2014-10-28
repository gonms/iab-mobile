{include 'header.tpl'}

<section>
	{foreach $result as $key => $value}
	<p>{$value}</p>
	{/foreach}
</section>

{include 'footer.tpl'}
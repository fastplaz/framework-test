
    {foreach from=$menuitems item='item' name='extmenu' class='navlist'}
    	<li><a href="{$item.url|safetext}" title="{$item.title}"><i class="icon-double-angle-right"></i>{$item.name}</a></li>
    {/foreach}


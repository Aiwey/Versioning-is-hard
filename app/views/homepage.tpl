{extends file="main.tpl"}
{block name=header} serenity. | Homepage {/block}
{block name = content}

    <div class="container" style="display: flex; flex-direction: row;align-items: center; padding: 2em;">
      <h2 class="display-4">discover<br/>&nbsp;&nbsp;discuss<br/>&nbsp;&nbsp;&nbsp;&nbsp;share.</h2>
      <img src="{$conf->app_url}/assets/images/homepageImage.png" style="width: 33%; margin-left: auto">
     {*  My value: {$value}
    
    {if $msgs->isInfo()}
        <ul>
        {foreach $msgs->getMessages() as $msg}
            <li>{$msg->text}</li>
        {/foreach}
        </ul>
    {/if}
      <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    *}</div>
{/block}

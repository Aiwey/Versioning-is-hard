{extends file ="main.tpl"}
{block name=header} serenity. | admin panel{/block}
{block name = content} 
   
    <div class="container" style="display: flex; flex-direction: row;align-items: center; padding: 2em;">
     
    <p> What do you want to tinker with today? </p>
    <ul>
        <a href ="{rel_url action='adminUsers'}"><li> users </li></a>
        <a href ="{rel_url action='adminAlbums'}"><li> albums </li></a>
        <a href ="{rel_url action='adminLabels'}"><li> labels </li></a>
        <a href ="{rel_url action='adminArtists'}"><li> artists</li> </a>
        <a href ="{rel_url action='adminComments'}"><li> comments</li> </a>
        <a href ="{rel_url action='adminBands'}"><li> bands</li> </a>
    </ul>
    </div></div></main>
{/block}
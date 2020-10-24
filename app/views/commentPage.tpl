{extends file = "main.tpl"}
{block name=header} serenity. | comments{/block}
{block name = content} 
    <br/><h1> Browse Comments</h1>
    <table class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col">Album</th>
      <th scope="col">Comment</th>
      <th scope="col">User</th>
    </tr>
  </thead>
  <tbody>
            {foreach $comment as $row}
                <tr>
                <td>{$row["AlbumName"]}</td>
                <td>{$row["CommentContent"]}</td>
                <td>{$row["UserLogin"]}</td>
                </tr>            
            {/foreach}            
            </tbody>
</table>
            <form action="showAddComment" method="post">
                <input type="hidden" name="idAlbum" value="{$idAlbum}">
                <input type="submit" class="btn btn-sm btn-outline-secondary" style="background-color: #ffefed;" value="Add New">                
            </form>  
        <!--<a class="btn btn-sm btn-outline-secondary" style="margin-top: 2em; margin-bottom: 2em;" href ="{rel_url action="showAddComment" id={"$idAlbum"}}">Add New</a>-->    
{/block}
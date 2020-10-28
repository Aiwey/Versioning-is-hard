{extends file="main.tpl"}
{block name=content}
    <table class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col">Album</th>
      <th scope="col">Comment</th>
      <th scope="col">User</th>
      <th scooe="col">Action</th>
    </tr>
  </thead>
  <tbody>
            {foreach $comment as $row}
                <tr>
                <td>{$row["Album_idAlbum"]}</td>
                <td>{$row["CommentContent"]}</td>
                <td>{$row["User_idUser"]}</td>
                <td> <form action="commentDelete" method="post" style="margin: 1em;">
                    <input type="hidden" name="idComment" value ="{$row["idComment"]}">
                    <input type="submit" class="btn btn-sm btn-outline-secondary" style="background-color: #ffefed;" value="Delete Comment">
                    </form>
                </td>
                </tr>            
            {/foreach}            
            </tbody>
</table>
{/block}

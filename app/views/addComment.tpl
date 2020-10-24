{extends file ="main.tpl"}
{block name=header} serenity. | add comment{/block}
{block name = content} 
<form action="addComment" method="post" id="f">
  <div class="form-group">
        <label for="commentForm">Type your comment</label>
        <textarea form="f" class="form-control" id="commentForm" name="comment" rows="3">{$comment}</textarea>
        <!--<input type="text" class="form-control" id="commentForm" name="comment" rows="3" value="{$form->commentContent}">-->
        <input type="hidden" name="idAlbum" value="{$idAlbum}">
  </div>
  <input type="submit" class="btn btn-primary" value="Add New">
</form>
{/block}
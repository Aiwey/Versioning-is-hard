{extends file ="main.tpl"}
{block name=header} serenity. browse albums{/block}
{block name = content} 
    <br/><h1> Browse Albums</h1>
    <button class="btn btn-sm btn-outline-secondary" type="button" style="margin-top: 2em; margin-bottom: 2em;">Add New</button>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Album Name</th>
      <th scope="col">Album Genre</th>
      <th scope="col">Album Description</th>
      <th scope="col">Album Release</th>
      <th scope="col">Cover</th>
      <th scope="col">Label</th>
      <th scope="col">Band</th>      
      <th scope ="col">Action</th>
    </tr>
  </thead>
  <tbody>
            {foreach $album as $row}
                <tr>
                <td>{$row["idAlbum"]}</td> 
                <td>{$row["AlbumName"]}</td>
                <td>{$row["AlbumGenre"]}</td>
                <td>{$row["AlbumDescription"]}</td>
                <td>{$row["AlbumReleaseDate"]}</td>
                <td>{$row["AlbumCoverPath"]}</td>
                <td>{$row["LabelName"]}</td>
                <td>{$row["BandName"]}</td>
                
                <td>
                    <form action="showComment" method="post">
                        <input type="hidden" name="idAlbum" value={$row["idAlbum"]}>
                        <input type="submit" class="btn btn-sm btn-outline-secondary" style="background-color: #ffefed;" value="comments">
                    </form>
                    <!--<a href="{rel_url action="showComment" id={$row["idAlbum"]}}"><button class="btn btn-sm btn-outline-secondary" style="background-color: #ffefed;"type="button">comments</button></a>-->
                </td>
   
                </tr>            
            {/foreach}            
            </tbody>
</table>
{/block}
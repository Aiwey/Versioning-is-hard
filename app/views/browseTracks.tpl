{extends file ="main.tpl"}
{block name=header} serenity. | browse labels{/block}

{block name = content} 
    <br/><h1> Browse Tracks</h1>
    <button class="btn btn-sm btn-outline-secondary" type="button" style="margin-top: 2em; margin-bottom: 2em;">Add New</button>
    <table class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col">Track Name</th>
      <th scope="col">Album</th>
      <th scope="col">Band</th>
    </tr>
  </thead>
  <tbody>
            {foreach $track as $row}
                <tr>
                <td>{$row["TrackName"]}</td>
                <td>{$row["AlbumName"]}</td>
                <td>{$row["BandName"]}</td>
                </tr>            
            {/foreach}            
            </tbody>
</table>
{/block}

{extends file ="main.tpl"}
{block name=header} serenity. | browse: bands{/block}
{block name = content} 
    <br/><h1> Manage Bands</h1>
    <button class="btn btn-sm btn-outline-secondary" type="button" style="margin-top: 2em; margin-bottom: 2em;">Add New</button>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">BandName</th>
      <th scope="col">DateCreated</th>
      <th scope="col">DateEnded</th>
    </tr>
  </thead>
  <tbody>
            {foreach $band as $row}
                <tr>
                <td>{$row["idBand"]}</td> 
                <td>{$row["BandName"]}</td>
                <td>{$row["DateCreated"]}</td>
                <td>{$row["DateEnded"]}</td>
                   </tr>            
            {/foreach}            
            </tbody>
</table>
{/block}

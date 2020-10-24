{extends file ="main.tpl"}
{block name=header} serenity. | browse labels{/block}
{block name = content} 
    <br/><h1> Browse Labels</h1>
    <button class="btn btn-sm btn-outline-secondary" type="button" style="margin-top: 2em; margin-bottom: 2em;">Add New</button>
    <table class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col">Label Name</th>
      <th scope="col">Label Country</th>
      <th scope="col">Label City</th>
      <th scope="col">Label Street</th>
      <th scope="col">Label Property Number</th>
    </tr>
  </thead>
  <tbody>
            {foreach $label as $row}
                <tr>
                <td>{$row["LabelName"]}</td>
                <td>{$row["LabelCountry"]}</td>
                <td>{$row["LabelCity"]}</td>
                <td>{$row["LabelStreet"]}</td>
                <td>{$row["LabelPropertyNumber"]}</td>
                <td> Click to see </td>
                </tr>            
            {/foreach}            
            </tbody>
</table>
{/block}

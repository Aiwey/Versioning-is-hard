{extends file ="main.tpl"}

{block name = content} 
    <br/><h1> Manage Users </h1> <br/>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Login</th>
      <th scope="col">Password</th>
      <th scope="col">Role</th>
      <th scope="col">Avatar</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
            {foreach $user as $row}
                <tr>
                <td>{$row["idUser"]}</td> 
                <td>{$row["UserLogin"]}</td>
                <td>{$row["UserPassword"]}</td>
                <td>{$row["UserRole"]}</td>
                <td>{$row["UserAvatarPath"]}</td>
                <td>{$row["UserDescription"]}</td>
                <td> <button class="btn btn-sm btn-outline-secondary" type="button">edit</button>
                <button class="btn btn-sm btn-outline-secondary" style="background-color: #ffefed;"type="button">delete</button>
                </td>
   
                </tr>            
            {/foreach}            
            </tbody>
</table>
{/block}
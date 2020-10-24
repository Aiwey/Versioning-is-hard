{extends file="main.tpl"}
{block name=header} serenity. | login {/block}
{block name = content}
    <br/></br>
    <form action="login" method="post">
  <div class="form-group">
    <label for="id_login">Your Login</label>
    <input type="login" class="form-control" id="id_login" name="login" value ="{$log->login}" aria-describedby="loginHelp" placeholder="Enter Login">
    <small id="loginhelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="id_password" value="{$log->password}" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
{/block}

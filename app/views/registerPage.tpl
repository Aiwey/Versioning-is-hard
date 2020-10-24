{extends file="main.tpl"}
{block name=header} serenity. | register {/block}
{block name = content}
    <br/></br>
    <h1> Create an serenity account </h1>
    <form action="register" method="post">
  <div class="form-group">
    <label for="id_login">Your Login</label>
    <input type="login" class="form-control" id="id_login" name="login" value ="{$reg->login}" aria-describedby="loginHelp" placeholder="Enter Login">
    <small id="loginhelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="id_password" value="{$reg->password}" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
{/block}

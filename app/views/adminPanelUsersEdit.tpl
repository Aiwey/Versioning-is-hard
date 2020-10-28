{extends file ="main.tpl"}

{block name = content} 
    <br/><h1> Edit User </h1> <br/>
    
    <form action="{rel_url action ="userSave"}" method = "post" >
        <div class="form-group">
            <label for="userLogin"> User Login </label>
        <input type="text" name = "userLogin" id="userLogin" value="{$form->userLogin}">
        </div>
        <div class="form-group">
            <label for="UserAvatarPath"> User Avatar Path </label>
        <input type="text" id="UserAvatarPath" name ="UserAvatarPath" value="{$form->UserAvatarPath}">
         </div>
        <div class="form-group">
            <label for="UserDescription"> User Description </label>
        <input type="text" id="UserDescription" name = "UserDescription" value="{$form->UserDescription}">
         </div>
        <div class="form-group">
            <label for="UserRole"> User Role </label>
        <input type="text" name = "UserRole" value ="{$form->UserRole}">
         </div>
        <input type="hidden" name="idperson" value="{$form->id}">
        <input type="submit" class="btn btn-sm btn-outline-secondary" style="background-color: #ffefed;" value="Edit User">
    </form>
       
{/block}
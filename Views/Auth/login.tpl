{extends file="../layout.tpl"}
{block name=body}

    <form action="/auth/login" method="post">
        <div class="form-group">
            <label for="email">Login</label>
            <input type="text" class="form-control" id="email" name="login">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" name="pass">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
{/block}

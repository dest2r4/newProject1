<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">WebSiteName</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            {if isset($smarty.session.user)}
                {if $smarty.session.user->isAdmin()}
                    <li><a href="admin/">ADMIN PAGE</a></li>
                    {/if}
                <li><a href="#">{$smarty.session.user->getLogin()}</a></li>
                <li><a href="/auth/logout">LogOut</a></li>
                {else}
                <li><a href="/auth/login">Login</a></li>
                <li><a href="/auth/register">Register</a></li>
                {/if}



        </ul>
    </div>
</nav>
    <h1 align="center">Admin Main Page</h1>

{block name=body}




    {/block}

</body>
</html>
{extends file="../layout.tpl"}
{block name=body}
    <h1>ADMIN LOGGER</h1>
    <div class="container">
        <h1>Error table</h1>
        <table class="table">
            <thead>
            <tr>
                <th> Message</th>
                <th>Time</th>
            </tr>
            </thead>
            <tbody>
            {foreach $err as $bug}
            <tr>
                <td>{$bug['msg']}</td>
                <td>{$bug['time']}</td>
            </tr>
            {/foreach}
            </tbody>
        </table>
    </div>
    <h1>Request table</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Number</th>
            <th> Message</th>
            <th>Time</th>
        </tr>
        </thead>
        <tbody>
        {foreach $reqs as $key=> $req}
            <tr>
                <td>{$key}</td>
                <td>{$req['msg']}</td>
                <td>{$req['time']}</td>
            </tr>
        {/foreach}
        </tbody>
    </table>
    </div>
{/block}
{extends file="../logger.tpl"}
{block name=table}
    <div class="container">
        <h1 align="center">Request Reporting</h1>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Number</th>
                <th>Request text</th>
                <th>Time</th>
            </tr>
            </thead>
            <tbody>
            {foreach $reqs as $key=>$value}
                <tr>
                    <td>{$key}</td>
                    <td>{$value['msg']}</td>
                    <td>{$value['time']}</td>
                </tr>
            {/foreach}
            </tbody>
        </table>
    </div>
{/block}
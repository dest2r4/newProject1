{extends file="../layout.tpl"}

{block name=body}
    <h1 align="center">ADMIN LOGGER</h1>
    <div align="center" >
    <a href="/admin/log/error"><button type="button" class="btn btn-primary active" style="width: 25%;height: 20%" >Show Error</button></a>
    <a href="/admin/log/request"><button type="button" class="btn btn-primary active" style="width: 25%;height: 19%" >Show Request</button></a>
    </div>
    {block name=table}
        {/block}
{/block}
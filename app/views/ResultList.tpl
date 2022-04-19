{extends file="main.tpl"}
{block name=content}
<section id="footer">
    <div class="inner">
        {if $db->count("results")>0}
            <table  class="alt">
                <thead>
                <tr>
                    <th>Kwota</th>
                    <th>Ile lat?</th>
                    <th>Oprocentowanie</th>
                    <th>Roczna rata</th>
                </tr>
                </thead>
                <tbody>
                {foreach $results as $r}
                    {strip}
                        <tr>
                            <td>{$r["amount"]}</td>
                            <td>{$r["years"]}</td>
                            <td>{$r["interest"]}</td>
                            <td>{$r["result"]}</td>
                        </tr>
                    {/strip}
                {/foreach}
                </tbody>
            </table>
            {if inRole('admin')}
                <a href="{$conf->action_url}resultListClear" class="button primary">Wyczyść</a><br><br>
            {/if}
        {/if}
        <a href="{$conf->app_url}/index.php" class="button primary">Wróć do kalkulatora</a>
    </div>
</section>
{/block}

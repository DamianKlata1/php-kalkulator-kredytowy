{extends file="main.tpl"}
{* przy zdefiniowanych folderach nie trzeba już podawać pełnej ścieżki *}

{block name=content}

<section id="footer">
    <div class="inner">
        <a id="form"><h2 class="major">Kalkulator kredytowy</h2></a>
        <form method="post" action="{$conf->action_root}calcCompute">
            <div class="fields">
                <div class="field">
                    <label for="amount">Kwota</label>
                    <input type="text" name="amount" id="amount" value="{$form->amount}"/>
                </div>
                <div class="field">
                    <label for="years">Ile lat ?</label>
                    <input type="text" name="years" id="years" value="{$form->years}" />
                </div>
                <div class="field">
                    <label for="interest">Oprocentowanie</label>
                    <input type="text" name="interest" id="interest" value="{$form->interest}"/>
                </div>
            </div>
            <ul class="actions">
                <a href="#submit"><li><input type="submit" value="Oblicz"  /></li></a>
            </ul>
        </form>
        <ul class ="contact">
        {* wyświeltenie listy błędów, jeśli istnieją *}
            {if $msgs->isError()}
                <h3>Wystąpiły błędy: </h3>
                <ol class="err">
                {foreach $msgs->getErrors() as $err}
                {strip}
                <li>{$err}</li>
                {/strip}
                 {/foreach}
                </ol>
            {/if}

        {* wyświeltenie listy informacji, jeśli istnieją *}
            {if $msgs->isInfo()}
                <h3>Informacje: </h3>
                <ol class="inf">
                {foreach $msgs->getInfos() as $inf}
                {strip}
                <li>{$inf}</li>
                {/strip}
                {/foreach}
                </ol>
            {/if}

            {if isset($res->result)}
                <h3>Miesięczna rata:</h3>
                 <p class="res">
                {$res->result}zł
                </p>
            {/if}
        </ul>
    </div>

</section>

{/block}

{block name=footer}

<section id="footer">
    <div class="inner">
        <ul class="copyright">
            <li>Stopka kalkulatora kredytowego</li>
            <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </div>
</section>

{/block}
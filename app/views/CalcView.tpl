{extends file="main.tpl"}
{* przy zdefiniowanych folderach nie trzeba już podawać pełnej ścieżki *}

{block name=content}


<section id="footer">

    <div class="inner">
        <a href="{$conf->action_url}resultList" class="button primary">Wyświetl Historie Obliczeń</a>
        <form method="post" action="{$conf->action_url}calcCompute">
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
            {include file='messages.tpl'}

        </ul>
    </div>

</section>



{/block}




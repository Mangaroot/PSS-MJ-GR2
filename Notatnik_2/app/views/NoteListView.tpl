{extends file="main.tpl"}

{block name=content}
    {include file='header.tpl'}
    <div>
        <h1>Notes</h1>
        <div>
            <form action="{$conf->action_url}NoteShowLike" method="post" class="pure-form pure-form-aligned bottom-margin">
                <input name="searchbar" placeholder="Search bar" />
                <input type="submit" value="Szukaj" />
            </form>
        </div>
        <ul>
            {if isset($notes)}
                {foreach $notes as $result}
                    {strip}
                        <h2>{$result['Name']}</h2>
                        <h2>{$result['Nick']}</h2>
                        <p>{$result['Description']}</p>
                        <form action="{$conf->action_url}NoteEdit" method="post">
                            <input name="idNote" value="{$result['NotesID']}" hidden="true" />
                            <input type="submit" value="Edytuj" />
                        </form>
                    {/strip}
                {/foreach}
            {/if}
        </ul>
    </div>
    {include file='messages.tpl'}
{/block}
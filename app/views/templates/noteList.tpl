<div>
    <div>
        {for $key=1 to $counter/3}
            <div>
                <button onclick="sendAjaxRequest({$key-1})">{$key}</button>
            </div>
        {/for}
    </div>
</div>
{if isset($notes)}
    {foreach $notes as $result}
        {strip}
            <h2>{$result['Name']}</h2>
            <p>{$result['Description']}</p>
            <form action="{$conf->action_url}NoteEdit" method="post">
                <input name="idNote" value="{$result['NotesID']}" hidden="true" />
                <input type="submit" value="Edytuj" />
            </form>
        {/strip}
    {/foreach}
{/if}
{extends file="main.tpl"}

{block name=content}

    {include file='header.tpl'}
    <div>
        <h1>Notatka</h1>
        <form action="{$conf->action_url}NoteSave" method="post" class="pure-form pure-form-aligned bottom-margin">
            <input name="idNote" value="{$form->idNote}" hidden="true" />
            <input name="userid" value="{$form->idUser}" hidden="true" />
            <label>Title</label>
            <input name="name" value="{$form->nameNote}" />
            <label>Description</label>
            <textarea name="description">{$form->description}</textarea>
            <input type="submit" value="Zapisz" />
        </form>
        <form action="{$conf->action_url}NoteDelete" method="post">
            <input name="idNote" value="{$form->idNote}" hidden="true" />
            <input type="submit" value="Usuń" />
        </form>
    </div>

    {include file='messages.tpl'}
{/block}
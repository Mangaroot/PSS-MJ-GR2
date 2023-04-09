<div class="pure-menu pure-menu-horizontal bottom-margin">
    <form action="{$conf->action_url}NoteShowLike" method="post" class="pure-menu-heading pure-menu-link">
        <input name="id" value="{$user->id}" hidden="true" />
        <input type="submit" value="My Notes" class="pure-menu-heading pure-menu-link" />
    </form>
    <form action="{$conf->action_url}personEdit" method="post" class="pure-menu-heading pure-menu-link">
        <input name="id" value="{$user->id}" hidden="true" />
        <input type="submit" value="My profile" class="pure-menu-heading pure-menu-link" />
    </form>
    <form action="{$conf->action_url}NoteNew" method="post" class="pure-menu-heading pure-menu-link">
        <input name="id" value="{$user->id}" hidden="true" />
        <input type="submit" value="New note" class="pure-menu-heading pure-menu-link" />
    </form>
    {if ($user->privilege == "admin")}
        <a href="{$conf->action_url}personShowAll" class="pure-menu-heading pure-menu-link">Users</a>
        <a href="{$conf->action_url}NoteShowAll" class="pure-menu-heading pure-menu-link">Show All Notes</a>
    {/if}
    {if ($user->privilege == "moderator")}
        <a href="{$conf->action_url}" class="pure-menu-heading pure-menu-link">Show All Notes</a>
    {/if}
    <a href="{$conf->action_url}logout" class="pure-menu-heading pure-menu-link">wyloguj</a>
    <span style="float:right;">użytkownik: {$user->login}, rola: {$user->privilege}</span>
</div>
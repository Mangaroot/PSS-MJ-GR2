<?php
/* Smarty version 3.1.30, created on 2023-03-11 21:24:03
  from "C:\xampp\htdocs\Notatnik\app\views\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_640ce363b8afe5_42132270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb5c5ae0bc373971d976902e3c4c062b96532567' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Notatnik\\app\\views\\templates\\header.tpl',
      1 => 1678566240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640ce363b8afe5_42132270 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="pure-menu pure-menu-horizontal bottom-margin">
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
NoteShowLike" method="post" class="pure-menu-heading pure-menu-link">
        <input name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" hidden="true" />
        <input type="submit" value="My Notes" class="pure-menu-heading pure-menu-link" />
    </form>
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personEdit" method="post" class="pure-menu-heading pure-menu-link">
        <input name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" hidden="true" />
        <input type="submit" value="My profile" class="pure-menu-heading pure-menu-link" />
    </form>
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
NoteNew" method="post" class="pure-menu-heading pure-menu-link">
        <input name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" hidden="true" />
        <input type="submit" value="New note" class="pure-menu-heading pure-menu-link" />
    </form>
    <?php if (($_smarty_tpl->tpl_vars['user']->value->privilege == "admin")) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personShowAll" class="pure-menu-heading pure-menu-link">Users</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
NoteShowAll" class="pure-menu-heading pure-menu-link">Show All Notes</a>
    <?php }?>
    <?php if (($_smarty_tpl->tpl_vars['user']->value->privilege == "moderator")) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
" class="pure-menu-heading pure-menu-link">Show All Notes</a>
    <?php }?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="pure-menu-heading pure-menu-link">wyloguj</a>
    <span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->privilege;?>
</span>
</div><?php }
}

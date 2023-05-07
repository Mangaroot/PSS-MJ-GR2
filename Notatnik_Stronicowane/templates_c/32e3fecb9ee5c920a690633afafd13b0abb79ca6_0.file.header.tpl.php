<?php
/* Smarty version 3.1.30, created on 2023-03-10 22:56:40
  from "C:\xampp\htdocs\AplikacjeSieciowe\AS\Notatnik\app\views\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_640ba798d747a9_85406600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32e3fecb9ee5c920a690633afafd13b0abb79ca6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\AS\\Notatnik\\app\\views\\templates\\header.tpl',
      1 => 1678485338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640ba798d747a9_85406600 (Smarty_Internal_Template $_smarty_tpl) {
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
" class="pure-menu-heading pure-menu-link">Show All Notes</a>
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

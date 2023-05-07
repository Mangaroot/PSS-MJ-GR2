<?php
/* Smarty version 3.1.30, created on 2023-03-11 20:32:41
  from "C:\xampp\htdocs\AplikacjeSieciowe\AS\Notatnik\app\views\NoteEditView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_640cd7598afa56_91186009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d84798994131389ab435066e504002e5bf9adc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\AS\\Notatnik\\app\\views\\NoteEditView.tpl',
      1 => 1678563157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:header.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_640cd7598afa56_91186009 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1149731095640cd7598af467_90901640', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_1149731095640cd7598af467_90901640 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div>
        <h1>Notatka</h1>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
NoteSave" method="post" class="pure-form pure-form-aligned bottom-margin">
            <input name="idNote" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->idNote;?>
" hidden="true" />
            <input name="userid" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->idUser;?>
" hidden="true" />
            <label>Title</label>
            <input name="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->nameNote;?>
" />
            <label>Description</label>
            <textarea name="description"><?php echo $_smarty_tpl->tpl_vars['form']->value->description;?>
</textarea>
            <input type="submit" value="Zapisz" />
        </form>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
NoteDelete" method="post">
            <input name="idNote" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->idNote;?>
" hidden="true" />
            <input type="submit" value="Usuń" />
        </form>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}

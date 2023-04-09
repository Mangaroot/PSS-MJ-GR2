<?php
/* Smarty version 3.1.30, created on 2023-03-12 09:06:17
  from "C:\xampp\htdocs\Notatnik\app\views\NoteListView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_640d87f94bec58_80165933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c81b1aa26ff75d4fbdab98cdca170f864dbbfd6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Notatnik\\app\\views\\NoteListView.tpl',
      1 => 1678608330,
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
function content_640d87f94bec58_80165933 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1636375554640d87f94be820_80202434', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_1636375554640d87f94be820_80202434 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div>
        <h1>Notes</h1>
        <div>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
NoteShowLike" method="post" class="pure-form pure-form-aligned bottom-margin">
                <input name="searchbar" placeholder="Search bar" />
                <input type="submit" value="Szukaj" />
            </form>
        </div>
        <ul>
            <?php if (isset($_smarty_tpl->tpl_vars['notes']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notes']->value, 'result');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
?>
                    <h2><?php echo $_smarty_tpl->tpl_vars['result']->value['Name'];?>
</h2><h2><?php echo $_smarty_tpl->tpl_vars['result']->value['Nick'];?>
</h2><p><?php echo $_smarty_tpl->tpl_vars['result']->value['Description'];?>
</p><form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
NoteEdit" method="post"><input name="idNote" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['NotesID'];?>
" hidden="true" /><input type="submit" value="Edytuj" /></form>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <?php }?>
        </ul>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}

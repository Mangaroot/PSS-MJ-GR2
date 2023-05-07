<?php
/* Smarty version 3.1.30, created on 2023-05-07 18:39:25
  from "C:\xampp\htdocs\AplikacjeSieciowe\AS\Notatnik\app\views\NoteListView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6457d43dcf99d3_34459724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26eddaa346542c5d1c96e79beb26be1f9b30f6b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\AS\\Notatnik\\app\\views\\NoteListView.tpl',
      1 => 1683477563,
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
function content_6457d43dcf99d3_34459724 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7137053346457d43dcf84e0_71452969', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_7137053346457d43dcf84e0_71452969 extends Smarty_Internal_Block
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
            <div>
                <?php
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['key']->step = 1;$_smarty_tpl->tpl_vars['key']->total = (int) ceil(($_smarty_tpl->tpl_vars['key']->step > 0 ? $_smarty_tpl->tpl_vars['counter']->value/3+1 - (1) : 1-($_smarty_tpl->tpl_vars['counter']->value/3)+1)/abs($_smarty_tpl->tpl_vars['key']->step));
if ($_smarty_tpl->tpl_vars['key']->total > 0) {
for ($_smarty_tpl->tpl_vars['key']->value = 1, $_smarty_tpl->tpl_vars['key']->iteration = 1;$_smarty_tpl->tpl_vars['key']->iteration <= $_smarty_tpl->tpl_vars['key']->total;$_smarty_tpl->tpl_vars['key']->value += $_smarty_tpl->tpl_vars['key']->step, $_smarty_tpl->tpl_vars['key']->iteration++) {
$_smarty_tpl->tpl_vars['key']->first = $_smarty_tpl->tpl_vars['key']->iteration == 1;$_smarty_tpl->tpl_vars['key']->last = $_smarty_tpl->tpl_vars['key']->iteration == $_smarty_tpl->tpl_vars['key']->total;?>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
NoteShowLike" method="post">
                        <input type="number" name="page" value="<?php echo $_smarty_tpl->tpl_vars['key']->value-1;?>
" hidden="true" />
                        <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" />
                    </form>
                <?php }
}
?>

            </div>
        </div>
        <ul>
            <?php if (isset($_smarty_tpl->tpl_vars['notes']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notes']->value, 'result');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
?>
                    <h2><?php echo $_smarty_tpl->tpl_vars['result']->value['Name'];?>
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

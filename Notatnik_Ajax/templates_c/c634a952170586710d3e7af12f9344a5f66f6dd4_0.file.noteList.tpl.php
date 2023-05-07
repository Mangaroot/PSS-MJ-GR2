<?php
/* Smarty version 3.1.30, created on 2023-05-08 00:27:22
  from "C:\xampp\htdocs\AplikacjeSieciowe\AS\Notatnik\app\views\templates\noteList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_645825cae18222_56586300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c634a952170586710d3e7af12f9344a5f66f6dd4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\AS\\Notatnik\\app\\views\\templates\\noteList.tpl',
      1 => 1683497756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645825cae18222_56586300 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
    <div>
        <?php
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['key']->step = 1;$_smarty_tpl->tpl_vars['key']->total = (int) ceil(($_smarty_tpl->tpl_vars['key']->step > 0 ? $_smarty_tpl->tpl_vars['counter']->value/3+1 - (1) : 1-($_smarty_tpl->tpl_vars['counter']->value/3)+1)/abs($_smarty_tpl->tpl_vars['key']->step));
if ($_smarty_tpl->tpl_vars['key']->total > 0) {
for ($_smarty_tpl->tpl_vars['key']->value = 1, $_smarty_tpl->tpl_vars['key']->iteration = 1;$_smarty_tpl->tpl_vars['key']->iteration <= $_smarty_tpl->tpl_vars['key']->total;$_smarty_tpl->tpl_vars['key']->value += $_smarty_tpl->tpl_vars['key']->step, $_smarty_tpl->tpl_vars['key']->iteration++) {
$_smarty_tpl->tpl_vars['key']->first = $_smarty_tpl->tpl_vars['key']->iteration == 1;$_smarty_tpl->tpl_vars['key']->last = $_smarty_tpl->tpl_vars['key']->iteration == $_smarty_tpl->tpl_vars['key']->total;?>
            <div>
                <button onclick="sendAjaxRequest(<?php echo $_smarty_tpl->tpl_vars['key']->value-1;?>
)"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</button>
            </div>
        <?php }
}
?>

    </div>
</div>
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

<?php }
}
}

<?php
/* Smarty version 3.1.30, created on 2023-05-07 18:48:25
  from "C:\xampp\htdocs\AplikacjeSieciowe\AS\Notatnik\app\views\PersonListView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6457d659844ff6_45816274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be4769c66390f3dd9193ea0b9931c871185474e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\AS\\Notatnik\\app\\views\\PersonListView.tpl',
      1 => 1683478101,
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
function content_6457d659844ff6_45816274 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11205483886457d659844421_61919588', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_11205483886457d659844421_61919588 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div>
        <h1>Users List</h1>
        <div>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personShowLike" method="post"
                class="pure-form pure-form-aligned bottom-margin">
                <input name="searchbar" placeholder="Search bar" />
                <input type="submit" value="Szukaj" />
            </form>
        </div>
        <ul>
            <?php if (isset($_smarty_tpl->tpl_vars['users']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'result');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
?>
                    <div>
                        <div>
                            <?php echo $_smarty_tpl->tpl_vars['result']->value['FirstName'];?>

                        </div>
                        <div>
                            <?php echo $_smarty_tpl->tpl_vars['result']->value['Mail'];?>

                        </div>
                        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personEdit" method="post"
                            class="pure-form pure-form-aligned bottom-margin">
<input name="id" value=<?php echo $_smarty_tpl->tpl_vars['result']->value['UserID'];?>
 hidden="true" />
                            <input type="submit" value="Edytuj">
                        </form>
                        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personDelete" method="post"
                            class="pure-form pure-form-aligned bottom-margin">
<input name="id" value=<?php echo $_smarty_tpl->tpl_vars['result']->value['UserID'];?>
 hidden="true" />
                            <input type="submit" value="Zbanuj">
                        </form>
                    </div>
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

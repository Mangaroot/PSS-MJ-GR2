<?php
/* Smarty version 3.1.30, created on 2023-03-11 21:12:38
  from "C:\xampp\htdocs\Notatnik\app\views\RegisterView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_640ce0b68d11f4_27549072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b965b35c44f515181ac702d969ead15767d78529' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Notatnik\\app\\views\\RegisterView.tpl',
      1 => 1678458667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_640ce0b68d11f4_27549072 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21659421640ce0b68d0dc2_81935413', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_21659421640ce0b68d0dc2_81935413 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
register" method="post" class="pure-form pure-form-aligned bottom-margin">
        <h1>Rejestracja do systemu</h1>
        <fieldset>
            <div class="pure-control-group">
                <label for="id_login">name: </label>
                <input id="id_login" type="text" name="name" />
            </div>
            <div class="pure-control-group">
                <label for="id_pass">surname: </label>
                <input id="id_pass" type="text" name="surname" /><br />
            </div>
            <div class="pure-control-group">
                <label for="id_pass">mail: </label>
                <input id="id_pass" type="text" name="mail" /><br />
            </div>
            <div class="pure-control-group">
                <label for="id_pass">password: </label>
                <input id="id_pass" type="password" name="pass" /><br />
            </div>
            <div class="pure-control-group">
                <label for="id_pass">password repeat: </label>
                <input id="id_pass" type="password" name="pass2" /><br />
            </div>
            <div class="pure-controls">
                <input type="submit" value="zarejestruj" class="pure-button pure-button-primary" />
            </div>
        </fieldset>
    </form>
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login">Masz już konto? zaloguj się!</a>

    <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
}
}
/* {/block 'content'} */
}

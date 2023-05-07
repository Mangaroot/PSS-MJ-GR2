<?php
/* Smarty version 3.1.30, created on 2023-05-08 01:02:04
  from "C:\xampp\htdocs\AplikacjeSieciowe\AS\Notatnik\app\views\NoteListView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_64582decd9c7b7_90596047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26eddaa346542c5d1c96e79beb26be1f9b30f6b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AplikacjeSieciowe\\AS\\Notatnik\\app\\views\\NoteListView.tpl',
      1 => 1683500506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:header.tpl' => 1,
    'file:noteList.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_64582decd9c7b7_90596047 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30026198864582decd9c259_85683707', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_30026198864582decd9c259_85683707 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
>
        function sendAjaxRequest(page) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        // handle success response
                        console.log(xhr.responseText);
                        document.body.innerHTML = xhr.responseText;
                    } else {
                        // handle error response
                        console.error('Error:', xhr.statusText);
                    }
                }
            };
xhr.open('POST', '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
NoteShowLike', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            var data = 'searchbar=' + document.getElementById('searchbar').value + '&page=' + page; // add your data here
            xhr.send(data);
        }
    <?php echo '</script'; ?>
>
    <div>
        <h1>Notes</h1>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
NoteShowLike" method="post" class="pure-form pure-form-aligned bottom-margin">
            <input id="searchbar" name="searchbar" placeholder="Search bar" />
            <input type="submit" value="Szukaj" />
        </form>
        <div id="result">
            <?php $_smarty_tpl->_subTemplateRender("file:noteList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}

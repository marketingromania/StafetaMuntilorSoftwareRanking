<?php /* Smarty version 3.1.27, created on 2016-07-20 04:47:13
         compiled from "D:\Stafeta Muntilor Software\www\stafeta\templates\challenges\results.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30455578ed82100cd25_08900423%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89ded8bc573453288adb096c0e9ecc60b473278d' => 
    array (
      0 => 'D:\\Stafeta Muntilor Software\\www\\stafeta\\templates\\challenges\\results.tpl',
      1 => 1436964904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30455578ed82100cd25_08900423',
  'variables' => 
  array (
    'category' => 0,
    'challenge' => 0,
    'categoryChallenge' => 0,
    'entries' => 0,
    'entry' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_578ed82110f371_39456468',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_578ed82110f371_39456468')) {
function content_578ed82110f371_39456468 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30455578ed82100cd25_08900423';
?>
<p class="home"><strong>Rezultate Proba - <?php echo $_smarty_tpl->tpl_vars['category']->value['category_name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['challenge']->value['challenge_name'];?>
</strong></p>

<div class="total-continut">
    <?php if (!empty($_smarty_tpl->tpl_vars['categoryChallenge']->value['category_challenge_id'])) {?>
        <table class="afisare-tabel">
            <tr>
                <th>Nume Echipa</th>
                <th></th>
            </tr>
            <?php
$_from = $_smarty_tpl->tpl_vars['entries']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars["entry"] = new Smarty_Variable;
$_smarty_tpl->tpl_vars["entry"]->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars["entry"]->value) {
$_smarty_tpl->tpl_vars["entry"]->_loop = true;
$foreach_entry_Sav = $_smarty_tpl->tpl_vars["entry"];
?>
                <tr>
                    <td><a href="/stafeta/?page=teams/update&team_id=<?php echo $_smarty_tpl->tpl_vars['entry']->value['team_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value['team_name'];?>
</a></td>
                    <td class="tabel-optiune"><a href="/stafeta/?page=challenges/update_results&category_challenge_id=<?php echo $_smarty_tpl->tpl_vars['categoryChallenge']->value['category_challenge_id'];?>
&team_id=<?php echo $_smarty_tpl->tpl_vars['entry']->value['team_id'];?>
">Modifica</a></td>
                </tr>
            <?php
$_smarty_tpl->tpl_vars["entry"] = $foreach_entry_Sav;
}
?>
        </table>
    <?php } else { ?>
        Inainte de a introduce rezultatele probei, te rugam sa <a href="/stafeta/?page=challenges/update&challenge_id=<?php echo $_smarty_tpl->tpl_vars['challenge']->value['challenge_id'];?>
&category_id=<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><b>configurezi proba aici</b></a>.
    <?php }?>


</div><?php }
}
?>
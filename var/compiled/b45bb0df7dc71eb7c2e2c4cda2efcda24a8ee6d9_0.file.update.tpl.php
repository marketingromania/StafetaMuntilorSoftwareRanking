<?php /* Smarty version 3.1.27, created on 2016-07-27 21:26:00
         compiled from "D:\Stafeta Muntilor Software\www\stafeta\templates\knowledge\update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:102345798fcb8c66de8_25250803%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b45bb0df7dc71eb7c2e2c4cda2efcda24a8ee6d9' => 
    array (
      0 => 'D:\\Stafeta Muntilor Software\\www\\stafeta\\templates\\knowledge\\update.tpl',
      1 => 1459713400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102345798fcb8c66de8_25250803',
  'variables' => 
  array (
    'team' => 0,
    'category' => 0,
    'knowledge' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5798fcb8cefc17_95869882',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5798fcb8cefc17_95869882')) {
function content_5798fcb8cefc17_95869882 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '102345798fcb8c66de8_25250803';
?>
			<?php echo '<script'; ?>
 src="js/lib/jquery.inputmask.bundle.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
>
			$(document).ready(function() {
				if (typeof($.fn.inputmask) == 'function') {
					$(".time").inputmask("h:s:s",{ "placeholder": "hh:mm:ss" });
				}
			});
			<?php echo '</script'; ?>
>

			<center><p class="home"><strong><?php echo $_smarty_tpl->tpl_vars['team']->value['team_name'];?>
 - (Proba Cunostinte Turistice) - Categoria <?php echo $_smarty_tpl->tpl_vars['category']->value['category_name'];?>
 </strong>
			<br />
			Club: <?php echo $_smarty_tpl->tpl_vars['team']->value['club_name'];?>
 </p>
			</center>
			<div class="total-continut">
			                  <div id="formular">
                        <div id="formular-continut" class="animate form">
			<form action="/stafeta/?page=knowledge/update&category_id=<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
&team_id=<?php echo $_smarty_tpl->tpl_vars['team']->value['team_id'];?>
" method="POST" autocomplete="off">
					
					<p>
					<label for="time1" class="time1"> Timp Realizat :</label>
					<input type="text" name="time" id="time" class="time" value="<?php if ($_smarty_tpl->tpl_vars['knowledge']->value) {
echo $_smarty_tpl->tpl_vars['knowledge']->value['time'];
}?>" size="50" required placeholder="introduceti timpul in formatul: hh:mm:ss"  oninvalid="this.setCustomValidity('Camp obligatoiu')" oninput="setCustomValidity('')" >
					</p>
					
					<br />
					<p>
					<label for="answer" class="answer"> Intrebari Gresite : </label>
					<input type="text" name="answers" id="answer" value="<?php if ($_smarty_tpl->tpl_vars['knowledge']->value) {
echo $_smarty_tpl->tpl_vars['knowledge']->value['answers'];
}?>" size="50" required placeholder="numarul de intrebari gresite"  oninvalid="this.setCustomValidity('Camp obligatoiu')" oninput="setCustomValidity('')" >				
					</p>

					<br />
					<p>
					<label for="wrongquestions" class="wrongquestions"> Sau gresit intrebarile: </label>
					<input type="text" name="wrongquestions" id="wrongquestions" value="<?php if ($_smarty_tpl->tpl_vars['knowledge']->value) {
echo $_smarty_tpl->tpl_vars['knowledge']->value['wrongquestions'];
}?>" size="50" placeholder="Sa raspuns gresit la urmatoarele intrebari. Ex: 1,2,7,10 (nr intrebre gresita si virgula)"  oninvalid="this.setCustomValidity('Camp obligatoiu')" oninput="setCustomValidity('')" >				
					</p>


					<br />
					<p>
					<label for="abandon" class="abandon"> Abandon / Neprezentare:  </label>
					
					<select name="abandon" class="abandon">
							<option value="0"  <?php if ($_smarty_tpl->tpl_vars['knowledge']->value && $_smarty_tpl->tpl_vars['knowledge']->value['abandon'] == 0) {?>selected="selected"<?php }?>>Nu</option>
							<option value="1"  <?php if ($_smarty_tpl->tpl_vars['knowledge']->value && $_smarty_tpl->tpl_vars['knowledge']->value['abandon'] == 1) {?>selected="selected"<?php }?>>Da</option>
						</select>
					</p>
							<p class="formular-continut button"> 
					<input type="submit" name="submit" id="submit" value="Update">
							</p>
						
			</form>			</div>
								
						</div>
<a href="/stafeta/?page=knowledge/lists&category_id=<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
" class="btn btn-primary clone">INAPOI</a>
<br /><br />

													<div><b>Nota:</b></div>
													<p>Se va completa in felul urmator:</p>
													<p>Timp Realizat: 00:03:05  unde 00 (ore), 03 (minute), 05 (secunde).</p>
													<p>Intrebari Gresite: cate intrebari a gresit echipa ( in cifre). Exemplu: 2 </p>
													<p>Sau gresit intrebarile: care sunt intrebarile gresite. Exemplu: 2, 4, 10 </p>
													<p>Abandon / Neprezentare : se va selecta DA, doar daca echipa a abandonat sau nu s-a prezentat.</p>
													<div>
													<strong>Atunci cand este Abandon sau echipa nu s-a prezentat, este important sa adaugati 0 peste tot dupa care se va bifa : Abandon DA </strong>
													</div>
			</div>
<?php }
}
?>
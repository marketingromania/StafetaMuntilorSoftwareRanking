<?php /* Smarty version 3.1.27, created on 2016-04-03 15:11:14
         compiled from "/var/www/html/stafeta/templates/others/lists.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:99704222057016ad245b212_46431662%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd93543efbbba8a1f03fe7e3580c914947eac4519' => 
    array (
      0 => '/var/www/html/stafeta/templates/others/lists.tpl',
      1 => 1435959644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99704222057016ad245b212_46431662',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57016ad2471c42_24085560',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57016ad2471c42_24085560')) {
function content_57016ad2471c42_24085560 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '99704222057016ad245b212_46431662';
?>
<p class="home"><strong>Alte  Probe - Stafeta Muntilor</strong></p>
<div class="total-continut">
	<br />	

<h4><b>Proba de Escalada</b></h4><br />

<div>
	Categoria Open: 
	<a href="/stafeta/?page=climbing/lists&category_id=4" class="btn btn-primary clone">Completeaza Lista</a>
	<a href="/stafeta/?page=ranking/climbing&category_id=4" class="btn btn-primary clone">Clasament Escalada</a>
	<a href="/stafeta/?page=ranking/climbingnods&category_id=4" class="btn btn-primary clone">Clasament Noduri</a>
</div>

	<br />

<div>
	Categoria Juniori: 
	<a href="/stafeta/?page=climbing/lists&category_id=2" class="btn btn-primary clone">Completeaza Lista</a>
	<a href="/stafeta/?page=ranking/climbing&category_id=2" class="btn btn-primary clone">Clasament Escalada</a>
	<a href="/stafeta/?page=ranking/climbingnods&category_id=2" class="btn btn-primary clone">Clasament Noduri</a>
	</div>

	<br />
	
<div>
	Categoria Family: 
	<a href="/stafeta/?page=climbing/lists&category_id=1" class="btn btn-primary clone">Completeaza Lista</a>
	<a href="/stafeta/?page=ranking/climbing&category_id=1" class="btn btn-primary clone">Clasament Escalada</a>
	<a href="/stafeta/?page=ranking/climbingnods&category_id=1" class="btn btn-primary clone">Clasament Noduri</a>
</div>

	<br />
	
<div>
	Categoria Feminin: 
	<a href="/stafeta/?page=climbing/lists&category_id=6" class="btn btn-primary clone">Completeaza Lista</a>
	<a href="/stafeta/?page=ranking/climbing&category_id=6" class="btn btn-primary clone">Clasament Escalada</a>
	<a href="/stafeta/?page=ranking/climbingnods&category_id=6" class="btn btn-primary clone">Clasament Noduri</a>
	</div>

	<br />
	
<div>
	Categoria Veterani: 
	<a href="/stafeta/?page=climbing/lists&category_id=5" class="btn btn-primary clone">Completeaza Lista</a>
	<a href="/stafeta/?page=ranking/climbing&category_id=5" class="btn btn-primary clone">Clasament Escalada</a>
	<a href="/stafeta/?page=ranking/climbingnods&category_id=5" class="btn btn-primary clone">Clasament Noduri</a>
</div>

	<br />
	
<div>
	Categoria Elite: 
	<a href="/stafeta/?page=climbing/lists&category_id=3" class="btn btn-primary clone">Completeaza Lista</a>
	<a href="/stafeta/?page=ranking/climbing&category_id=3" class="btn btn-primary clone">Clasament Escalada</a>
	<a href="/stafeta/?page=ranking/climbingnods&category_id=3" class="btn btn-primary clone">Clasament Noduri</a>
</div>


</div>
<?php }
}
?>
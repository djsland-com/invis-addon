<?php
$load_addons = 'invis';
require_once('../../../system/config_addons.php');

if(!boomAllow($cody['can_manage_addons'])){
	die();
}

?>
<style>
</style>
<?php echo elementTitle($data['addons'], 'loadLob(\'admin/setting_addons.php\');'); ?>
<div class="page_full">
	<div class="page_element">
		<p>Note: After installing and uninstalling you should run /clearcache to remove the cache for the function_main.js file.<br><br>Credit to DJ for Coding the /invis addon!</p>
	</div>
</div>
<?phprequire_once("config.php");require_once("Rain/tpl.php");$cat = (isset($_REQUEST["cat"]))? $_REQUEST["cat"]:"Category_1";	$tpl = new Rain\Tpl;$tpl->configure(array('production' => PRODUCTION));$tpl->assign("cat", $cat);$tpl->assign("cat_list", $video_cat_list);$tpl->draw("videos/views/view_all");		unset($tpl);?>
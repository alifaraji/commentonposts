<?php
/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
    exit;
}

if (empty($lang) || !is_array($lang))
{
    $lang = array();
}
 
// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang['permission_cat']['comments'] = 'دیدگاه در پست';
$lang = array_merge($lang, array(
    'acl_m_comedit'  		=> array('lang' => 'می تواند دیدگاه ها را ویرایش کند.', 'cat' => 'comments'),
    'acl_f_comedit'  	    => array('lang' => 'می تواند دیدگاه های خود را ویرایش کند.', 'cat' => 'comments'),
    'acl_m_comdelete'  		=> array('lang' => 'می تواند دیدگاه ها را حذف کند.', 'cat' => 'comments'),
	'acl_f_comdelete'  	    => array('lang' => 'می تواند دیدگاه های خود را حذف کند.', 'cat' => 'comments'),
	'acl_f_comsend'  	    => array('lang' => 'می تواند دیدگاه ارسال کند.', 'cat' => 'comments'),
	'acl_u_seecom'  	    => array('lang' => 'می تواند دیدگاه ها را ببیند.', 'cat' => 'comments'),
	'acl_f_sendcom'  	    => array('lang' => 'می تواند دیدگاه ارسال کند.', 'cat' => 'comments'),
));
?>
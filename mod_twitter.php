<?php
# @Author: SPEDI srl
# @Date:   15-02-2018
# @Email:  sviluppo@spedi.it
# @Last modified by:   SPEDI srl
# @Last modified time: 16-02-2018
# @License: GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
# @Copyright: Copyright (c) SPEDI srl

defined('_JEXEC') or die;

JLoader::register('TwitterAPIExchange', __DIR__ . '/helper.php');

$document = JFactory::getDocument();
$tmpl     = JFactory::getApplication()->getTemplate();

// params
// $jquery                    = $params->get('jquery');
$settings = array(
  'oauth_access_token'        => $params->get('oauth_access_token'),
  'oauth_access_token_secret' => $params->get('oauth_access_token_secret'),
  'consumer_key'              => $params->get('consumer_key'),
  'consumer_secret'           => $params->get('consumer_secret')
);

// gallery id
$mod_id = substr(md5($module->id.$module->title), 1, 5);

// if($jquery)
//   JHtml::_('jquery.framework');

/* script */
// if($magnific){
//   $extensionPath = '/templates/'.$tmpl.'/dist/magnific/';
//   if(file_exists(JPATH_SITE.$extensionPath)){
//     $document->addStyleSheet(JUri::base(true).'/templates/'.$tmpl.'/dist/magnific/magnific-popup.min.css');
//     $document->addScript(JUri::base(true).'/templates/'.$tmpl.'/dist/magnific/jquery.magnific-popup.min.js', 'text/javascript', true, false);
//   } else{
//     $document->addStyleSheet(JUri::base(true).'/modules/'.$module->module.'/dist/magnific/magnific-popup.min.css');
//     $document->addScript(JUri::base(true).'/modules/'.$module->module.'/dist/magnific/jquery.magnific-popup.min.js', 'text/javascript', true, false);
//   }
// }

require JModuleHelper::getLayoutPath($module->module, $params->get('layout'));

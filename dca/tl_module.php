<?php

/**
 * twitter_widgets extension for Contao Open Source CMS
 * 
 * Copyright (C) 2013 Codefog
 * 
 * @package twitter_widgets
 * @link    http://codefog.pl
 * @author  Kamil Kuzminski <kamil.kuzminski@codefog.pl>
 * @license LGPL
 */


/**
 * Load tl_content language file
 */
System::loadLanguageFile('tl_content');


/**
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['twitter_share']     = '{title_legend},name,headline,type;{twitter_legend},twitter_url,twitter_tweet,twitter_counter,twitter_via,twitter_related,twitter_hashtag,twitter_bigButton,twitter_doNotTailor;{template_legend:hide},twitter_template,twitter_language;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['twitter_follow']    = '{title_legend},name,headline,type;{twitter_legend},twitter_username,twitter_showCounter,twitter_showUsername,twitter_bigButton,twitter_doNotTailor;{template_legend:hide},twitter_template,twitter_language,twitter_width,twitter_align;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['twitter_tag']       = '{title_legend},name,headline,type;{twitter_legend},twitter_hashtag,twitter_tweet,twitter_related,twitter_url,twitter_bigButton,twitter_doNotTailor;{template_legend:hide},twitter_template,twitter_language;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['twitter_mention']   = '{title_legend},name,headline,type;{twitter_legend},twitter_username,twitter_tweet,twitter_related,twitter_bigButton,twitter_doNotTailor;{template_legend:hide},twitter_template,twitter_language;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['twitter_profile']   = '{title_legend},name,headline,type;{twitter_legend},twitter_username,twitter_live,twitter_scrollbar,twitter_behavior,twitter_loop,twitter_interval,twitter_rpp;{template_legend:hide},twitter_template,twitter_width,twitter_height,twitter_autoHeight,twitter_shell_background,twitter_shell_color,twitter_tweets_background,twitter_tweets_color,twitter_tweets_links;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['twitter_search']    = '{title_legend},name,headline,type;{twitter_legend},twitter_search,twitter_title,twitter_subject,twitter_live,twitter_scrollbar,twitter_behavior,twitter_loop,twitter_interval;{template_legend:hide},twitter_template,twitter_width,twitter_height,twitter_autoHeight,twitter_shell_background,twitter_shell_color,twitter_tweets_background,twitter_tweets_color,twitter_tweets_links;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['twitter_favorites'] = '{title_legend},name,headline,type;{twitter_legend},twitter_username,twitter_title,twitter_subject,twitter_live,twitter_scrollbar,twitter_behavior,twitter_loop,twitter_interval,twitter_rpp;{template_legend:hide},twitter_template,twitter_width,twitter_height,twitter_autoHeight,twitter_shell_background,twitter_shell_color,twitter_tweets_background,twitter_tweets_color,twitter_tweets_links;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['twitter_list']      = '{title_legend},name,headline,type;{twitter_legend},twitter_username,twitter_list,twitter_title,twitter_subject,twitter_live,twitter_scrollbar,twitter_behavior,twitter_loop,twitter_interval,twitter_rpp;{template_legend:hide},twitter_template,twitter_width,twitter_height,twitter_autoHeight,twitter_shell_background,twitter_shell_color,twitter_tweets_background,twitter_tweets_color,twitter_tweets_links;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['twitter_custom']    = '{title_legend},name,headline,type;{twitter_legend},twitter_custom;{template_legend:hide},twitter_template;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';


/**
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_username'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_username'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_url'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_url'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('rgxp'=>'url', 'maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_tweet'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_tweet'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_counter'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_counter'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('horizontal', 'vertical'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_content']['twitter_counter'],
	'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_showCounter'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_showCounter'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_showUsername'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_showUsername'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_via'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_via'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_related'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_related'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_hashtag'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_hashtag'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_bigButton'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_bigButton'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_doNotTailor'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_doNotTailor'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_search'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_search'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_title'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_title'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_subject'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_subject'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_list'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_list'],
	'default'                 => 'd9',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('d9', 'nba-7', 'freedom-of-expression', 'more-twitter-accounts', 'team'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_content']['twitter_list'],
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_live'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_live'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_scrollbar'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_scrollbar'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_behavior'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_behavior'],
	'default'                 => 'all',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('all', 'default'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_content']['twitter_behavior'],
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_loop'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_loop'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_interval'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_interval'],
	'default'                 => 30,
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50'),
	'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_rpp'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_rpp'],
	'default'                 => 4,
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50'),
	'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_shell_background'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_shell_background'],
	'default'                 => '8ec1da',
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'isHexColor'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_shell_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_shell_color'],
	'default'                 => 'ffffff',
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'isHexColor'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_tweets_background'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_tweets_background'],
	'default'                 => 'ffffff',
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'isHexColor'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_tweets_color'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_tweets_color'],
	'default'                 => '444444',
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'isHexColor'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_tweets_links'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_tweets_links'],
	'default'                 => '1985b5',
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>6, 'isHexColor'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_width'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_width'],
	'default'                 => 250,
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50'),
	'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_height'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_height'],
	'default'                 => 300,
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50'),
	'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_autoHeight'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_autoHeight'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_align'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_align'],
	'default'                 => 'left',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('left', 'right'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_content']['twitter_align'],
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_custom'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_custom'],
	'exclude'                 => true,
	'inputType'               => 'textarea',
	'eval'                    => array('mandatory'=>true, 'allowHtml'=>true, 'preserveTags'=>true, 'class'=>'monospace', 'rte'=>'codeMirror|html', 'tl_class'=>'clr'),
	'sql'                     => "text NULL"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_language'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_language'],
	'default'                 => 'en',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => $this->getLanguages(),
	'eval'                    => array('chosen'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(2) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_template'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_template'],
	'default'                 => 'twitter_default',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_twitter', 'getTwitterTemplates'),
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);


/**
 * Provide miscellaneous methods that are used by the data configuration array.
 */
class tl_module_twitter extends \Backend
{

	/**
	 * Return all Twitter templates as array
	 * @param DataContainer
	 * @return array
	 */
	public function getTwitterTemplates(\DataContainer $dc)
	{
		$intPid = $dc->activeRecord->pid;

		if (\Input::get('act') == 'overrideAll')
		{
			$intPid = \Input::get('id');
		}

		return $this->getTemplateGroup('twitter_', $intPid);
	}
}

<?php

/**
 * twitter_widgets extension for Contao Open Source CMS
 *
 * Copyright (C) 2013 Codefog
 *
 * @package twitter_widgets
 * @author  Codefog <http://codefog.pl>
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

$GLOBALS['TL_DCA']['tl_module']['fields']['twitter_width'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['twitter_width'],
	'default'                 => 250,
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50'),
	'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
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

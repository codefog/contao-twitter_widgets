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
 * Extension version
 */
@define('TWITTER_WIDGETS_VERSION', '1.0');
@define('TWITTER_WIDGETS_BUILD', '1');


/**
 * Front end modules
 */
array_insert($GLOBALS['FE_MOD'], 4, array
(
	'twitter' => array
	(
		'twitter_share'     => 'TwitterShareButton',
		'twitter_follow'    => 'TwitterFollowButton',
		'twitter_tag'       => 'TwitterTagButton',
		'twitter_mention'   => 'TwitterMentionButton',
		'twitter_custom'    => 'TwitterCustomWidget'
	)
));


/**
 * Content elements
 */
array_insert($GLOBALS['TL_CTE'], 4, array
(
	'twitter' => array
	(
		'twitter_share'     => 'TwitterShareButton',
		'twitter_follow'    => 'TwitterFollowButton',
		'twitter_tag'       => 'TwitterTagButton',
		'twitter_mention'   => 'TwitterMentionButton',
		'twitter_custom'    => 'TwitterCustomWidget'
	)
));

<?php

/**
 * twitter_widgets extension for Contao Open Source CMS
 *
 * Copyright (C) 2013 Codefog Ltd
 *
 * @package twitter_widgets
 * @author  Codefog Ltd <http://codefog.pl>
 * @author  Kamil Kuzminski <kamil.kuzminski@codefog.pl>
 * @license LGPL
 */


/**
 * Register a custom namespace
 */
ClassLoader::addNamespace('Twitter');


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Twitter\Twitter'                => 'system/modules/twitter_widgets/classes/Twitter.php',
	'Twitter\TwitterHybrid'          => 'system/modules/twitter_widgets/classes/TwitterHybrid.php',

	// Modules
	'Twitter\TwitterShareButton'     => 'system/modules/twitter_widgets/hybrids/TwitterShareButton.php',
	'Twitter\TwitterFollowButton'    => 'system/modules/twitter_widgets/hybrids/TwitterFollowButton.php',
	'Twitter\TwitterTagButton'       => 'system/modules/twitter_widgets/hybrids/TwitterTagButton.php',
	'Twitter\TwitterMentionButton'   => 'system/modules/twitter_widgets/hybrids/TwitterMentionButton.php',
	'Twitter\TwitterCustomWidget'    => 'system/modules/twitter_widgets/hybrids/TwitterCustomWidget.php'
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'twitter_default' => 'system/modules/twitter_widgets/templates'
));

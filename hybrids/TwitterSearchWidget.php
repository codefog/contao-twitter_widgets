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
 * Run in a custom namespace, so the class can be replaced
 */
namespace Twitter;


/**
 * Twitter hybrid "search widget".
 */
class TwitterSearchWidget extends \TwitterHybrid
{

	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new \BackendTemplate('be_wildcard');

			$objTemplate->wildcard = '### TWITTER SEARCH WIDGET ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;

			return $objTemplate->parse();
		}

		return parent::generate();
	}


	/**
	 * Generate the module
	 */
	protected function compile()
	{
		$this->Template->widget = \Twitter::generateSearchWidget($this->arrData);
	}
}

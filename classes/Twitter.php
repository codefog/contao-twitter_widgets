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

namespace Twitter;


/**
 * Provide methods to handle Twitter plugins.
 */
class Twitter
{

	/**
	 * Generate the share button and return it as HTML string
	 * @param array
	 * @return string
	 */
	public static function generateShareButton($arrData)
	{
		global $objPage;

		if ($objPage->outputFormat == 'html5')
		{
			return '<a href="https://twitter.com/share" class="twitter-share-button" data-url="' . $arrData['twitter_url'] . '" data-text="' . $arrData['twitter_tweet'] . '" data-via="' . $arrData['twitter_via'] . '" data-size="' . ($arrData['twitter_bigButton'] ? 'large' : 'medium') . '" data-related="' . $arrData['twitter_related'] . '" data-hashtags="' . $arrData['twitter_hashtags'] . '" data-dnt="' . ($arrData['twitter_doNoTrail'] ? 'true' : 'false') . '" data-count="' . ($arrData['twitter_counter'] ? $arrData['twitter_counter'] : 'none') . '" data-lang="' . $arrData['twitter_language'] . '"></a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>';
		}

		return '<a href="https://twitter.com/share?url=' . urlencode($arrData['twitter_url']) . '&amp;text=' . urlencode($arrData['twitter_tweet']) . '&amp;via=' . $arrData['twitter_via'] . '&amp;size=' . ($arrData['twitter_bigButton'] ? 'large' : 'medium') . '&amp;related=' . $arrData['twitter_related'] . '&amp;hashtags=' . $arrData['twitter_hashtags'] . '&amp;dnt=' . ($arrData['twitter_doNoTrail'] ? 'true' : 'false') . '&amp;count=' . ($arrData['twitter_counter'] ? $arrData['twitter_counter'] : 'none') . '&amp;lang=' . $arrData['twitter_language'] . '" class="twitter-share-button"></a>
<script type="text/javascript">/* <![CDATA[ */!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");/* ]]> */</script>';
	}


	/**
	 * Generate the follow button and return it as HTML string
	 * @param array
	 * @return string
	 */
	public static function generateFollowButton($arrData)
	{
		global $objPage;

		if ($objPage->outputFormat == 'html5')
		{
			return '<a href="https://twitter.com/' . $arrData['twitter_username'] . '" class="twitter-follow-button" data-show-count="' . ($arrData['twitter_showCounter'] ? 'true' : 'false') . '" data-size="' . ($arrData['twitter_bigButton'] ? 'large' : 'medium') . '" data-show-screen-name="' . ($arrData['twitter_showUsername'] ? 'true' : 'false') . '" data-dnt="' . ($arrData['twitter_doNoTrail'] ? 'true' : 'false') . '" data-align="' . $arrData['twitter_align'] . '" data-width="' . ($arrData['twitter_width'] ? $arrData['twitter_width'].'px' : '') . '" data-lang="' . $arrData['twitter_language'] . '"></a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>';
		}

		return '<iframe allowtransparency="true" frameborder="0" scrolling="no" src="//platform.twitter.com/widgets/follow_button.html?screen_name=' . $arrData['twitter_username'] . '&amp;show_count=' . ($arrData['twitter_showCounter'] ? 'true' : 'false') . '&amp;show_screen_name=' . ($arrData['twitter_showUsername'] ? 'true' : 'false') . '&amp;dnt=' . ($arrData['twitter_doNotTailor'] ? 'true' : 'false') . '" style="width:' . $arrData['twitter_width'] . 'px; height:20px;"></iframe>';
	}


	/**
	 * Generate the hashtag button and return it as HTML string
	 * @param array
	 * @return string
	 */
	public static function generateHashtagButton($arrData)
	{
		global $objPage;

		if ($objPage->outputFormat == 'html5')
		{
			return '<a href="https://twitter.com/intent/tweet?button_hashtag=' . $arrData['twitter_hashtag'] . '&amp;text=' . rawurlencode($arrData['twitter_tweet']) . '" class="twitter-hashtag-button" data-url="' . $arrData['twitter_url'] . '" data-size="' . ($arrData['twitter_bigButton'] ? 'large' : 'medium') . '" data-related="' . $arrData['twitter_related'] . '" data-dnt="' . ($arrData['twitter_doNoTrail'] ? 'true' : 'false') . '" data-lang="' . $arrData['twitter_language'] . '"></a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>';
		}

		return '<a href="https://twitter.com/intent/tweet?button_hashtag=' . $arrData['twitter_hashtag'] . '&amp;text=' . rawurlencode($arrData['twitter_tweet']) . '&amp;url=' . urlencode($arrData['twitter_url']) . '&amp;size=' . ($arrData['twitter_bigButton'] ? 'large' : 'medium') . '&amp;related=' . $arrData['twitter_related'] . '&amp;dnt=' . ($arrData['twitter_doNoTrail'] ? 'true' : 'false') . '&amp;lang=' . $arrData['twitter_language'] . '" class="twitter-hashtag-button"></a>
<script type="text/javascript">/* <![CDATA[ */!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");/* ]]> */</script>';
	}


	/**
	 * Generate the mention button and return it as HTML string
	 * @param array
	 * @return string
	 */
	public static function generateMentionButton($arrData)
	{
		global $objPage;

		if ($objPage->outputFormat == 'html5')
		{
			return '<a href="https://twitter.com/intent/tweet?screen_name=' . $arrData['twitter_username'] . '&amp;text=' . rawurlencode($arrData['twitter_tweet']) . '" class="twitter-mention-button" data-size="' . ($arrData['twitter_bigButton'] ? 'large' : 'medium') . '" data-related="' . $arrData['twitter_related'] . '" data-dnt="' . ($arrData['twitter_doNoTrail'] ? 'true' : 'false') . '" data-lang="' . $arrData['twitter_language'] . '"></a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>';
		}

		return '<a href="https://twitter.com/intent/tweet?screen_name=' . $arrData['twitter_username'] . '&amp;text=' . rawurlencode($arrData['twitter_tweet']) . '&amp;size=' . ($arrData['twitter_bigButton'] ? 'large' : 'medium') . '&amp;related=' . $arrData['twitter_related'] . '&amp;dnt=' . ($arrData['twitter_doNoTrail'] ? 'true' : 'false') . '&amp;lang=' . $arrData['twitter_language'] . '" class="twitter-mention-button"></a>
<script type="text/javascript">/* <![CDATA[ */!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");/* ]]> */</script>';
	}
}

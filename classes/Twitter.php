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


	/**
	 * Generate the profile widget and return it as HTML string
	 * @param array
	 * @return string
	 */
	public static function generateProfileWidget($arrData)
	{
		global $objPage;

		return "
<script charset=\"utf-8\" src=\"http://widgets.twimg.com/j/2/widget.js\"".(($objPage->outputFormat != 'html5') ? ' type="text/javascript"' : '')."></script>
<script".(($objPage->outputFormat != 'html5') ? ' type="text/javascript"' : '').">
".(($objPage->outputFormat != 'html5') ? '/* <![CDATA[ */' : '')."
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: ".$arrData['twitter_rpp'].",
  interval: ".$arrData['twitter_interval']."000,
  width: ".$arrData['twitter_width'].",
  height: ".$arrData['twitter_height'].",
  theme: {
    shell: {
      background: '#".$arrData['twitter_shell_background']."',
      color: '#".$arrData['twitter_shell_color']."'
    },
    tweets: {
      background: '#".$arrData['twitter_tweets_background']."',
      color: '#".$arrData['twitter_tweets_color']."',
      links: '#".$arrData['twitter_tweets_links']."'
    }
  },
  features: {
    scrollbar: ".($arrData['twitter_scrollbar'] ? 'true' : 'false').",
    loop: ".($arrData['twitter_loop'] ? 'true' : 'false').",
    live: ".($arrData['twitter_live'] ? 'true' : 'false').",
    behavior: '".$arrData['twitter_behavior']."'
  }
}).render().setUser('".$arrData['twitter_username']."').start();
".(($objPage->outputFormat != 'html5') ? '/* ]]> */' : '')."
</script>";
	}


	/**
	 * Generate the search widget and return it as HTML string
	 * @param array
	 * @return string
	 */
	public static function generateSearchWidget($arrData)
	{
		global $objPage;

		return "
<script charset=\"utf-8\" src=\"http://widgets.twimg.com/j/2/widget.js\"".(($objPage->outputFormat != 'html5') ? ' type="text/javascript"' : '')."></script>
<script".(($objPage->outputFormat != 'html5') ? ' type="text/javascript"' : '').">
".(($objPage->outputFormat != 'html5') ? '/* <![CDATA[ */' : '')."
new TWTR.Widget({
  version: 2,
  type: 'search',
  search: '".$arrData['twitter_search']."',
  interval: ".$arrData['twitter_interval']."000,
  title: '".$arrData['twitter_title']."',
  subject: '".$arrData['twitter_subject']."',
  width: ".$arrData['twitter_width'].",
  height: ".$arrData['twitter_height'].",
  theme: {
    shell: {
      background: '#".$arrData['twitter_shell_background']."',
      color: '#".$arrData['twitter_shell_color']."'
    },
    tweets: {
      background: '#".$arrData['twitter_tweets_background']."',
      color: '#".$arrData['twitter_tweets_color']."',
      links: '#".$arrData['twitter_tweets_links']."'
    }
  },
  features: {
    scrollbar: ".($arrData['twitter_scrollbar'] ? 'true' : 'false').",
    loop: ".($arrData['twitter_loop'] ? 'true' : 'false').",
    live: ".($arrData['twitter_live'] ? 'true' : 'false').",
    behavior: '".$arrData['twitter_behavior']."'
  }
}).render().start();
".(($objPage->outputFormat != 'html5') ? '/* ]]> */' : '')."
</script>";
	}


	/**
	 * Generate the favorites widget and return it as HTML string
	 * @param array
	 * @return string
	 */
	public static function generateFavoritesWidget($arrData)
	{
		global $objPage;

		return "
<script charset=\"utf-8\" src=\"http://widgets.twimg.com/j/2/widget.js\"".(($objPage->outputFormat != 'html5') ? ' type="text/javascript"' : '')."></script>
<script".(($objPage->outputFormat != 'html5') ? ' type="text/javascript"' : '').">
".(($objPage->outputFormat != 'html5') ? '/* <![CDATA[ */' : '')."
new TWTR.Widget({
  version: 2,
  type: 'faves',
  rpp: ".$arrData['twitter_rpp'].",
  interval: ".$arrData['twitter_interval']."000,
  title: '".$arrData['twitter_title']."',
  subject: '".$arrData['twitter_subject']."',
  width: ".$arrData['twitter_width'].",
  height: ".$arrData['twitter_height'].",
  theme: {
    shell: {
      background: '#".$arrData['twitter_shell_background']."',
      color: '#".$arrData['twitter_shell_color']."'
    },
    tweets: {
      background: '#".$arrData['twitter_tweets_background']."',
      color: '#".$arrData['twitter_tweets_color']."',
      links: '#".$arrData['twitter_tweets_links']."'
    }
  },
  features: {
    scrollbar: ".($arrData['twitter_scrollbar'] ? 'true' : 'false').",
    loop: ".($arrData['twitter_loop'] ? 'true' : 'false').",
    live: ".($arrData['twitter_live'] ? 'true' : 'false').",
    behavior: '".$arrData['twitter_behavior']."'
  }
}).render().setUser('".$arrData['twitter_username']."').start();
".(($objPage->outputFormat != 'html5') ? '/* ]]> */' : '')."
</script>";
	}


	/**
	 * Generate the list widget and return it as HTML string
	 * @param array
	 * @return string
	 */
	public static function generateListWidget($arrData)
	{
		global $objPage;

		return "
<script charset=\"utf-8\" src=\"http://widgets.twimg.com/j/2/widget.js\"".(($objPage->outputFormat != 'html5') ? ' type="text/javascript"' : '')."></script>
<script".(($objPage->outputFormat != 'html5') ? ' type="text/javascript"' : '').">
".(($objPage->outputFormat != 'html5') ? '/* <![CDATA[ */' : '')."
new TWTR.Widget({
  version: 2,
  type: 'list',
  rpp: ".$arrData['twitter_rpp'].",
  interval: ".$arrData['twitter_interval']."000,
  title: '".$arrData['twitter_title']."',
  subject: '".$arrData['twitter_subject']."',
  width: ".$arrData['twitter_width'].",
  height: ".$arrData['twitter_height'].",
  theme: {
    shell: {
      background: '#".$arrData['twitter_shell_background']."',
      color: '#".$arrData['twitter_shell_color']."'
    },
    tweets: {
      background: '#".$arrData['twitter_tweets_background']."',
      color: '#".$arrData['twitter_tweets_color']."',
      links: '#".$arrData['twitter_tweets_links']."'
    }
  },
  features: {
    scrollbar: ".($arrData['twitter_scrollbar'] ? 'true' : 'false').",
    loop: ".($arrData['twitter_loop'] ? 'true' : 'false').",
    live: ".($arrData['twitter_live'] ? 'true' : 'false').",
    behavior: '".$arrData['twitter_behavior']."'
  }
}).render().setList('".$arrData['twitter_username']."', '".$arrData['twitter_list']."').start();
".(($objPage->outputFormat != 'html5') ? '/* ]]> */' : '')."
</script>";
	}
}

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
 * Fields
 */
$GLOBALS['TL_LANG']['tl_content']['twitter_username']          = array('Benutzername', 'Bitte gib deinen Twitter Benutzername ein.');
$GLOBALS['TL_LANG']['tl_content']['twitter_url']               = array('URL Adresse', 'Hier wird die URL eingegeben, die verwendet werden soll. Leer lassen, wenn die jetzige URL verwendet werden soll.');
$GLOBALS['TL_LANG']['tl_content']['twitter_tweet']             = array('Standard Nachricht', 'Hier wird die Standard-Tweet-Nachricht eingegeben.');
$GLOBALS['TL_LANG']['tl_content']['twitter_counter']           = array('Zähler-Typ', 'Hier kann festgelegt werden, wo der Zähler erscheinen soll. Feld leer lassen, um den Zähler auszublenden.');
$GLOBALS['TL_LANG']['tl_content']['twitter_showCounter']       = array('Zähler zeigen', 'Zähler nebem dem Button anzeigen.');
$GLOBALS['TL_LANG']['tl_content']['twitter_showUsername']      = array('Benutzername anzeigen', 'Benutzernamen im Button anzeigen.');
$GLOBALS['TL_LANG']['tl_content']['twitter_via']               = array('Teilen via', 'Hier kann ein Benutzername eingegeben werden, über den der Tweet geteilt werden soll.');
$GLOBALS['TL_LANG']['tl_content']['twitter_related']           = array('Account empfehlen', 'Hier kann ein Benutzername eingegeben werden, dessen Account empfohlen werden soll.');
$GLOBALS['TL_LANG']['tl_content']['twitter_hashtag']           = array('Hashtags', 'Hier kann der Hashtag eingefügt werden, der verwendet werden soll.');
$GLOBALS['TL_LANG']['tl_content']['twitter_bigButton']         = array('Großer Button', 'Einen großen Twitter Button einfügen.');
$GLOBALS['TL_LANG']['tl_content']['twitter_doNotTailor']       = array('Individuelle Vorschläge', 'Individuelle Vorschläge nicht verwenden.');
$GLOBALS['TL_LANG']['tl_content']['twitter_search']            = array('Suchabfragen', 'Bitte Suchabfrage eingeben.');
$GLOBALS['TL_LANG']['tl_content']['twitter_title']             = array('Titel der Box', 'Bitte Text eingeben, der als Titel der Box verwendet werden soll.');
$GLOBALS['TL_LANG']['tl_content']['twitter_subject']           = array('Thema der Box', 'Bitte Text eingeben, der als Thema der Box angezeigt wird.');
$GLOBALS['TL_LANG']['tl_content']['twitter_list']              = array('Listentyp', 'Hier kann der Listentyp ausgewählt werden.');
$GLOBALS['TL_LANG']['tl_content']['twitter_live']              = array('Resultate aktualisieren', 'Resultate ständig aktualisieren.');
$GLOBALS['TL_LANG']['tl_content']['twitter_scrollbar']         = array('Scrollbalken anzeigen', 'Scrollbalken anzeigen, wenn zu viele Tweets vorhanden sind.');
$GLOBALS['TL_LANG']['tl_content']['twitter_behavior']          = array('Verhalten', 'Hier kann der Verhaltenstyp festgelegt werden.');
$GLOBALS['TL_LANG']['tl_content']['twitter_loop']              = array('Resultate in Endlosschleife', 'Anwählen, wenn die Resultate in einer Endlosschleife dargestellt werden sollen.');
$GLOBALS['TL_LANG']['tl_content']['twitter_interval']          = array('Aktualisierungs-Interval', 'Hier kann das Aktualisierungs-Interval der Tweets in Sekunden angegeben werden.');
$GLOBALS['TL_LANG']['tl_content']['twitter_rpp']               = array('Anzahl Tweets', 'Hier kann die Anzahl der Tweets angegeben werden, die angezeigt werden soll.');
$GLOBALS['TL_LANG']['tl_content']['twitter_shell_background']  = array('Hintergrundfarbe Shell', 'Hier kann die Farbe der oberen und unteren Zonen der Box in hexadezimalen Werten festgelegt werden.');
$GLOBALS['TL_LANG']['tl_content']['twitter_shell_color']       = array('Textfarbe Shell', 'Hier kann die Textfarbe der oberen und unteren Zonen der Box in hexadezimalen Werten festgelegt werden.');
$GLOBALS['TL_LANG']['tl_content']['twitter_tweets_background'] = array('Hintergrundfarbe Tweet', 'Hier kann die Hintergrundfarbe für den Tweet in hexadezimalen Werten festgelegt werden.');
$GLOBALS['TL_LANG']['tl_content']['twitter_tweets_color']      = array('Textfarbe Tweet', 'Hier kann die Textfarbe des Tweets in hexadezimalen Werten festgelegt werden.');
$GLOBALS['TL_LANG']['tl_content']['twitter_tweets_links']      = array('Linkfarbe der Tweets', 'Hier kann die Farbe der Links der Tweets in hexadezimalen Werten festgelegt werden.');
$GLOBALS['TL_LANG']['tl_content']['twitter_width']             = array('Breite in Pixel', 'Hier kann die Breite des Widgets in Pixeln festgelegt werden.');
$GLOBALS['TL_LANG']['tl_content']['twitter_height']            = array('Höhe in Pixeln', 'Hier kann die Höhe des Widgets in Pixeln festgelegt werden.');
$GLOBALS['TL_LANG']['tl_content']['twitter_autoHeight']        = array('Automatische Höhe', 'Setzt die Höhe der Box automatisch.');
$GLOBALS['TL_LANG']['tl_content']['twitter_align']             = array('Ausrichtung', 'Hier kann die Ausrichtung des Buttons festgelegt werden.');
$GLOBALS['TL_LANG']['tl_content']['twitter_custom']            = array('Widget-Code', 'Bitte den Code für das Widget eingeben, der Twitter für für dich generiert hat.');
$GLOBALS['TL_LANG']['tl_content']['twitter_language']          = array('Sprache', 'Hier kann die Sprache ausgewählt werden.');
$GLOBALS['TL_LANG']['tl_content']['twitter_template']          = array('Twitter Template', 'Hier kann das Twitter Template gewählt werden.');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_content']['twitter_legend'] = 'Twitter Einstellungen';


/**
 * References
 */
$GLOBALS['TL_LANG']['tl_content']['twitter_list']['d9']                    = 'D9';
$GLOBALS['TL_LANG']['tl_content']['twitter_list']['nba-7']                 = 'NBA';
$GLOBALS['TL_LANG']['tl_content']['twitter_list']['freedom-of-expression'] = 'Meinungsfreiheit';
$GLOBALS['TL_LANG']['tl_content']['twitter_list']['more-twitter-accounts'] = 'Mehr @Twitter Accounts';
$GLOBALS['TL_LANG']['tl_content']['twitter_list']['team']                  = 'Team';
$GLOBALS['TL_LANG']['tl_content']['twitter_behavior']['all']               = 'Alle Tweets laden';
$GLOBALS['TL_LANG']['tl_content']['twitter_behavior']['default']           = 'Zeitintervall';
$GLOBALS['TL_LANG']['tl_content']['twitter_counter']['horizontal']         = 'Horizontal';
$GLOBALS['TL_LANG']['tl_content']['twitter_counter']['vertical']           = 'Vertikal';
$GLOBALS['TL_LANG']['tl_content']['twitter_align']['left']                 = 'Links';
$GLOBALS['TL_LANG']['tl_content']['twitter_align']['right']                = 'Rechts';

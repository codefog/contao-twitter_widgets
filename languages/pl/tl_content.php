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
$GLOBALS['TL_LANG']['tl_content']['twitter_username']          = array('Nazwa użytkownika', 'Wprowadź nazwę użytkownika Twitter.');
$GLOBALS['TL_LANG']['tl_content']['twitter_url']               = array('Adres URL', 'Tutaj możesz wprowadzić adres URL, który ma zostać użyty. Zostaw pole poste, by użyć aktualnego adresu URL.');
$GLOBALS['TL_LANG']['tl_content']['twitter_tweet']             = array('Domyślna wiadomość', 'Tutaj możesz wprowadzić domyślną wiadomość tweet.');
$GLOBALS['TL_LANG']['tl_content']['twitter_counter']           = array('Typ licznika', 'Tutaj możesz wybrać gdzie pojawi się licznik. Pozostaw pole puste, aby go ukryć.');
$GLOBALS['TL_LANG']['tl_content']['twitter_showCounter']       = array('Pokaż licznik', 'Pokaż licznik obok przycisku.');
$GLOBALS['TL_LANG']['tl_content']['twitter_showUsername']      = array('Pokaż nazwę użytkownika', 'Pokaż nazwę użytkownika na przycisku.');
$GLOBALS['TL_LANG']['tl_content']['twitter_via']               = array('Podziel przez', 'Tutaj możesz wprowadzić nazwę użytkownika, przez którą będzie podzielony tweet.');
$GLOBALS['TL_LANG']['tl_content']['twitter_related']           = array('Polecane konto', 'Tutaj możesz wprowadzić nazwę użytkownika, którą chcesz użyć jako polecone konto.');
$GLOBALS['TL_LANG']['tl_content']['twitter_hashtag']           = array('Tagi hash', 'Tutaj możesz wprowadzić tagi hash, które mają zostać użyte.');
$GLOBALS['TL_LANG']['tl_content']['twitter_bigButton']         = array('Pokaż duży przycisk', 'Pokaż duży przycisk Twittera.');
$GLOBALS['TL_LANG']['tl_content']['twitter_doNotTailor']       = array('Zrezygnuj z dopasowywania', 'Zrezygnuj z dopasowywania Twittera.');
$GLOBALS['TL_LANG']['tl_content']['twitter_search']            = array('Szuakan fraza', 'Wprowadź szukaną frazę.');
$GLOBALS['TL_LANG']['tl_content']['twitter_title']             = array('Tytuł boksu', 'Wprowadź tytuł, który będzie wyświetlony jako tytuł boksu.');
$GLOBALS['TL_LANG']['tl_content']['twitter_subject']           = array('Temat boksu', 'Wprowadź temat, który będzie wyświetlony jako temat boksu.');
$GLOBALS['TL_LANG']['tl_content']['twitter_list']              = array('Typ listy', 'Tutaj możesz wybrać typ listy.');
$GLOBALS['TL_LANG']['tl_content']['twitter_live']              = array('Odświeżaj wyniki', 'Cały czas odświeżaj wyniki.');
$GLOBALS['TL_LANG']['tl_content']['twitter_scrollbar']         = array('Pokaż pasek przewijania', 'Pokaż pasek przewijania, jeśli jest za dużo tweetów.');
$GLOBALS['TL_LANG']['tl_content']['twitter_behavior']          = array('Zachowanie', 'Tutaj możesz wybrać rodzaj zachowania.');
$GLOBALS['TL_LANG']['tl_content']['twitter_loop']              = array('Zapętl wyniki', 'Zaznacz, jeśli chcesz zapętlić wyniki.');
$GLOBALS['TL_LANG']['tl_content']['twitter_interval']          = array('Interwał odświeżania', 'Tutaj możesz wprowadzić czas w sekundach pomiędzy odświeżeniami tweetów.');
$GLOBALS['TL_LANG']['tl_content']['twitter_rpp']               = array('Liczba tweetów', 'Tutaj możesz wprowadzić liczbę tweetów do wyświetlenia.');
$GLOBALS['TL_LANG']['tl_content']['twitter_shell_background']  = array('Kolor tła powłoki', 'Tutaj możesz wprowadzić kolor tła powłoki w formacie heksadecymalnym.');
$GLOBALS['TL_LANG']['tl_content']['twitter_shell_color']       = array('Kolor tekstu powłoki', 'Tutaj możesz wprowadzić kolor tekstu powłoki w formacie heksadecymalnym.');
$GLOBALS['TL_LANG']['tl_content']['twitter_tweets_background'] = array('Kolor tła tweetu', 'Tutaj możesz wprowadzić kolor tła tweetu w formacie heksadecymalnym.');
$GLOBALS['TL_LANG']['tl_content']['twitter_tweets_color']      = array('Kolor tekstu tweetu', 'Tutaj możesz wprowadzić kolor tekstu tweetu w formacie heksadecymalnym.');
$GLOBALS['TL_LANG']['tl_content']['twitter_tweets_links']      = array('Kolor linka tweetu', 'Tutaj możesz wprowadzić kolor linku w tweecie w formacie heksadecymalnym.');
$GLOBALS['TL_LANG']['tl_content']['twitter_width']             = array('Szerokość w pikselach', 'Tutaj możesz wprowadzić szerokość widżetu w pikselach.');
$GLOBALS['TL_LANG']['tl_content']['twitter_height']            = array('Wysokość w pikselach', 'Tutaj możesz wprowadzić wysokość widżetu w pikselach.');
$GLOBALS['TL_LANG']['tl_content']['twitter_autoHeight']        = array('Automatyczna wysokość', 'Automatycznie ustaw wysokość boksu.');
$GLOBALS['TL_LANG']['tl_content']['twitter_align']             = array('Wyrównanie', 'Tutaj możesz wybrać wyrównanie przycisku.');
$GLOBALS['TL_LANG']['tl_content']['twitter_custom']            = array('Kod widżetu', 'Wprowadź kod widżetu wygenerowanego przez Twitter.');
$GLOBALS['TL_LANG']['tl_content']['twitter_language']          = array('Język', 'Tutaj możesz wybrać język.');
$GLOBALS['TL_LANG']['tl_content']['twitter_template']          = array('Szablon Twittera', 'Tutaj możesz wybrać szablon Twittera.');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_content']['twitter_legend'] = 'Ustawienia Twittera';


/**
 * References
 */
$GLOBALS['TL_LANG']['tl_content']['twitter_list']['d9']                    = 'D9';
$GLOBALS['TL_LANG']['tl_content']['twitter_list']['nba-7']                 = 'NBA';
$GLOBALS['TL_LANG']['tl_content']['twitter_list']['freedom-of-expression'] = 'Freedom of Expression';
$GLOBALS['TL_LANG']['tl_content']['twitter_list']['more-twitter-accounts'] = 'More @Twitter Accounts';
$GLOBALS['TL_LANG']['tl_content']['twitter_list']['team']                  = 'Team';
$GLOBALS['TL_LANG']['tl_content']['twitter_behavior']['all']               = 'Wczytaj wszystkie tweety';
$GLOBALS['TL_LANG']['tl_content']['twitter_behavior']['default']           = 'Przedział czasowy';
$GLOBALS['TL_LANG']['tl_content']['twitter_counter']['horizontal']         = 'Poziomo';
$GLOBALS['TL_LANG']['tl_content']['twitter_counter']['vertical']           = 'Pionowo';
$GLOBALS['TL_LANG']['tl_content']['twitter_align']['left']                 = 'Lewo';
$GLOBALS['TL_LANG']['tl_content']['twitter_align']['right']                = 'Prawo';

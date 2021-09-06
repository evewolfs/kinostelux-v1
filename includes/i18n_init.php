<?php


$i18n = new App\I18n(['fr_FR', 'en_GB', 'de_LU']);

list($subdomain, $domain) = explode('.', $_SERVER['HTTP_HOST'], 2);

$locale = $i18n->getBestMatch($subdomain);


if ($locale === null) {

  $locale = $i18n->getLocaleForRedirect();

  $subdomain = substr($locale, 0, 2);

  // header('Location: https://' . $subdomain .'.kinostelux.lu/');
  header("Location: https://" . $subdomain . ".kinostelux.lu/");
  exit;
}

PhpMyAdmin\MoTranslator\Loader::loadFunctions();


_setLocale(LC_ALL, $locale);

$domain = 'messages';

_textdomain($domain);

_bindtextdomain($domain, 'locales');

_bind_textdomain_codeset($domain, 'UTF-8');

$link_data = $i18n->getLinkData(['fr' => 'français', 'en' => 'english', 'de' => 'deutsch']);

// setcookie('locale', $locale, time() + 60*60*24*15, '/', $domain);
?>
<?php
  /**
   *
   * @copyright 2008 - https://www.clicshopping.org
   * @Brand : ClicShopping(Tm) at Inpi all right Reserved
   * @Licence GPL 2 & MIT

   * @Info : https://www.clicshopping.org/forum/trademark/
   *
   */

  use ClicShopping\OM\CLICSHOPPING;
  use ClicShopping\OM\Registry;

  class ht_gdpr_tarte_au_citron
  {
    public string $code = 'ht_gdpr_tarte_au_citron';
    public string $group = 'header_tags';
    public $title;
    public $description;
    public ?int $sort_order = 0;
    public bool $enabled = false;

    function __construct()
    {
      $this->title = CLICSHOPPING::getDef('module_header_tags_gdpr_tarte_au_citron_title');
      $this->description = CLICSHOPPING::getDef('module_header_tags_gdpr_tarte_au_citron_description');

      if (\defined('MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_STATUS')) {
        $this->sort_order = MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_SORT_ORDER;
        $this->enabled = (MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_STATUS == 'True');
      }
    }

    function execute()
    {
      $CLICSHOPPING_Hooks = Registry::get('Hooks');
      $CLICSHOPPING_Template = Registry::get('Template');
      $CLICSHOPPING_Language = Registry::get('Language');
      $CLICSHOPPING_ProductsCommon = Registry::get('ProductsCommon');

      $language_code = $CLICSHOPPING_Language->getLanguageCode();

      if ($language_code == 'fr' || $language_code == 'en' || $language_code == 'nl' || $language_code == 'de' || $language_code == 'es' || $language_code == 'it' || $language_code == 'pt' || $language_code == 'pl' || $language_code == 'ru') {
        $language = $language_code;
      } else {
        $language = 'en';
      }


      $high_privacy = MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_STATUS_HIGH_PRIVACY;
      $addblocker = MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_STATUS_ADBLOCKER;
      $mall_alert = MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_STATUS_SMALL_ALERT;
      $orientation = MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_STATUS_ORIENTATION;
      $cookie_list = MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_STATUS_COOKIES_LIST;
      $handle_browser_dtn_request = MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_STATUS_HANDLE_BROWSER_DTN_REQUEST;
//*********************************
//API
//*********************************
      if (MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_JSAPI == 'True') {
        $googlejsapi = '<script type="text/javascript">(tarteaucitron.job = tarteaucitron.job || []).push(\'jsapi\');</script>';
      } else {
        $googlejsapi = '';
      }


      if (MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_TAG_MANAGER == 'True') {
        $google_tag_manager = '<script type="text/javascript">tarteaucitron.user.googletagmanagerId = \'' . MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_TAG_MANAGER_ACCOUNT_ID . '\';(tarteaucitron.job = tarteaucitron.job || []).push(\'googletagmanager\');</script>';
      } else {
        $google_tag_manager = '';
      }

      if (MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_TIME_LINE == 'True') {
        $timeline = '<script type="text/javascript">(tarteaucitron.job = tarteaucitron.job || []).push(\'timelinejs\');</script>';
      } else {
        $timeline = '';
      }

      if (MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_TYPEKIT == 'True') {
        $type_kit = '<script type="text/javascript">tarteaucitron.user.typekitId = \'' . MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_TYPEKIT_ID . '\';(tarteaucitron.job = tarteaucitron.job || []).push(\'typekit\');</script>';
      } else {
        $type_kit = '';
      }


//*********************************
//Mesure d'audience
//*********************************

      if (MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_FACEBOOK_COMMENT == 'True') {
        $facebook_comment = '<script type="text/javascript">(tarteaucitron.job = tarteaucitron.job || []).push(\'facebookcomment\');</script>';
      } else {
        $facebook_comment = '';
      }

      if (MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_DISQUS == 'True') {
        $disqus = ' <script type="text/javascript">tarteaucitron.user.disqusShortname = \'' . MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_DISQUS_SHORT_NAME . '\';(tarteaucitron.job = tarteaucitron.job || []).push(\'disqus\');</script>';
      } else {
        $disqus = '';
      }

//*********************************
//Mesure d'audience
//*********************************

      if (MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_ALEXA == 'True') {
        $alexa = '<script type="text/javascript">tarteaucitron.user.alexaAccountID = \'' . MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_ACCOUNT_ID . '\';(tarteaucitron.job = tarteaucitron.job || []).push(\'alexa\');</script>';
      } else {
        $alexa = '';
      }

      if (MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_CLICKY == 'True') {
        $clicky = '<script type="text/javascript">tarteaucitron.user.clickyId = ' . MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_CLICKY_ACCOUNT_ID . ';tarteaucitron.user.clickyMore = function () { /* add here your optionnal clicky function */ };(tarteaucitron.job = tarteaucitron.job || []).push(\'clicky\');</script>';
      } else {
        $clicky = '';
      }

      if (MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_CRAZY_EGG == 'True') {
        $crazy_egg = '<script type="text/javascript">tarteaucitron.user.crazyeggId = \'' . MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_CRAZY_EGG_ACCOUNT_ID . '\';(tarteaucitron.job = tarteaucitron.job || []).push(\'crazyegg\');</script>';
      } else {
        $crazy_egg = '';
      }

      if (MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_ETRACKER == 'True') {
        $etracker = '<script type="text/javascript">tarteaucitron.user.etracker = \'' . MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_ETRACKER_SECURE_CODE . '\';(tarteaucitron.job = tarteaucitron.job || []).push(\'etracker\');</script>';
      } else {
        $etracker = '';
      }

      if (MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_FERANK == 'True') {
        $ferank = '<script type="text/javascript">(tarteaucitron.job = tarteaucitron.job || []).push(\'ferank\');</script>';
      } else {
        $ferank = '';
      }


      if (MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GET_PLUS == 'True') {
        $get_plus = '<script type="text/javascript">tarteaucitron.user.getplusId = \'' . MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GET_PLUS_ACCOUNT_ID . '\';(tarteaucitron.job = tarteaucitron.job || []).push(\'getplus\');</script>';
      } else {
        $get_plus = '';
      }

      if (MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ANALYTICS_GA == 'True') {
        $google_analytics_ga = $CLICSHOPPING_Hooks->output('HeaderTags', 'GDPRGoogleAnalyticsGa');
      } else {
        $google_analytics_ga = '';
      }

      if (MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ANALYTICS_GTAGJS == 'True') {
        $google_analytics_gtagjs = $CLICSHOPPING_Hooks->output('HeaderTags', 'GDPRGoogleAnalyticsGtagJs');
      } else {
        $google_analytics_gtagjs = '';
      }

      if (MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ANALYTICS_UNIVERSAL == 'True') {
        $google_analytics_universal = $CLICSHOPPING_Hooks->output('HeaderTags', 'GDPRGoogleAnalyticsUniversal');
      } else {
        $google_analytics_universal = '';
      }


      if (MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_MICROSOFT_CAMPAIGN_ANALYTICS == 'True') {
        $microsoft_campaign = '<script type="text/javascript">(tarteaucitron.job = tarteaucitron.job || []).push(\'microsoftcampaignanalytics\');</script><br />';
        $microsoft_campaign .= '<script type="text/javascript">tarteaucitron.user.microsoftcampaignanalyticsUUID = \'' . MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_MICROSOFT_CAMPAIGN_UUID . '\';tarteaucitron.user.microsoftcampaignanalyticsdomaineId = \'' . MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_MICROSOFT_CAMPAIGN_DOMAIN_ID;
        '\';tarteaucitron.user.microsoftcampaignanalyticsactionId = \'' . MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_MICROSOFT_CAMPAIGN_ACTION_ID . '\';</script>';
      } else {
        $microsoft_campaign = '';
      }


      if (MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_START_COUNTER == 'True') {
        $tart_counter = '<script type="text/javascript">(tarteaucitron.job = tarteaucitron.job || []).push(\'statcounter\');</script><br />';
        $tart_counter .= '<div class="statcounter-canvas"></div><script type="text/javascript">var sc_project = sc_project, sc_invisible = sc_invisible (0 | 1), sc_security = "sc_security", sc_text = sc_text (0 | 2 | 3 | 4 | 5);</script>';
      } else {
        $tart_counter = '';
      }


      if (MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_VISUAL_REVENUE == 'True') {
        $visual_revenue = '<script type="text/javascript">tarteaucitron.user.visualrevenueId = ID;(tarteaucitron.job = tarteaucitron.job || []).push(\'visualrevenue\');</script><br />';
      } else {
        $visual_revenue = '';
      }

      if (MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_XITI == 'True') {
        $xiti = '<script type="text/javascript">tarteaucitron.user.xitiId = \'' . MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_XITI_ID . '\';tarteaucitron.user.xitiMore = function () { /* add here your optionnal xiti function */ };(tarteaucitron.job = tarteaucitron.job || []).push(\'xiti\');</script>';
      } else {
        $xiti = '';
      }


//**************************
//Advertisement
//**************************
      if (MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_AMAZON == 'True' && !\is_null($CLICSHOPPING_ProductsCommon->getId())) {
        $amazon = '<div class="amazon_product" amazonid="' . MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_AMAZON_ACCOUNT_ID . '" productid="' . (int)$CLICSHOPPING_ProductsCommon->getId() . '"></div>';
      } else {
        $amazon = '';
      }

      if (MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_CRITEO == 'True') {
        $criteo = '<script type="text/javascript">(tarteaucitron.job = tarteaucitron.job || []).push(\'criteo\');</script>';
        $criteo .= '<div class="criteo-canvas" zoneid="' . MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_CRITEO_ZONE_ID . '"></div>';
      } else {
        $criteo = '';
      }


      if (MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_CONVERSION == 'True') {
        $adwords_conversion = '<script type="text/javascript">(tarteaucitron.job = tarteaucitron.job || []).push(\'googleadwordsconversion\');</script>';
        $adwords_conversion .= '<script type="text/javascript">tarteaucitron.user.adwordsconversionId = ' . MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_CONVERSION_ID . ';tarteaucitron.user.adwordsconversionLabel = \'' . MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_CONVERSION_LABEL . '\';tarteaucitron.user.adwordsconversionLanguage  = \'' . MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_CONVERSION_LANGUAGE . '\';tarteaucitron.user.adwordsconversionFormat = \'' . MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_CONVERSION_FORMAT . '\';tarteaucitron.user.adwordsconversionColor = \'' . MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_CONVERSION_COLOR . '\';tarteaucitron.user.adwordsconversionValue = \'' . MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_CONVERSION_VALUE . '\';tarteaucitron.user.adwordsconversionCurrency = \'' . MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_CONVERSION_CURRENCY . '\';tarteaucitron.user.adwordsconversionCustom1 = \'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_CONVERSION_CUSTOM1\';tarteaucitron.user.adwordsconversionCustom2 = \'' . MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_CONVERSION_CUSTOM2 . '\';</script>';
      } else {
        $adwords_conversion = '';
      }


      if (MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_REMARKETING == 'True') {
        $adwords_remarketing = '<script type="text/javascript">tarteaucitron.user.adwordsremarketingId = ' . MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_REMARKETING_ID . ';(tarteaucitron.job = tarteaucitron.job || []).push(\'googleadwordsremarketing\');</script>';
      } else {
        $adwords_remarketing = '';
      }


//*********************************
//Support
//*********************************
      if (MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_PURECHAT == 'True') {
        $pure_chat = ' <script type="text/javascript">tarteaucitron.user.purechatId = \'' . MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_PURECHAT_ID . '\';(tarteaucitron.job = tarteaucitron.job || []).push(\'purechat\');</script>';
      } else {
        $pure_chat = '';
      }


      if (MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_ZOPIM == 'True') {
        $zopim = '<script type="text/javascript">tarteaucitron.user.zopimID = \'' . MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_ZOPIM_ID . '\';(tarteaucitron.job = tarteaucitron.job || []).push(\'zopim\');</script>';
      } else {
        $zopim = '';
      }
//*********************************
//Social network  - todo
//*********************************
      if (MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_FACEBOOK_PIXEL == 'True') {
        $facebook_pixel = $CLICSHOPPING_Hooks->output('HeaderTags', 'GDPRFacebookPixel');
      } else {
        $facebook_pixel = '';
      }


//*********************************
//Script
//*********************************

      $footer = '<script src="' . CLICSHOPPING::link('sources/javascript/gdpr_tarte_au_citron/tarteaucitron.js', null, false) . '"></script>';

      $footer .= <<<EOD
<script type="text/javascript">
tarteaucitron.init({
  "hashtag": "#tarteaucitron", /* Automatically open the panel with the hashtag */
  "highPrivacy": {$high_privacy}, /* disabling the auto consent feature on navigation? */
  "orientation": "{$orientation}", /* the big banner should be on 'top' or 'bottom' ? */
  "adblocker": {$addblocker}, /* Display a message if an adblocker is detected */
  "showAlertSmall": {$mall_alert}, /* show the small banner on bottom right? */
  "cookieslist": {$cookie_list}, /* Display the list of cookies installed ? */
  "removeCredit": true, /* remove the credit link? */
  "handleBrowserDNTRequest": {$handle_browser_dtn_request}, /*false,  Deny everything if DNT is on */
  //"cookieDomain": ".example.com" /* Nom de domaine sur lequel sera posé le cookie pour les sous-domaines */
});
</script>
<script type="text/javascript">var tarteaucitronForceLanguage = '{$language}';</script>
{$googlejsapi}
{$google_tag_manager}
{$timeline}
{$type_kit}
{$facebook_comment}
{$disqus}
{$alexa}
{$clicky}
{$crazy_egg}
{$etracker}
{$ferank}
{$get_plus}
{$google_analytics_ga}
{$google_analytics_gtagjs}
{$google_analytics_universal}
{$microsoft_campaign}
{$tart_counter}
{$visual_revenue}
{$xiti}
{$amazon}
{$criteo}
{$adwords_conversion}
{$adwords_remarketing}
{$pure_chat}
{$zopim}
{$facebook_pixel}
EOD;

      $CLICSHOPPING_Template->addBlock($footer, 'footer_scripts');

      $output = ' <link rel="stylesheet" href="' . CLICSHOPPING::link('sources/javascript/gdpr_tarte_au_citron/css/tarteaucitron.css', null, false) . '">';
      $CLICSHOPPING_Template->addBlock($output . "\n", $this->group);
    }

    function isEnabled()
    {
      return $this->enabled;
    }

    function check()
    {
      return \defined('MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_STATUS');
    }

    function install()
    {
      $CLICSHOPPING_Db = Registry::get('Db');

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Enable Cookie Compliance Module',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_STATUS',
        'configuration_value' => 'True',
        'configuration_description' => 'Do you want to enable this module? <br />More information on https://opt-out.ferank.eu<br /> If you use one of this module with other header tag, please disable it or do not use the option of this module. In this case, you are not under the GDPR and you must update in consequence your script or update this module at your needs',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'True\', \'False\))',
        'date_added' => 'now()'
      ]);


      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Disabling the autolangauge identification ?',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_STATUS_CODE_LANGUAGE',
        'configuration_value' => 'true',
        'configuration_description' => 'If true, he language will ebe always in english ?',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'true\', \'false\))',
        'date_added' => 'now()'
      ]);


      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Disabling the auto consent feature on navigation ?',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_STATUS_HIGH_PRIVACY',
        'configuration_value' => 'false',
        'configuration_description' => 'Do you want to enable this element ?',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'true\', \'false\))',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Display the message at the top or bottom ?',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_STATUS_ORIENTATION',
        'configuration_value' => 'bottom',
        'configuration_description' => 'Do you want to enable this element ?',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'top\', \'bottom\))',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Display a message if the browser use addblocker plugin ?',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_STATUS_ADBLOCKER',
        'configuration_value' => 'false',
        'configuration_description' => 'Do you want to enable this element ?',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'true\', \'false\))',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Display a small alert on the right ?',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_STATUS_SMALL_ALERT',
        'configuration_value' => 'false',
        'configuration_description' => 'Do you want to enable this element ?',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'true\', \'false\))',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Display a cookies list installed ?',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_STATUS_COOKIES_LIST',
        'configuration_value' => 'true',
        'configuration_description' => 'Do you want to enable this element ?',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'true\', \'false\))',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Display the capacities to deny everything ?',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_STATUS_HANDLE_BROWSER_DTN_REQUEST',
        'configuration_value' => 'false',
        'configuration_description' => 'Do you want to enable this element ?',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'true\', \'false\))',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Sort Order',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_SORT_ORDER',
        'configuration_value' => '900',
        'configuration_description' => 'Sort order of display. Lowest is displayed first.',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);

      /*******************************************
       * Plugin
       */
      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Do you want enable google jsapi',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_JSAPI',
        'configuration_value' => 'False',
        'configuration_description' => 'Do you want to enable this element ?',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'True\', \'False\))',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Do you want enable google tag manager',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_TAG_MANAGER',
        'configuration_value' => 'False',
        'configuration_description' => 'Delete all this script if its installed,<br />
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':<br />
new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],<br />
j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=<br />
\'//www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);<br />
})(window,document,\'script\',\'dataLayer\',\'GTM-XXXX\');<br />
(document, \'script\', \'facebook-jssdk\'));<br />',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'True\', \'False\))',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Google Tag Manager Account ID',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_TAG_MANAGER_ACCOUNT_ID',
        'configuration_value' => '',
        'configuration_description' => 'Go to your google account to know your account id of tag manager (GTM-XXXX).',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Do you want enable Time Line',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_TIME_LINE',
        'configuration_value' => 'False',
        'configuration_description' => 'Do you want to enable this element ?',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'True\', \'False\))',
        'date_added' => 'now()'
      ]);


      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Do you want enable Adobe typeKit',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_TYPEKIT',
        'configuration_value' => 'False',
        'configuration_description' => 'Delete all this script if its installed,<br />
src="//use.typekit.net/id.js"><br />
try{Typekit.load();}catch(e){}
<br />',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'True\', \'False\))',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'TapeKit Account ID',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_TYPEKIT_ID',
        'configuration_value' => '',
        'configuration_description' => 'Go to your adobe account to know your id of typeKit.',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);

//*************************************
//Comment
//************************************

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Do you want enable Facebook comment',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_FACEBOOK_COMMENT',
        'configuration_value' => 'False',
        'configuration_description' => 'Delete all this script if its installed,<br />
var js, fjs = d.getElementsByTagName(s)[0];<br />
if (d.getElementById(id)) return;<br />
js = d.createElement(s);<br />
js.id = id;<br />
js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.0";<br />
fjs.parentNode.insertBefore(js, fjs);<br />
}<br />
(document, \'script\', \'facebook-jssdk\'));<br /></br>
<strong>Note : Add this script in you page and change CURRENT_URI by your url. <br />you can can create a module if you want to insert in all the page</strong>
div class="fb-comments" data-numposts="5" data-colorscheme="light" data-href="CURRENT_URI"></div
',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'True\', \'False\))',
        'date_added' => 'now()'
      ]);


      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Do you want enable Disqus',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_DISQUS',
        'configuration_value' => 'False',
        'configuration_description' => 'Delete all this script if its installed,<br />
var disqus_shortname = \'disqus_shortname\';</br>
(function() {</br>
    var dsq = document.createElement(\'script\');</br>
    dsq.type = \'text/javascript\';</br>
    dsq.async = true;</br>
    dsq.src = \'//\' + disqus_shortname + \'.disqus.com/embed.js\';</br>
    (document.getElementsByTagName(\'head\')[0] || document.getElementsByTagName(\'body\')[0]).appendChild(dsq);</br>
})();<br /></br>
<strong>Note : Add this script in you page. <br />you can can create a module if you want to insert in all the page</strong>
div id="disqus_thread"></div
',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'True\', \'False\))',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Disqus Short name',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_DISQUS_SHORT_NAME',
        'configuration_value' => '',
        'configuration_description' => 'Go to your disqus account to know your short name',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);


      /*************************************
       * Mesure Audience
       */

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Do you want enable Alexa',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_ALEXA',
        'configuration_value' => 'False',
        'configuration_description' => 'Delete all this script if it is installed,<br />
atrk_opts = { atrk_acct:"account_id", domain:"domain.name",dynamic: true};<br />
(function() { var as = document.createElement(\'script\'); as.type = \'text/javascript\'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName(\'script\')[0];s.parentNode.insertBefore(as, s); })();<br />
<br />',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'True\', \'False\))',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'ALEXA ACCOUNT ID',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_ACCOUNT_ID',
        'configuration_value' => '',
        'configuration_description' => 'Go to your alexa account to know your account id.',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);


      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Do you want enable CLICKY',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_CLICKY',
        'configuration_value' => 'False',
        'configuration_description' => 'Delete all this script if it is installed,<br />
var clicky_site_ids = clicky_site_ids || [];<br />
clicky_site_ids.push(YOUR-ID);<br />
(function() {<br />
    var s = document.createElement(\'script\');<br />
    s.type = \'text/javascript\';<br />
    s.async = true;<br />
    s.src = \'//static.getclicky.com/js\';<br />
    ( document.getElementsByTagName(\'head\')[0] || document.getElementsByTagName(\'body\')[0] ).appendChild( s ); })();<br />
',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'True\', \'False\))',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'CLICKY ACCOUNT ID',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_CLICKY_ACCOUNT_ID',
        'configuration_value' => '',
        'configuration_description' => 'Go to your Clicky account to know your account id.',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);


      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Do you want enable Crazy Egg',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_CRAZY_EGG',
        'configuration_value' => 'False',
        'configuration_description' => 'Delete all this script if it is installed,<br />
setTimeout(function(){var a=document.createElement("script");<br />
var b=document.getElementsByTagName("script")[0];<br />
a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/account_id.js?"+Math.floor(new Date().getTime()/3600000);<br />
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);<br />
',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'True\', \'False\))',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'CRAZY EGG ACCOUNT ID',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_CRAZY_EGG_ACCOUNT_ID',
        'configuration_value' => '',
        'configuration_description' => 'Go to your crazy egg account to know your account id.',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Do you want enable Etracker',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_ETRACKER',
        'configuration_value' => 'False',
        'configuration_description' => 'Delete all this script if it is installed,<br />
id="_etLoader" type="text/javascript" charset="UTF-8" data-secure-code="data-secure-code" src="//static.etracker.com/code/e.js"<br />
',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'True\', \'False\))',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'ETRACKER SECURE CODE',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_ETRACKER_SECURE_CODE',
        'configuration_value' => '',
        'configuration_description' => 'Go to your e traker account to know your secure code.',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);


      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Do you want enable Ferank',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_FERANK',
        'configuration_value' => 'False',
        'configuration_description' => 'Delete all this script if it is installed,<br />
(function() {<br />
    var ferank = document.createElement(\'script\');<br />
    ferank.type = \'text/javascript\';<br />
    ferank.async = true;<br />
    ferank.src = \'//static.ferank.fr/pixel.js\';<br />
    var s = document.getElementsByTagName(\'script\')[0];<br />
    s.parentNode.insertBefore(ferank, s);<br />
})();"<br />
',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'True\', \'False\))',
        'date_added' => 'now()'
      ]);


      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Do you want enable GET+',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GET_PLUS',
        'configuration_value' => 'False',
        'configuration_description' => 'Delete all this script if it is installed,<br />
var webleads_site_ids = webleads_site_ids || [];<br />
webleads_site_ids.push(ACCOUNT_ID);<br />
(function() {<br />
var s = document.createElement(\'script\');<br />
s.type = \'text/javascript\';<br />
s.async = true;<br />
s.src = ( document.location.protocol == \'https:\' ? \'https://stats.webleads-tracker.com/js\' : \'http://stats.webleads-tracker.com/js\' );<br />
( document.getElementsByTagName(\'head\')[0] || document.getElementsByTagName(\'body\')[0] ).appendChild( s );<br />
})();<br />
',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'True\', \'False\))',
        'date_added' => 'now()'
      ]);


      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'GET + Account id',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GET_PLUS_ACCOUNT_ID',
        'configuration_value' => '',
        'configuration_description' => 'Go to your GET+ account to know your Account id.',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);


      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Do you want enable Google analytics GA',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ANALYTICS_GA',
        'configuration_value' => 'False',
        'configuration_description' => 'Delete all this script if it is installed,<br />
var _gaq = _gaq || [];<br />
_gaq.push([\'_setAccount\', \'UA-XXXXXXX-X\']);<br />
_gaq.push([\'_trackPageview\']);<br />
(function() {<br />
    var ga = document.createElement(\'script\');
    ga.type = \'text/javascript\';<br />
    ga.async = true;<br />
    ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';<br />
    var s = document.getElementsByTagName(\'script\')[0]; <br />
    s.parentNode.insertBefore(ga, s);<br />
})();<br />
',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'True\', \'False\))',
        'date_added' => 'now()'
      ]);


      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Google analytics account id UA-XXXXXXXX-X',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ANALYTICS_GA_ACCOUNT_ID',
        'configuration_value' => '',
        'configuration_description' => 'Go to your Google analytics account to know your UA-XXXXXXXX-X.',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);


      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Do you want enable Google Analytics tag JS',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ANALYTICS_GTAGJS',
        'configuration_value' => 'False',
        'configuration_description' => 'Delete all this script if it is installed,<br />
async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXXX-X"><br />
<br />
  window.dataLayer = window.dataLayer || [];<br />
  function gtag(){dataLayer.push(arguments);}<br />
  gtag(\'js\', new Date());<br />
  gtag(\'config\', \'UA-XXXXXXXX-X\');<br />
<br />
<strong>Note : </strong>If you must nclude option, you must fill the hook
',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'True\', \'False\))',
        'date_added' => 'now()'
      ]);


      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Google Analytics tag js account id UA-XXXXXXXX-X',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ANALYTICS_GTAGJS_ACCOUNT_ID',
        'configuration_value' => '',
        'configuration_description' => 'Go to your Google Analytics tag js account to know your UA-XXXXXXXX-X.',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Do you want enable Google Analytics universal',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ANALYTICS_UNIVERSAL',
        'configuration_value' => 'False',
        'configuration_description' => 'Delete all this script if it is installed,<br />
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),<br />
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)<br />
})(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');<br />
ga(\'create\', \'UA-XXXXXXXX-X\', \'auto\');<br />
ga(\'send\', \'pageview\');<br />
<br />
<strong>Note : </strong>If you must include option, you must fill the hook
',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'True\', \'False\))',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Google Analytics universal account id UA-XXXXXXXX-X',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ANALYTICS_UNIVERSAL_ACCOUNT_ID',
        'configuration_value' => '',
        'configuration_description' => 'Go to your Google tag js account to know your UA-XXXXXXXX-X.',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Do you want enable Microsoft Campaign analytics',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_MICROSOFT_CAMPAIGN_ANALYTICS',
        'configuration_value' => 'False',
        'configuration_description' => 'Delete all this script if it is installed,<br />
if (!window.mstag) mstag = {loadTag : function(){},time : (new Date()).getTime()};<br />
id="mstag_tops" type="text/javascript" src="https://flex.atdmt.com/mstag/site/UUID/mstag.js"><br />
class="conversionmsn" type="text/javascript"> mstag.loadTag("analytics", {dedup:"1",domainId:"domainId",type:"1",actionid:"actionId"})<br />
',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'True\', \'False\))',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Add your UUID Microsoft Campaign analytics',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_MICROSOFT_CAMPAIGN_UUID',
        'configuration_value' => '',
        'configuration_description' => 'Go to your Microsoft account to know your UUID.',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Add your domain_id Microsoft Campaign analytics',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_MICROSOFT_CAMPAIGN_DOMAIN_ID',
        'configuration_value' => '',
        'configuration_description' => 'Go to your Microsoft account to know your domain_id.',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Add you action_id Microsoft Campaign analytics',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_MICROSOFT_CAMPAIGN_ACTION_ID',
        'configuration_value' => '',
        'configuration_description' => 'Go to your Microsoft account to know your action_id.',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);


      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Do you want enable Start Counter',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_START_COUNTER',
        'configuration_value' => 'False',
        'configuration_description' => 'Do you want to enable this element ?',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'True\', \'False\))',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Do you want enable visual Revenue',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_VISUAL_REVENUE',
        'configuration_value' => 'False',
        'configuration_description' => 'Delete all this script if it is installed,<br />
var _vrq = _vrq || [];<br />
_vrq.push([\'id\', ID]);<br />
_vrq.push([\'automate\', true]);<br />
_vrq.push([\'track\', function(){}]);<br />
(function(d, a){<br />
    var s = d.createElement(a),<br />
        x = d.getElementsByTagName(a)[0];<br />
    s.async = true;<br />
    s.src = \'http://a.visualrevenue.com/vrs.js\';<br />
    x.parentNode.insertBefore(s, x);<br />
})(document, \'script\');<br />
',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'True\', \'False\))',
        'date_added' => 'now()'
      ]);


      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Do you want enable Xiti',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_XITI',
        'configuration_value' => 'False',
        'configuration_description' => 'Delete all this script if it is installed,<br />
Xt_param = \'s=YOUR-ID&p=\';
try {Xt_r = top.document.referrer;}
catch(e) {Xt_r = document.referrer; }
Xt_h = new Date();
Xt_i = \'<img width="39" height="25" border="0" alt="" \';
Xt_i += \'src="http://logv3.xiti.com/hit.xiti?\'+Xt_param;
Xt_i += \'&hl=\'+Xt_h.getHours()+\'x\'+Xt_h.getMinutes()+\'x\'+Xt_h.getSeconds();
if(parseFloat(navigator.appVersion)>=4) {Xt_s=screen;Xt_i+=\'&r=\'+Xt_s.width+\'x\'+Xt_s.height+\'x\'+Xt_s.pixelDepth+\'x\'+Xt_s.colorDepth;}
document.write(Xt_i+\'&ref=\'+Xt_r.replace(/[<>"]/g, \'\').replace(/&/g, \'$\')+\'" title="Internet Audience">\');;<br />
',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'True\', \'False\))',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Add your xiti_id account',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_XITI_ID',
        'configuration_value' => '',
        'configuration_description' => 'Go to your Xiti account to know your xiti_id.',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);


      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Do you want enable Amazon',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_AMAZON',
        'configuration_value' => 'False',
        'configuration_description' => 'Delete all this script if it is installed,<br />
iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-eu.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=FR&source=ss&ref=ss_til&ad_type=product_link&tracking_id=amazon_id&marketplace=amazon&region=FR&placement=product_id&show_border=true&link_opens_in_new_window=true">iframe<br />
<br />
',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'True\', \'False\))',
        'date_added' => 'now()'
      ]);


      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Add your Amazon account_id',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_AMAZON_ACCOUNT_ID',
        'configuration_value' => '',
        'configuration_description' => 'Go to your Amazon account to know your account_id.',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);


      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Do you want enable Criteo',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_CRITEO',
        'configuration_value' => 'False',
        'configuration_description' => 'Delete all this script if it is installed,<br />
document.MAX_ct0 =\'\';<br />
var m3_u = (location.protocol==\'https:\'?\'https://cas.criteo.com/delivery/ajs.php?\':\'http://cas.criteo.com/delivery/ajs.php?\');<br />
var m3_r = Math.floor(Math.random()*99999999999);<br />
document.write ("<scr"+"ipt type=\'text/javascript\' src=\'"+m3_u);<br />
document.write ("zoneid=zoneid");document.write("&amp;nodis=1");<br />
document.write (\'&amp;cb=\' + m3_r);<br />
if (document.MAX_used != \',\') document.write ("&amp;exclude=" + document.MAX_used);<br />
document.write (document.charset ? \'&amp;charset=\'+document.charset : (document.characterSet ? \'&amp;charset=\'+document.characterSet : \'\'));<br />
document.write ("&amp;loc=" + escape(window.location));<br />
if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));<br />
if (document.context) document.write ("&context=" + escape(document.context));<br />
if ((typeof(document.MAX_ct0) != \'undefined\') && (document.MAX_ct0.substring(0,4) == \'http\')) {<br />
    document.write ("&amp;ct0=" + escape(document.MAX_ct0));<br />
}<br />
if (document.mmm_fo) document.write ("&amp;mmm_fo=1");<br />
document.write ("\'></scr"+"ipt>");<br />
',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'True\', \'False\))',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Add your CRITEO zone_id',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_CRITEO_ZONE_ID',
        'configuration_value' => '',
        'configuration_description' => 'Go to your Criteo account to know your zone_id.',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);


      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Do you want enable Google Adwords conversion ',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_CONVERSION',
        'configuration_value' => 'False',
        'configuration_description' => 'Delete all this script if it is installed,<br />
var google_conversion_id = id;<br />
var google_conversion_label = "label";<br />
var google_conversion_language = "language";<br />
var google_conversion_format = "format";<br />
var google_conversion_color = "color";<br />
var google_conversion_value = value;<br />
var google_conversion_currency = "currency";<br />
var google_remarketing_only = false;<br />
<br />
src="//www.googleadservices.com/pagead/conversion.js">
<br />
',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'True\', \'False\))',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Add your Google Adword_id conversion',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_CONVERSION_ID',
        'configuration_value' => '',
        'configuration_description' => 'Go to your Google Adword conversion to know your Adword_id.',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);


      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Add your Google Adword conversion label',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_CONVERSION_LABEL',
        'configuration_value' => '',
        'configuration_description' => 'Insert your Google Adword label.',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Add your Google Adword conversion language',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_CONVERSION_LANGUAGE',
        'configuration_value' => '',
        'configuration_description' => 'Insert your Google Adword language.',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Add your Google Adword conversion format',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_CONVERSION_FORMAT',
        'configuration_value' => '',
        'configuration_description' => 'Insert your Google Adword format.',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Add your Google Adword conversion color',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_CONVERSION_COLOR',
        'configuration_value' => '',
        'configuration_description' => 'Insert your Google Adword color.',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Add your Google Adword conversion value',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_CONVERSION_VALUE',
        'configuration_value' => '',
        'configuration_description' => 'Insert your Google Adword value.',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Add your Google Adword conversion currency',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_CONVERSION_CURRENCY',
        'configuration_value' => '',
        'configuration_description' => 'Insert your Google Adword currency.',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Add your Google Adword conversion custom1',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_CONVERSION_CUSTOM1',
        'configuration_value' => '',
        'configuration_description' => 'Insert your Google Adword custom1.',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);


      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Add your Google Adword conversion custom2',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_CONVERSION_CUSTOM2',
        'configuration_value' => '',
        'configuration_description' => 'Insert your Google Adword custom2.',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Do you want enable Google Adwords Remarketing',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_REMARKETING',
        'configuration_value' => 'False',
        'configuration_description' => 'Delete all this script if it is installed,<br />
var google_conversion_id = id;<br />
var google_custom_params = window.google_tag_params;<br />
var google_remarketing_only = true;<br />
src="//www.googleadservices.com/pagead/conversion.js">
<br />
',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'True\', \'False\))',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Add your Google Adwords Remarketing id',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_REMARKETING_ID',
        'configuration_value' => '',
        'configuration_description' => 'Go to your Google Adwords Remarketng and insert your id.',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);


      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Do you want enable Pure Chat',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_PURECHAT',
        'configuration_value' => 'False',
        'configuration_description' => 'Delete all this script if it is installed,<br />
data-cfasync="false">(function () { var done = false;var script = document.createElement(\'script\');script.async = true;script.type = \'text/javascript\';script.src = \'https://app.purechat.com/VisitorWidget/WidgetScript\';document.getElementsByTagName(\'HEAD\').item(0).appendChild(script);script.onreadystatechange = script.onload = function (e) {if (!done && (!this.readyState || this.readyState == \'loaded\' || this.readyState == \'complete\')) {var w = new PCWidget({ c: \'ID\', f: true });done = true;}};})();
<br />
',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'True\', \'False\))',
        'date_added' => 'now()'
      ]);


      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Add your Pure Chat id',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_PURECHAT_ID',
        'configuration_value' => '',
        'configuration_description' => 'Go to your Pure Chat account and insert your id.',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);


      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Do you want enable Zopim',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_ZOPIM',
        'configuration_value' => 'False',
        'configuration_description' => 'Delete all this script if it is installed,<br />
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=<br />
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.<br />
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute(\'charset\',\'utf-8\');<br />
$.src=\'//v2.zopim.com/?zopim_id\';z.t=+new Date;$.<br />
type=\'text/javascript\';e.parentNode.insertBefore($,e)})(document,\'script\');
<br />
',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'True\', \'False\))',
        'date_added' => 'now()'
      ]);


      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Add your Zopimt id',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_ZOPIM_ID',
        'configuration_value' => '',
        'configuration_description' => 'Go to your Zopim account account and insert your id.',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);

//**********************************************
// Social Network
//**********************************************

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Do you want enable Facebook pixel',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_FACEBOOK_PIXEL',
        'configuration_value' => 'False',
        'configuration_description' => 'Delete all this script if it is installed,<br />
!function(f,b,e,v,n,t,s) { if(f.fbq) return; n=f.fbq=function(){ n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments); }; if(!f._fbq) f._fbq=n; n.push=n; n.loaded=!0; n.version=\'2.0\'; n.queue=[]; t=b.createElement(e); t.async=!0; t.src=v; s=b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s); } (window, document,\'script\', \'https://connect.facebook.net/en_US/fbevents.js\'); fbq(\'init\', \'YOUR-ID\'); fbq(\'track\', \'PageView\');
<br />
',
        'configuration_group_id' => '6',
        'sort_order' => '1',
        'set_function' => 'clic_cfg_set_boolean_value(array(\'True\', \'False\))',
        'date_added' => 'now()'
      ]);

      $CLICSHOPPING_Db->save('configuration', [
        'configuration_title' => 'Add your Zopimt id',
        'configuration_key' => 'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_FACEBOOK_PIXEL_YOUR_ID',
        'configuration_value' => '',
        'configuration_description' => 'Go to your Facebook account  and insert your id.',
        'configuration_group_id' => '6',
        'sort_order' => '0',
        'date_added' => 'now()'
      ]);
    }

    function remove()
    {
      return Registry::get('Db')->exec('delete from :table_configuration where configuration_key in ("' . implode('", "', $this->keys()) . '")');
    }

    function keys()
    {
      return ['MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_STATUS',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_STATUS_CODE_LANGUAGE',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_STATUS_HIGH_PRIVACY',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_STATUS_ORIENTATION',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_STATUS_ADBLOCKER',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_STATUS_SMALL_ALERT',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_STATUS_COOKIES_LIST',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_STATUS_HANDLE_BROWSER_DTN_REQUEST',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_JSAPI',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_TAG_MANAGER',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_TAG_MANAGER_ACCOUNT_ID',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_TIME_LINE',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_TYPEKIT',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_TYPEKIT_ID',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_FACEBOOK_COMMENT',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_DISQUS',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_DISQUS_SHORT_NAME',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_ALEXA',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_ACCOUNT_ID',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_CLICKY',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_CLICKY_ACCOUNT_ID',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_CRAZY_EGG',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_CRAZY_EGG_ACCOUNT_ID',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_ETRACKER',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_ETRACKER_SECURE_CODE',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_FERANK',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GET_PLUS',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GET_PLUS_ACCOUNT_ID',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ANALYTICS_GA',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ANALYTICS_GA_ACCOUNT_ID',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ANALYTICS_GTAGJS',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ANALYTICS_GTAGJS_ACCOUNT_ID',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ANALYTICS_UNIVERSAL',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ANALYTICS_UNIVERSAL_ACCOUNT_ID',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_MICROSOFT_CAMPAIGN_ANALYTICS',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_MICROSOFT_CAMPAIGN_UUID',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_MICROSOFT_CAMPAIGN_DOMAIN_ID',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_MICROSOFT_CAMPAIGN_ACTION_ID',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_START_COUNTER',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_VISUAL_REVENUE',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_XITI',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_XITI_ID',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_AMAZON',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_AMAZON_ACCOUNT_ID',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_CRITEO',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_CRITEO_ZONE_ID',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_CONVERSION',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_CONVERSION_ID',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_CONVERSION_LABEL',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_CONVERSION_LANGUAGE',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_CONVERSION_FORMAT',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_CONVERSION_COLOR',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_CONVERSION_VALUE',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_CONVERSION_CURRENCY',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_CONVERSION_CUSTOM1',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_CONVERSION_CUSTOM2',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_REMARKETING',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ADWORD_REMARKETING_ID',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_PURECHAT',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_PURECHAT_ID',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_ZOPIM',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_ZOPIM_ID',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_FACEBOOK_PIXEL',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_FACEBOOK_PIXEL_YOUR_ID',
        'MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_SORT_ORDER',
      ];
    }
  }

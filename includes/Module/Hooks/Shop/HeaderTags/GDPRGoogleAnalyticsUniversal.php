<?php
  /**
   *
   * @copyright 2008 - https://www.clicshopping.org
   * @Brand : ClicShopping(Tm) at Inpi all right Reserved
   * @Licence GPL 2 & MIT

   * @Info : https://www.clicshopping.org/forum/trademark/
   *
   */

  namespace ClicShopping\OM\Module\Hooks\Shop\HeaderTags;

  use ClicShopping\OM\HTML;
  use ClicShopping\OM\Registry;
  use ClicShopping\OM\HTTP;

  class GDPRGoogleAnalyticsUniversal
  {

    private $db;
    private $customer;

    public function __construct()
    {
      $this->db = Registry::get('Db');
      $this->customer = Registry::get('Customer');
    }

    private function getOption()
    {
      $data = '';

      return $data;
    }

    public function execute()
    {
      if (\defined('MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ANALYTICS_GTAGJS_ACCOUNT_ID')) {
        $output = '<script type="text/javascript">tarteaucitron.user.analyticsUa = \'' . MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ANALYTICS_UNIVERSAL_ACCOUNT_ID . '\';tarteaucitron.user.analyticsMore = function () {' . $this->getOption() . '};(tarteaucitron.job = tarteaucitron.job || []).push(\'analytics\');</script>';
        return $output;
      }
    }
  }
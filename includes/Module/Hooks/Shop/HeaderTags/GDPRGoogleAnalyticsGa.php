<?php
  /**
   *
   * @copyright 2008 - https://www.clicshopping.org
   * @Brand : ClicShopping(Tm) at Inpi all right Reserved
   * @Licence GPL 2 & MIT
   * @licence MIT - Portion of osCommerce 2.4
   * @Info : https://www.clicshopping.org/forum/trademark/
   *
   */

  namespace ClicShopping\OM\Module\Hooks\Shop\HeaderTags;

  use ClicShopping\OM\HTML;
  use ClicShopping\OM\Registry;
  use ClicShopping\OM\CLICSHOPPINGOM;

  class GDPRGoogleAnalyticsGa
  {

    private $db;

    public function __construct()
    {
      $this->db = Registry::get('Db');
    }

    private function getOption()
    {
      $CLICSHOPPING_Customer = Registry::get('Customer');

      $header = '';

      $Qorder = $this->db->prepare('select orders_id,
                                            billing_city,
                                            billing_state,
                                            billing_country
                                     from :table_orders
                                     where customers_id = :customers_id
                                     order by date_purchased desc limit 1
                                    ');

      $Qorder->bindInt(':customers_id', $CLICSHOPPING_Customer->getID());
      $Qorder->execute();

      if ($Qorder->rowCount() == 1) {
        $totals = [];

        $QorderTotals = $this->db->prepare('select value,
                                                   class
                                            from :table_orders_total
                                            where orders_id = :orders_id
                                          ');

        $QorderTotals->bindInt(':orders_id', $Qorder->valueInt('orders_id'));
        $QorderTotals->execute();


        while ($order_totals = $QorderTotals->fetch()) {
          $totals[$order_totals['class']] = $order_totals['value'];
        }


        $header .= "  ga('require', 'ecommerce', 'ecommerce.js'); ";
        $header .= "  ga('ecommerce:addTransaction',{ ";
        $header .= "  'id': '" . $Qorder->valueInt('orders_id') . "', ";
        $header .= "  'affiliation': '" . HTML::outputProtected(STORE_NAME) . "', ";
        $header .= "  'affiliation': '" . str_replace('http://', '', str_replace('www.', '', CLICSHOPPINGOM::getConfig('http_server', 'Shop') . CLICSHOPPINGOM::getConfig('http_path', 'Shop'))) . "', ";

        if (isset($totals['ot_total'])) {
          $total = isset($totals['ot_total']);
        } elseif (isset($totals['TO'])) {
          $total = isset($totals['TO']);
        }

        if (isset($totals['ot_shipping'])) {
          $shipping = isset($totals['ot_shipping']);
        } elseif (isset($totals['SH'])) {
          $shipping = isset($totals['SH']);
        }

        if (isset($totals['ot_tax'])) {
          $tax = isset($totals['ot_tax']);
        } elseif (isset($totals['TX'])) {
          $tax = isset($totals['TX']);
        }

        $header .= "  'revenue': '" . ($total ? $this->format_raw($total, DEFAULT_CURRENCY) : 0) . "', ";
        $header .= "  'shipping': '" . ($shipping ? $this->format_raw($shipping, DEFAULT_CURRENCY) : 0) . "', ";
        $header .= "  'tax': '" . ($tax ? $this->format_raw($tax, DEFAULT_CURRENCY) : 0) . "' ";
        $header .= "  });" . "\n";

        $QorderProducts = $this->db->prepare('select op.products_id,
                                                     pd.products_name,
                                                     op.final_price,
                                                     op.products_quantity
                                                from :table_orders_products op,
                                                     :table_products_description pd,
                                                     :table_languages  l
                                                where op.orders_id = :orders_id
                                                and op.products_id = pd.products_id
                                                and l.code = :code
                                                and l.languages_id = pd.language_id
                                             ');

        $QorderProducts->bindInt(':orders_id', $Qorder->valueInt('orders_id'));
        $QorderProducts->bindValue(':code', DEFAULT_LANGUAGE);

        $QorderProducts->execute();

        while ($QorderProducts->fetch()) {

          $Qcategory = $this->db->prepare('select cd.categories_name
                                            from categories_description cd,
                                                 products_to_categories p2c,
                                                 languages  l
                                            where p2c.products_id = :products_id
                                            and p2c.categories_id = cd.categories_id
                                            and l.code = :code
                                            and l.languages_id = cd.language_id limit 1
                                           ');

          $Qcategory->bindInt(':products_id', $QorderProducts->valueInt('products_id'));
          $Qcategory->bindValue(':code', DEFAULT_LANGUAGE);

          $Qcategory->execute();

          $category = $Qcategory->fetch();

          $header .= "  ga('ecommerce:addItem', { ";
          $header .= "  'id': '" . $Qorder->valueInt('orders_id') . "', ";
          $header .= "  'sku': '" . (int)$QorderProducts->valueInt('products_id') . "', ";
          $header .= "  'name': '" . HTML::output($QorderProducts->value('products_name')) . "', ";
          $header .= "  'category': '" . HTML::output($category['categories_name']) . "', ";
          $header .= "  'price': '" . $this->format_raw($QorderProducts->value('final_price')) . "', ";
          $header .= "  'quantity': '" . (int)$QorderProducts->valueInt('products_quantity') . "' ";
          $header .= "  });";
        }

        $header .= "  ga('ecommerce:send');" . "\n";
      }

      return $header;
    }

    public function execute()
    {
      if (defined('MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ANALYTICS_GA_ACCOUNT_ID')) {
        $output = '<script type="text/javascript">tarteaucitron.user.gajsUa = \'' . MODULE_HEADER_TAGS_GDPR_TARTE_AU_CITRON_PLUGIN_GOOGLE_ANALYTICS_GA_ACCOUNT_ID . '\';tarteaucitron.user.gajsMore = function () { ' . $this->getOption() . ' };(tarteaucitron.job = tarteaucitron.job || []).push(\'gajs\');</script>';
        return $output;
      }
    }
  }
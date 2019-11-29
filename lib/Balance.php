<?php
/**
 * Created by PhpStorm.
 * @author Robert Jacobson <rjacobson@thexroadz.com>
 * Created at 11/11/19 12:26 PM UTC-05:00
 *
 * @see https://help.shopify.com/en/api/reference/shopify_payments/balance Shopify API Reference for Shopify Payments Balance
 */

namespace PHPShopify;


class Balance extends ShopifyResource
{
    /**
     * @inheritDoc
     */
    protected $resourceKey = 'balance';

    /**
     * Get the pluralized version of the resource key
     *
     * Normally its the same as $resourceKey appended with 's', when it's different, the specific resource class will override this function
     *
     * @return string
     */
    protected function pluralizeKey()
    {
        return $this->resourceKey;
    }

    /**
     * If the resource is read only. (No POST / PUT / DELETE actions)
     *
     * @var boolean
     */
    public $readOnly = true;

    /**
     * @inheritDoc
     */
    protected $childResource = array(
        'Transactions'
    );
}
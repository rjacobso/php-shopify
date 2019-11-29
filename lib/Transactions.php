<?php
/**
 * Created by PhpStorm.
 * @author Robert Jacobson <rjacobson@thexroadz.com>
 * Created at 11/11/19 12:26 PM UTC-05:00
 *
 * @see https://help.shopify.com/en/api/reference/shopify_payments/transasction Shopify API Reference for Shopify Payment Transaction
 */

namespace PHPShopify;


class Transactions extends ShopifyResource
{
    /**
     * @inheritDoc
     */
    protected $resourceKey = 'transaction';

    /**
     * If the resource is read only. (No POST / PUT / DELETE actions)
     *
     * @var boolean
     */
    public $readOnly = true;
}
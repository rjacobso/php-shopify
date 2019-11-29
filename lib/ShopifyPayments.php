<?php
/**
 * Created by PhpStorm.
 * @author Robert Jacobson <rjacobson@thexroadz.com>
 * Created at 11/11/19 12:26 PM UTC-05:00
 *
 * @see https://help.shopify.com/en/api/reference/shopify_payments Shopify API Reference for Shopify Payments
 */

namespace PHPShopify;


class ShopifyPayments extends ShopifyResource
{
    /**
     * @inheritDoc
     */
    protected $resourceKey = 'shopify_payment';

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
        'Balance',
        'Dispute',
        'Payouts',
    );
}
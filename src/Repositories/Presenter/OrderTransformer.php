<?php

namespace Litecms\Product\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class OrderTransformer extends TransformerAbstract
{
    public function transform(\Litecms\Product\Models\Order $order)
    {
        return [
            'id'                => $order->getRouteKey(),
            'key'               => [
                'public'    => $order->getPublicKey(),
                'route'     => $order->getRouteKey(),
            ], 
            'name'              => $order->name,
            'address'           => $order->address,
            'track_status'      => $order->track_status,
            'product_id'        => $order->product_id,
            'subtotal'          => $order->subtotal,
            'tax'               => $order->tax,
            'total'             => $order->total,
            'payment_status'    => $order->payment_status,
            'payment_methods'   => $order->payment_methods,
            'payment_details'   => $order->payment_details,
            'created_at'        => $order->created_at,
            'updated_at'        => $order->updated_at,
            'deleted_at'        => $order->deleted_at,
            'url'               => [
                'public'    => trans_url('product/'.$order->getPublicKey()),
                'user'      => guard_url('product/order/'.$order->getRouteKey()),
            ], 
            'status'            => trans('app.'.$order->status),
            'created_at'        => format_date($order->created_at),
            'updated_at'        => format_date($order->updated_at),
        ];
    }
}
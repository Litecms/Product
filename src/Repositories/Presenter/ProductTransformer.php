<?php

namespace Litecms\Product\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class ProductTransformer extends TransformerAbstract
{
    public function transform(\Litecms\Product\Models\Product $product)
    {
        return [
            'id'                => $product->getRouteKey(),
            'key'               => [
                'public'    => $product->getPublicKey(),
                'route'     => $product->getRouteKey(),
            ], 
            'title'             => $product->title,
            'discription'       => $product->discription,
            'summary'           => $product->summary,
            'features'          => $product->features,
            'tags'              => $product->tags,
            'model'             => $product->model,
            'meta_title'        => $product->meta_title,
            'meta_discription'  => $product->meta_discription,
            'meta_keywords'     => $product->meta_keywords,
            'sku'               => $product->sku,
            'upc'               => $product->upc,
            'ean'               => $product->ean,
            'jan'               => $product->jan,
            'isbn'              => $product->isbn,
            'mpn'               => $product->mpn,
            'location'          => $product->location,
            'price'             => $product->price,
            'tax'               => $product->tax,
            'slider'            => $product->slider,
            'quantity'          => $product->quantity,
            'minimum_qauantity' => $product->minimum_qauantity,
            'subtract_stock'    => $product->subtract_stock,
            'stock_status'      => $product->stock_status,
            'shipping'          => $product->shipping,
            'date_available'    => $product->date_available,
            'dimensions'        => $product->dimensions,
            'dimension_class'   => $product->dimension_class,
            'weight'            => $product->weight,
            'weight_class'      => $product->weight_class,
            'sort_order'        => $product->sort_order,
            'related_products'  => $product->related_products,
            'discount'          => $product->discount,
            'images'            => $product->images,
            'slug'              => $product->slug,
            'status'            => $product->status,
            'user_id'           => $product->user_id,
            'user_type'         => $product->user_type,
            'upload_folder'     => $product->upload_folder,
            'created_at'        => $product->created_at,
            'updated_at'        => $product->updated_at,
            'deleted_at'        => $product->deleted_at,
            'url'               => [
                'public'    => trans_url('product/'.$product->getPublicKey()),
                'user'      => guard_url('product/product/'.$product->getRouteKey()),
            ], 
            'status'            => trans('app.'.$product->status),
            'created_at'        => format_date($product->created_at),
            'updated_at'        => format_date($product->updated_at),
        ];
    }
}
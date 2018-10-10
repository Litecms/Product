<?php

namespace Litecms\Product\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Litepie\Database\Model;
use Litepie\Database\Traits\Slugger;
use Litepie\Database\Traits\DateFormatter;
use Litepie\Filer\Traits\Filer;
use Litepie\Hashids\Traits\Hashids;
use Litepie\Repository\Traits\PresentableTrait;
use Litepie\Trans\Traits\Translatable;
class Product extends Model
{
    use Filer, SoftDeletes, Hashids, Slugger, Translatable, DateFormatter, PresentableTrait;


    /**
     * Configuartion for the model.
     *
     * @var array
     */
     protected $config = 'litecms.product.product.model';


    /**
     * The category that belong to the product.
     */
    public function category(){
        return $this->belongsTo('Litecms\Product\Models\Category', 'category_id');
    }


    /**
     * The order that belong to the product.
     */
    public function order(){
        return $this->hasMany('Product\Product\Models\Order');
    }
}

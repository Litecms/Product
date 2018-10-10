<?php

namespace Litecms\Product\Repositories\Presenter;

use Litepie\Repository\Presenter\FractalPresenter;

class OrderPresenter extends FractalPresenter {

    /**
     * Prepare data to present
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new OrderTransformer();
    }
}
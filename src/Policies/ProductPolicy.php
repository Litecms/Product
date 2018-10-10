<?php

namespace Litecms\Product\Policies;

use Litepie\User\Contracts\UserPolicy;
use Litecms\Product\Models\Product;

class ProductPolicy
{

    /**
     * Determine if the given user can view the product.
     *
     * @param UserPolicy $user
     * @param Product $product
     *
     * @return bool
     */
    public function view(UserPolicy $user, Product $product)
    {
        if ($user->canDo('product.product.view') && $user->isAdmin()) {
            return true;
        }

        return $product->user_id == user_id() && $product->user_type == user_type();
    }

    /**
     * Determine if the given user can create a product.
     *
     * @param UserPolicy $user
     * @param Product $product
     *
     * @return bool
     */
    public function create(UserPolicy $user)
    {
        return  $user->canDo('product.product.create');
    }

    /**
     * Determine if the given user can update the given product.
     *
     * @param UserPolicy $user
     * @param Product $product
     *
     * @return bool
     */
    public function update(UserPolicy $user, Product $product)
    {
        if ($user->canDo('product.product.edit') && $user->isAdmin()) {
            return true;
        }

        return $product->user_id == user_id() && $product->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given product.
     *
     * @param UserPolicy $user
     * @param Product $product
     *
     * @return bool
     */
    public function destroy(UserPolicy $user, Product $product)
    {
        return $product->user_id == user_id() && $product->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given product.
     *
     * @param UserPolicy $user
     * @param Product $product
     *
     * @return bool
     */
    public function verify(UserPolicy $user, Product $product)
    {
        if ($user->canDo('product.product.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given product.
     *
     * @param UserPolicy $user
     * @param Product $product
     *
     * @return bool
     */
    public function approve(UserPolicy $user, Product $product)
    {
        if ($user->canDo('product.product.approve')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the user can perform a given action ve.
     *
     * @param [type] $user    [description]
     * @param [type] $ability [description]
     *
     * @return [type] [description]
     */
    public function before($user, $ability)
    {
        if ($user->isSuperuser()) {
            return true;
        }
    }
}

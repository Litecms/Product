<?php

namespace Litecms\Product\Policies;

use Litepie\User\Contracts\UserPolicy;
use Litecms\Product\Models\Order;

class OrderPolicy
{

    /**
     * Determine if the given user can view the order.
     *
     * @param UserPolicy $user
     * @param Order $order
     *
     * @return bool
     */
    public function view(UserPolicy $user, Order $order)
    {
        if ($user->canDo('product.order.view') && $user->isAdmin()) {
            return true;
        }

        return $order->user_id == user_id() && $order->user_type == user_type();
    }

    /**
     * Determine if the given user can create a order.
     *
     * @param UserPolicy $user
     * @param Order $order
     *
     * @return bool
     */
    public function create(UserPolicy $user)
    {
        return  $user->canDo('product.order.create');
    }

    /**
     * Determine if the given user can update the given order.
     *
     * @param UserPolicy $user
     * @param Order $order
     *
     * @return bool
     */
    public function update(UserPolicy $user, Order $order)
    {
        if ($user->canDo('product.order.edit') && $user->isAdmin()) {
            return true;
        }

        return $order->user_id == user_id() && $order->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given order.
     *
     * @param UserPolicy $user
     * @param Order $order
     *
     * @return bool
     */
    public function destroy(UserPolicy $user, Order $order)
    {
        return $order->user_id == user_id() && $order->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given order.
     *
     * @param UserPolicy $user
     * @param Order $order
     *
     * @return bool
     */
    public function verify(UserPolicy $user, Order $order)
    {
        if ($user->canDo('product.order.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given order.
     *
     * @param UserPolicy $user
     * @param Order $order
     *
     * @return bool
     */
    public function approve(UserPolicy $user, Order $order)
    {
        if ($user->canDo('product.order.approve')) {
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

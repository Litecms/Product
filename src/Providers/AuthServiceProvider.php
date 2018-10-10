<?php

namespace Litecms\Product\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the package.
     *
     * @var array
     */
    protected $policies = [
        // Bind Product policy
        'Litecms\Product\Models\Product' => \Litecms\Product\Policies\ProductPolicy::class,
// Bind Category policy
        'Litecms\Product\Models\Category' => \Litecms\Product\Policies\CategoryPolicy::class,
// Bind Order policy
        'Litecms\Product\Models\Order' => \Litecms\Product\Policies\OrderPolicy::class,
    ];

    /**
     * Register any package authentication / authorization services.
     *
     * @param \Illuminate\Contracts\Auth\Access\Gate $gate
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        parent::registerPolicies($gate);
    }
}

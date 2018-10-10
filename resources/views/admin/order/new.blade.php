<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">  {!! trans('product::order.names') !!} [{!! trans('product::order.text.preview') !!}]</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-primary btn-sm"  data-action='NEW' data-load-to='#product-order-entry' data-href='{!!guard_url('product/order/create')!!}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }} </button>
        </div>
    </div>
</div>
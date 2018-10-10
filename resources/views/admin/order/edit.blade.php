    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#order" data-toggle="tab">{!! trans('product::order.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#product-order-edit'  data-load-to='#product-order-entry' data-datatable='#product-order-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#product-order-entry' data-href='{{guard_url('product/order')}}/{{$order->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('product-order-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('product/order/'. $order->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="order">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('product::order.name') !!} [{!!$order->name!!}] </div>
                @include('product::admin.order.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>
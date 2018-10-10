    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('product::order.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#product-order-entry' data-href='{{guard_url('product/order/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($order->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#product-order-entry' data-href='{{ guard_url('product/order') }}/{{$order->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#product-order-entry' data-datatable='#product-order-list' data-href='{{ guard_url('product/order') }}/{{$order->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('product-order-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('product/order'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('product::order.name') !!}  [{!! $order->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('product::admin.order.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>
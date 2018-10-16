            @include('product::order.partial.header')

            <section class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            @include('product::order.partial.aside')
                        </div>
                        <div class="col-md-9 ">
                            <div class="area">
                                <div class="item">
                                    <div class="feature">
                                        <img class="img-responsive center-block" src="{!!url($order->defaultImage('images' , 'xl'))!!}" alt="{{$order->title}}">
                                    </div>
                                    <div class="content">
                                        <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="id">
                    {!! trans('product::order.label.id') !!}
                </label><br />
                    {!! $order['id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="name">
                    {!! trans('product::order.label.name') !!}
                </label><br />
                    {!! $order['name'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="address">
                    {!! trans('product::order.label.address') !!}
                </label><br />
                    {!! $order['address'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="track_status">
                    {!! trans('product::order.label.track_status') !!}
                </label><br />
                    {!! $order['track_status'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="product_id">
                    {!! trans('product::order.label.product_id') !!}
                </label><br />
                    {!! $order['product_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="subtotal">
                    {!! trans('product::order.label.subtotal') !!}
                </label><br />
                    {!! $order['subtotal'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="tax">
                    {!! trans('product::order.label.tax') !!}
                </label><br />
                    {!! $order['tax'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="total">
                    {!! trans('product::order.label.total') !!}
                </label><br />
                    {!! $order['total'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="payment_status">
                    {!! trans('product::order.label.payment_status') !!}
                </label><br />
                    {!! $order['payment_status'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="payment_methods">
                    {!! trans('product::order.label.payment_methods') !!}
                </label><br />
                    {!! $order['payment_methods'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="payment_details">
                    {!! trans('product::order.label.payment_details') !!}
                </label><br />
                    {!! $order['payment_details'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="created_at">
                    {!! trans('product::order.label.created_at') !!}
                </label><br />
                    {!! $order['created_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="updated_at">
                    {!! trans('product::order.label.updated_at') !!}
                </label><br />
                    {!! $order['updated_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="deleted_at">
                    {!! trans('product::order.label.deleted_at') !!}
                </label><br />
                    {!! $order['deleted_at'] !!}
            </div>
        </div>
    </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('name')
                       -> label(trans('product::order.label.name'))
                       -> placeholder(trans('product::order.placeholder.name'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('address')
                       -> label(trans('product::order.label.address'))
                       -> placeholder(trans('product::order.placeholder.address'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('track_status')
                       -> label(trans('product::order.label.track_status'))
                       -> placeholder(trans('product::order.placeholder.track_status'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('product_id')
                       -> label(trans('product::order.label.product_id'))
                       -> placeholder(trans('product::order.placeholder.product_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::decimal('subtotal')
                       -> label(trans('product::order.label.subtotal'))
                       -> placeholder(trans('product::order.placeholder.subtotal'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::decimal('tax')
                       -> label(trans('product::order.label.tax'))
                       -> placeholder(trans('product::order.placeholder.tax'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::decimal('total')
                       -> label(trans('product::order.label.total'))
                       -> placeholder(trans('product::order.placeholder.total'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('payment_status')
                    -> options(trans('product::order.options.payment_status'))
                    -> label(trans('product::order.label.payment_status'))
                    -> placeholder(trans('product::order.placeholder.payment_status'))!!}
               </div>

                <div class='col-md-4 col-sm-6'>
                   {!! Form::inline_radios('payment_methods')
                   -> radios(trans('product::order.options.payment_methods'))
                   -> label(trans('product::order.label.payment_methods'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('payment_details')
                       -> label(trans('product::order.label.payment_details'))
                       -> placeholder(trans('product::order.placeholder.payment_details'))!!}
                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>




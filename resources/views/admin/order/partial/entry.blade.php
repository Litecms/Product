            <div class='row'>
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
                       {!! Form::numeric('product_id')
                       -> label(trans('product::order.label.product_id'))
                       -> placeholder(trans('product::order.placeholder.product_id'))!!}
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
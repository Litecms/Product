            <div class='row'>
                <div class='col-md-12 col-sm-6'>
                    {!! Form::text ('title')
                    -> label(trans('product::product.label.title'))
                    -> placeholder(trans('product::product.placeholder.title'))!!}
                </div>
                <div class='col-md-6 col-sm-6'>
                    {!! Form::select ('category_id')
                    -> options (Product::categories())
                    -> label('Category')
                    -> placeholder('Select category')!!}
                </div>
                <div class='col-md-12'>
                    {!! Form::textarea('discription')
                    -> label(trans('product::product.label.discription'))
                    -> dataUpload(trans_url($product->getUploadURL('discription')))
                    -> addClass('html-editor')
                    -> placeholder(trans('product::product.placeholder.discription'))!!}
                </div>
                
                <div class='col-md-12'>
                    {!! Form::textarea('features')
                    -> label(trans('product::product.label.features'))
                    -> dataUpload(trans_url($product->getUploadURL('features')))
                    -> addClass('html-editor')
                    -> placeholder(trans('product::product.placeholder.features'))!!}
                </div>
                
                <div class='col-md-4 col-sm-6'>
                       {!! Form::decimal('price')
                       -> label(trans('product::product.label.price'))
                       -> placeholder(trans('product::product.placeholder.price'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('tax')
                       -> label(trans('product::product.label.tax'))
                       -> placeholder(trans('product::product.placeholder.tax'))!!}
                </div>

               
                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('quantity')
                       -> label(trans('product::product.label.quantity'))
                       -> placeholder(trans('product::product.placeholder.quantity'))!!}
                </div>

                

                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('stock_status')
                    -> options(trans('product::product.options.stock_status'))
                    -> label(trans('product::product.label.stock_status'))
                    -> placeholder(trans('product::product.placeholder.stock_status'))!!}
               </div>

                
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('discount')
                       -> label(trans('product::product.label.discount'))
                       -> placeholder(trans('product::product.placeholder.discount'))!!}
                </div>

                <div class='col-md-12 col-sm-12'>
                    <div class="form-group">
                        <label for="images" class="control-label col-lg-12 col-sm-12 text-left">
                         {{trans('product::product.label.images') }}
                         </label>
                        <div class='col-lg-3 col-sm-12'>
                            {!! $product->files('images', 10)
                            ->mime(config('filer.image_extensions'))
                            ->url($product->getUploadUrl('images'))
                            ->dropzone()!!}
                        </div>
                        <div class='col-lg-7 col-sm-12'>
                            {!! $product->files('images')
                             ->editor()!!}
                        </div>
                    </div>
                </div>
                <div class='col-md-4 col-sm-6'>
                   {!! Form::select('status')
                   -> options(trans('product::product.options.status'))
                   -> label(trans('product::product.label.status'))!!}
                </div>
            </div>
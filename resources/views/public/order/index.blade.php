            @include('product::product.partial.header')

            <section class="grid">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <table class="table" cellpadding="0" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="prodcutimage">&nbsp;</th>
                                    <th class="productdesc">
                                        <span>Product details</span>
                                    </th>
                                    
                                    
                                    <th class="itemprice">
                                        <span>Price</span>
                                    </th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr> 
                                    <td class="productimage">
                                        <a href="{{url('products/'.$product->slug)}}">
                                            <img src="{{url($product->defaultImage('images','xs'))}}" class="img-fluid" alt="">
                                        </a>
                                    </td>
                                    <td class="productdesc">
                                        <a href="{{url('products/'.$product->slug)}}" class="product-link d-block">{{$product->title}}</a>
                                        
                                    </td>

                                    
                                    <td class="itemprice">
                                        <span class="unitprice-mobile d-sm-none d-md-none d-lg-none"></span>$ 
                                        <span class="money" id="price" >{{$product->price}}</span>
                                    </td>
                                    
                                </tr>
                                
                            </tbody>
                        </table>
                        <div class="divider"></div>
                            <form action="{{trans_url('orderpayment')}}">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="checkout-fn">Full Name</label>
                                            <input class="form-control" type="text" name="name" id="checkout-fn" required>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="checkout-fn">Email</label>
                                            <input class="form-control" type="email" name="email" id="email" required>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="row mb-30">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="checkout-address1">Quantity</label>
                                            <input class="form-control" type="number" name="quantity" id="quantity" required>
                                        </div>
                                    </div>
                                    
                                </div>
                                 <div class="row mb-30">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="checkout-address1">Address</label>
                                            <input class="form-control" type="textarea" name="address" id="checkout-address1" required>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row mb-30">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="checkout-address1">Comments</label>
                                            <input class="form-control" type="textarea" name="comments" id="comments" required>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="row mb-30">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                        {!! Form::select('payment_methods')
                                        -> options(trans('product::order.options.payment_methods'))
                                        ->   addClass('form-control')
                                        ->label('Payment Method')
                                        -> placeholder('Select Payment method')!!}
                                        </div>
                                    </div>
                                    
                                </div>
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <input type="hidden" name="total" value="{{$product->price}}">
                                
                                <button type="submit" class="btn btn-primary btn-round">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section> 
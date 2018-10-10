            @include('product::public.product.partial.header')

            <section class="grid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            @include('product::public.product.partial.aside')
                        </div>
                        @foreach($products as $product)
                        <div class="col-md-3 ">
                            <div class="main-area parent-border list-item">
                                
                                <div class="item border">
                                    <div class="feature">
                                        <a href="{{trans_url('products')}}/{{@$product['slug']}}">
                                            <img src="{{url($product->defaultImage('images','sm'))}}" class="img-responsive center-block" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4><a href="{{trans_url('product')}}/{{$product['slug']}}">{{str_limit($product['title'], 20)}}</a> 
                                        </h4>
                                        <div class="metas mt20">
                                            <div class="tag pull-left">
                                                <a href="#" class="">$ {{$product->price}}</a>
                                            </div>
                                            <div class="date-time pull-right">
                                                <span>{{$product->stock_status}}</span>
                                                
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>


                                
                            </div>
                            
                        </div>
                        @endforeach
                        <div class="pagination text-center">
                            {{ $products->links() }}
                            </div>
                    </div>
                </div>
            </section> 
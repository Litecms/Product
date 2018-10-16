       @include('product::product.partial.header')


<section class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="sidebar">
                               
                                
                                <div class="widget category">
                                   
                                    <ul class="mt-20">
                                        @include('product::product.partial.aside')
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="area">
                                <div class="item">
                                    <div class="date-time pull-right">
                                           <a href="{{trans_url('order/'.$product->slug)}}" class="btn btn-primary btn-round">Order Now</a>      
                                    </div>
                                    <div class="feature">
                                        <img class="img-responsive center-block" src="{{url($product->defaultImage('images'))}}" alt="">
                                    </div>
                                    <div class="content">
                                        <h4>{{$product->title}}, ${{$product->price}}</h4>
                                        <div class="metas mt-20 clearfix">
                                            <div class="tag pull-left">
                                                
                                                <a href="{{trans_url('product/category')}}/{{@$product->category->slug}}" class="btn btn-primary btn-round">{{@$product->category->name}}</a> 
                                               
                                            </div>
                                            <div class="date-time pull-right">
                                                <span><img class="img-circle" src="img/blogs/author-01.jpg" alt=""></span>
                                                
                                                <span>$ {{$product->price}}</span>
                                                <span>{{$product->stock_status}}</span>
                                            </div>

                                        </div>
                                        <div class="divider"></div>
                                        <p>{!! $product->discription !!}</p>
                                        <ul class="list-inline tags mt-40">
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </section>
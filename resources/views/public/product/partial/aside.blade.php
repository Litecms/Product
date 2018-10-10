<div class="sidebar">
    

    <div class="widget category">
        <h3 class="border-bottom">Category</h3>
        <ul class="mt20">
            @foreach(Product::asidecategories() as $category) 
            <li><a href="{{trans_url('product/category/'.$category->slug)}}"></i>{{$category->name}}</a></li>
            @endforeach
        </ul>
    </div>
    

</div>
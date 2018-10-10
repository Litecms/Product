    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('product::category.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#product-category-entry' data-href='{{guard_url('product/category/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($category->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#product-category-entry' data-href='{{ guard_url('product/category') }}/{{$category->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#product-category-entry' data-datatable='#product-category-list' data-href='{{ guard_url('product/category') }}/{{$category->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('product-category-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('product/category'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('product::category.name') !!}  [{!! $category->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('product::admin.category.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>
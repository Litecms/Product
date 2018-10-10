    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#category" data-toggle="tab">{!! trans('product::category.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#product-category-edit'  data-load-to='#product-category-entry' data-datatable='#product-category-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#product-category-entry' data-href='{{guard_url('product/category')}}/{{$category->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('product-category-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('product/category/'. $category->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="category">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('product::category.name') !!} [{!!$category->name!!}] </div>
                @include('product::admin.category.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>
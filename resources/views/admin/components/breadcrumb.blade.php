
<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>{{$title}}</h4>
            </div>
            <div>
                {{ Breadcrumbs::exists(request()->route()->getName()) ? Breadcrumbs::render(request()->route()->getName()) : Breadcrumbs::render('admin.dashboard') }}
            </div>
        </div>

    </div>
</div>

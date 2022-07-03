@if (Session::get('type'))
<div class="row">
    <div class="col-md-8">
        <div class="alert alert-{{ Session::get('type') }}  alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            {{ Session::get('message') }}
        </div>
    </div>
</div>
@endif

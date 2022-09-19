@extends('admin.layouts.master')

@section('title') Settings @endsection

@section('content')

    <x-alert.alert-component />

    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Settings</span>/System settings
    </h4>

    <div class="card">
       <div class="card-body">
        <div class="col-xl-12">
          <h6 class="text-muted">Manage settings</h6>
          <div class="nav-align-left mb-4">
            <ul class="nav nav-pills me-3" role="tablist">
              <li class="nav-item">
                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-left-home" aria-controls="navs-pills-left-home" aria-selected="true">System</button>
              </li>
              <li class="nav-item">
              <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-left-profile" aria-controls="navs-pills-left-profile" aria-selected="false">Theme</button>
              </li>
              <li class="nav-item">
              <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-left-cache" aria-controls="navs-pills-left-cache" aria-selected="false">Cache</button>
              </li>
          </ul>
            <div class="tab-content">
              <div class="tab-pane fade show active" id="navs-pills-left-home" role="tabpanel">
                @include('admin.settings.settings.form.system')
              </div>
              <div class="tab-pane fade" id="navs-pills-left-profile" role="tabpanel">
                @include('admin.settings.settings.form.theme')
              </div>
              <div class="tab-pane fade" id="navs-pills-left-cache" role="tabpanel">
                @include('admin.settings.settings.form.cache')
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection

@push('script')
<script>
    $(function () {
        $('.btn-del-select').hide();
        $(document).on('click','.add-select', function(){
            $(this).parent().parent().find(".duplicable-select").clone().insertBefore($(this).parent()).removeClass("duplicable-select").find(":not(select).form-control").val("");
            $('.btn-del-select').fadeIn();
            $(this).parent().parent().find(".btn-del-select").click(function(e) {
                $(this).parent().parent().remove(); 
            });
        });
    });
</script>
@endpush
@extends('admin.layouts.master')

@section('title') {{ trans('sentence.user_list') }} @endsection

@section('content')

  @include('admin.user.summery')
    
  <div class="row">
    <div class="col-md-6">
      <div class="card" id="example">
        <div class="card-header">Export user</div>
          <div class="card-body">
            <Import/>
          </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">Export user</div>
        <div class="card-body">
          <button class="button-create" id="export">
            Export
          </button>
          <a href="{{ route('export.download',['download'=>'zip']) }}" class="button-create float-right" id="download" style="display: none;">Download</a>
          <span style="display: none;" class="loader">Exporting....... please wait</span>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-md-3 mt-2">
      <h4 class="fw-bold">{{ trans('sentence.user_list') }}</h4>
    </div>
    <div class="col-md 7"></div>
    <div class="col-md-2">
      <a class="button-create float-right" data-bs-target="#basicModal" data-backdrop="static" data-keyboard="false" data-bs-toggle="modal" >{{ trans('sentence.create_new') }}</a>
    </div> 
  </div>

  <x-alert.alert-component />

  <div class="card mt-3">
    <div class="card-body">
      <table class="table data-table">
        <thead>
            <tr>
                <th>{{ trans('sentence.serial') }}</th>
                <th>{{ trans('sentence.name') }}</th>
                <th>{{ trans('sentence.email') }}</th>
                <th>{{ trans('sentence.status') }}</th>
                <th>{{ trans('sentence.created') }}</th>
                <th>{{ trans('sentence.action') }}</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0"></tbody>
        </table>
    </div>
  </div>

  @includeIf('admin.user.modal._create')
  <div class="edit-modal"></div>

@endsection
@push('script')
<script type="text/javascript">
  $(function () {
    var table = $('.data-table').DataTable({
        "processing": true,
        "serverSide": true,
        'paginate': true,
        'searchDelay': 700,
        "responsive": true,
        "order": [ [0, 'desc'] ],
        "ajax":{
            "url": "{{ url('user') }}",
            "dataType": "json",
            "type": "get",
            "data":{ _token: "{{ csrf_token() }}"}
        },
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'status', name: 'status'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action', orderable: true, searchable: true},
        ]
    });
    
    $('body').on('click','#export',function(){
        $('.loader').show();
        $.ajax({
          url: "{{ route('export') }}",
          complete: function(res){
            $('#download').show();
            // const data = res;
            // const link = document.createElement('a');
            // link.setAttribute('href', data.path);
            // link.setAttribute('download', 'users.csv');
            // link.click();
            $('.loader').html('Your file is ready now, download');
          }
        })
    });

  });
</script>
@endpush
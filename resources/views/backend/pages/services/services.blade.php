@extends('backend.master')

@section('content')

<div class="card">
    <div class="border-bottom title-part-padding">
      <h4 class="card-title mb-0">Slides</h4>
    </div>
    <div class="card-body">
        @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible bg-danger text-white border-0 fade show" role="alert">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            {{ Session::get('success') }}
        </div>
        @endif
        @if(Session::has('delete'))
        <div class="alert alert-danger alert-dismissible bg-success text-white border-0 fade show" role="alert">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            {{ Session::get('delete') }}
        </div>
        @endif
      <div id="editable-datatable_wrapper" class="dataTables_wrapper"><div class="dataTables_length" id="editable-datatable_length"></div><table class="table table-striped table-bordered dataTable" id="editable-datatable" style="cursor: pointer;" aria-describedby="editable-datatable_info">
        <thead>
          <tr>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" style="width: 148.217px;" aria-sort="ascending">SL</th>
            <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" style="width: 227.2px;">Service Name</th>
            <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" style="width: 92.417px;">Action</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($services as $key => $service)
            <tr id="7" class="gradeA odd">
                <td tabindex="1" class="sorting_1">{{ $services->firstItem() + $key }}</td>
                <td tabindex="1">{{ Str::limit($service->service_name, 100, '...') }}</td>
                <td tabindex="1">
                    <a class="btn waves-effect waves-light btn-success mt-2" href="{{ route('serviceedit',$service->id ) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z"></path>
                            <path d="M16 5l3 3"></path>
                            <path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6"></path>
                        </svg>
                        Edit
                    </a>
                    <a class="btn waves-effect waves-light btn-danger mt-2" href="{{ route('servicedelete',$service->id) }}" onclick="return confirm('Are you sure you want to delete?')">
                        <i class="ti ti-trash fs-5"></i>
                        Delete
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="20">No Data Found</td>
            </tr>
        @endforelse
        </tbody>
      </table>
      {{ $services->links() }}
    <input style="position: absolute; display: none;"></div>
  </div>

@endsection

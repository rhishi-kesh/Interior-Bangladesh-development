@extends('backend.master')

@section('content')

<div class="card">
    <div class="border-bottom title-part-padding d-flex justify-content-between">
      <h4 class="card-title mb-0">Blogs</h4>
      <div>
        <button type="button" class="justify-content-center w-100 btn mb-1 btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#samedata-modal" data-bs-whatever="@mdo">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4"></path>
                <path d="M13.5 6.5l4 4"></path>
                <path d="M16 19h6"></path>
                <path d="M19 16v6"></path>
             </svg>
             <span class="ms-2">Add Blog</span>
        </button>
      </div>
    </div>
    <div class="card-body">
        @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            {{ Session::get('success') }}
        </div>
        @endif
        @if(Session::has('delete'))
        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            {{ Session::get('delete') }}
        </div>
        @endif
      <div id="editable-datatable_wrapper" class="dataTables_wrapper"><div class="dataTables_length" id="editable-datatable_length"></div>
      <table class="table table-striped table-bordered dataTable table-responsive" id="editable-datatable" style="cursor: pointer;" aria-describedby="editable-datatable_info">
        <thead>
          <tr>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" style="width: 148.217px;" aria-sort="ascending">SL</th>
            <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" style="width: 227.2px;">Blog Title</th>
            <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" style="width: 92.417px;">Action</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($contents as $key => $content)
            <tr id="7" class="gradeA odd">
                <td tabindex="1" class="sorting_1">{{ $contents->firstItem()+$key }}</td>
                <td tabindex="1">{{ Str::limit($content->blog_title,100,'...') }}</td>
                <td tabindex="1">
                    <a class="btn waves-effect waves-light btn-success mt-2" href="{{ route('blog_contentedit',$content->id) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z"></path>
                            <path d="M16 5l3 3"></path>
                            <path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6"></path>
                        </svg>
                        Edit
                    </a>
                    <a class="btn waves-effect waves-light btn-danger mt-2" href="{{ route('blog_contentdelete',$content->id) }}" onclick="return confirm('Are you sure you want to delete?')">
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
        {{ $contents->links() }}
        <div class="modal fade" id="samedata-modal">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header d-flex align-items-center">
                        <h4 class="modal-title" id="exampleModalLabel1">
                        Add Blog
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('blog_content_post') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="blog_title" class="control-label mb-1" >Blog Title</label>
                                <input type="text" class="form-control @error('blog_title') is-invalid @enderror" value="{{ old('blog_title') }}" placeholder="Enter Your Title" id="blog_title" name="blog_title"/>
                                @error('blog_title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="blog_subtitle" class="control-label mb-1" >Blog Subtitle</label>
                                <textarea type="text" class="form-control @error('blog_subtitle') is-invalid @enderror" placeholder="Enter Your Subtitle" id="blog_subtitle" name="blog_subtitle">{{ old('blog_subtitle') }}</textarea>
                                @error('blog_subtitle')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="blog_image" class="form-label">Select Blog Image</label>
                                <input class="form-control form-control-lg rounded-1  @error('blog_image') is-invalid @enderror" type="file" id="blog_image" name="blog_image">
                                @error('blog_image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <img id="blog_image_p" src="#" alt="Image Preview" style="max-width: 150px; max-height: 70px;" class="mt-3">
                                @section('jss')
                                    <script>
                                        blog_image.onchange = evt => {
                                        const [file] = blog_image.files
                                        if (file) {
                                            blog_image_p.src = URL.createObjectURL(file)
                                        }
                                    }
                                    </script>
                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#blog_subtitle' ) )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                    </script>
                                @endsection
                            </div>
                            </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light-danger text-danger font-medium" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="submit" class="btn btn-success">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection

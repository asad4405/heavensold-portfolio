@extends('Backend.layouts.master')
@section('maincontent')
    <div class="card m-5">
        <div class="card-title"
            style="display: flex;justify-content: space-between;align-items: center;color: #566a7f;padding: 1.5rem;opacity: 0.8;margin-bottom: -40px;">
            <h5>Slider Section</h5>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Add">Add Slider</button>
        </div>

        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <div class="table-responsive text-nowrap">
                <table class="table" id="categoryTable" width="100%" style="text-align: center;">
                    <thead>
                        <tr>
                            <th class="text-center">SL</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Image</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($sliders as $value)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $value->title }}</td>
                                <td><img src="{{ asset($value->image) }}" alt="" width="80"></td>
                                <td>
                                    <a class="text-white btn btn-sm btn-primary" href="{{ route('admin.slider.edit',$value->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                    {{-- <a href="{{ route('admin.slider.destroy',$value->id) }}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Modal for add --}}
        <div class="modal fade" id="Add" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel3">Add Slider Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <form action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-12">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" id="title" class="form-control" name="title"
                                        placeholder="Enter here....." required>
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="short_details" class="form-label">Short Details</label>
                                    <input type="text" id="short_details" class="form-control" name="short_details"
                                        placeholder="Enter here....." required>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="btn_name" class="form-label">Button Name</label>
                                    <input type="text" id="btn_name" class="form-control" name="btn_name"
                                        placeholder="Enter here....." required>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="btn_link" class="form-label">Button Link</label>
                                    <input type="text" id="btn_link" class="form-control" name="btn_link"
                                        placeholder="Enter here....." required>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" id="image" class="form-control" name="image"
                                        placeholder="Enter here....." required>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status"  class="form-select">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>

                                <div class="modal-footer">
                                    <span class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                        Close
                                    </span>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@extends('Backend.layouts.master')
@section('maincontent')
    <div class="card m-5">
        <div class="card-title"
            style="display: flex;justify-content: space-between;align-items: center;color: #566a7f;padding: 1.5rem;opacity: 0.8;margin-bottom: -40px;">
            <h5>Service Section</h5>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Add">Add Service</button>
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
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($services as $value)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $value->title }}</td>
                                <td>
                                    <a class="text-white btn btn-sm btn-primary"
                                        href="{{ route('admin.service.edit', $value->id) }}"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    {{-- <a href="{{ route('admin.service.destroy',$value->id) }}"
                                        class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a> --}}
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
                        <h5 class="modal-title" id="exampleModalLabel3">Add Service Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <form action="{{ route('admin.service.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-12">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" id="title" class="form-control" name="title"
                                        placeholder="Enter here....." required>
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="name_one" class="form-label">Name 1</label>
                                    <input type="text" id="name_one" class="form-control" name="name_one"
                                        placeholder="Enter here.....">
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="name_two" class="form-label">Name 2</label>
                                    <input type="text" id="name_two" class="form-control" name="name_two"
                                        placeholder="Enter here.....">
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="name_three" class="form-label">Name 3</label>
                                    <input type="text" id="name_three" class="form-control" name="name_three"
                                        placeholder="Enter here.....">
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="name_four" class="form-label">Name 4</label>
                                    <input type="text" id="name_four" class="form-control" name="name_four"
                                        placeholder="Enter here.....">
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="name_five" class="form-label">Name 5</label>
                                    <input type="text" id="name_five" class="form-control" name="name_five"
                                        placeholder="Enter here.....">
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="name_six" class="form-label">Name 6</label>
                                    <input type="text" id="name_six" class="form-control" name="name_six"
                                        placeholder="Enter here.....">
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="name_seven" class="form-label">Name 7</label>
                                    <input type="text" id="name_seven" class="form-control" name="name_seven"
                                        placeholder="Enter here.....">
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="name_eight" class="form-label">Name 8</label>
                                    <input type="text" id="name_eight" class="form-control" name="name_eight"
                                        placeholder="Enter here.....">
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="name_nine" class="form-label">Name 9</label>
                                    <input type="text" id="name_nine" class="form-control" name="name_nine"
                                        placeholder="Enter here.....">
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="name_ten" class="form-label">Name 10</label>
                                    <input type="text" id="name_ten" class="form-control" name="name_ten"
                                        placeholder="Enter here.....">
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="youtube_link" class="form-label">Youtube (Link)</label>
                                    <input type="text" id="youtube_link" class="form-control" name="youtube_link"
                                        placeholder="Enter here.....">
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" class="form-select">
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

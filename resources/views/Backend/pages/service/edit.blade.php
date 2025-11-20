@extends('Backend.layouts.master')
@section('maincontent')
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card m-5">
                <div class="card-title"
                    style="display: flex;justify-content: space-between;align-items: center;color: #566a7f;padding: 1.5rem;opacity: 0.8;margin-bottom: -40px;">
                    <h5>Edit Service Section</h5>
                </div>
                <form action="{{ route('admin.service.update', $service->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row container mt-4">
                        <div class="mb-3 col-12">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" id="title" class="form-control" name="title" value="{{ $service->title }}"
                                placeholder="Enter here....." required>
                        </div>
                        <div class="mb-3 col-12">
                            <label for="name_one" class="form-label">Name 1</label>
                            <input type="text" id="name_one" class="form-control" name="name_one"
                                value="{{ $service->name_one }}" placeholder="Enter here.....">
                        </div>
                        <div class="mb-3 col-12">
                            <label for="name_two" class="form-label">Name 2</label>
                            <input type="text" id="name_two" class="form-control" name="name_two"
                                value="{{ $service->name_two }}" placeholder="Enter here.....">
                        </div>
                        <div class="mb-3 col-12">
                            <label for="name_three" class="form-label">Name 3</label>
                            <input type="text" id="name_three" class="form-control" name="name_three"
                                value="{{ $service->name_three }}" placeholder="Enter here.....">
                        </div>
                        <div class="mb-3 col-12">
                            <label for="name_four" class="form-label">Name 4</label>
                            <input type="text" id="name_four" class="form-control" name="name_four"
                                value="{{ $service->name_four }}" placeholder="Enter here.....">
                        </div>
                        <div class="mb-3 col-12">
                            <label for="name_five" class="form-label">Name 5</label>
                            <input type="text" id="name_five" class="form-control" name="name_five"
                                value="{{ $service->name_five }}" placeholder="Enter here.....">
                        </div>
                        <div class="mb-3 col-12">
                            <label for="name_six" class="form-label">Name 6</label>
                            <input type="text" id="name_six" class="form-control" name="name_six"
                                value="{{ $service->name_six }}" placeholder="Enter here.....">
                        </div>
                        <div class="mb-3 col-12">
                            <label for="name_seven" class="form-label">Name 7</label>
                            <input type="text" id="name_seven" class="form-control" name="name_seven"
                                value="{{ $service->name_seven }}" placeholder="Enter here.....">
                        </div>
                        <div class="mb-3 col-12">
                            <label for="name_eight" class="form-label">Name 8</label>
                            <input type="text" id="name_eight" class="form-control" name="name_eight"
                                value="{{ $service->name_eight }}" placeholder="Enter here.....">
                        </div>
                        <div class="mb-3 col-12">
                            <label for="name_nine" class="form-label">Name 9</label>
                            <input type="text" id="name_nine" class="form-control" name="name_nine"
                                value="{{ $service->name_nine }}" placeholder="Enter here.....">
                        </div>
                        <div class="mb-3 col-12">
                            <label for="name_ten" class="form-label">Name 10</label>
                            <input type="text" id="name_ten" class="form-control" name="name_ten"
                                value="{{ $service->name_ten }}" placeholder="Enter here.....">
                        </div>
                        <div class="mb-3 col-12">
                            <label for="youtube_link" class="form-label">Youtube (Link)</label>
                            <input type="text" id="youtube_link" class="form-control" name="youtube_link"
                                value="{{ $service->youtube_link }}" placeholder="Enter here.....">
                        </div>

                        <div class="mb-3 col-12">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" class="form-select">
                                <option @if($service->status == 1) selected @endif value="1">Active</option>
                                <option @if($service->status == 0) selected @endif value="0">Inactive</option>
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
@endsection

@extends('Backend.layouts.master')
@section('maincontent')
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card m-5">
                <div class="card-title"
                    style="display: flex;justify-content: space-between;align-items: center;color: #566a7f;padding: 1.5rem;opacity: 0.8;margin-bottom: -40px;">
                    <h5>Edit Slider Section</h5>
                </div>
                <form action="{{ route('admin.slider.update',$slider->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row container mt-4">
                        <div class="mb-3 col-12">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" id="title" class="form-control" value="{{ $slider->title }}" name="title"
                                placeholder="Enter here....." required>
                        </div>
                        <div class="mb-3 col-12">
                            <label for="short_details" class="form-label">Short Details</label>
                            <input type="text" id="short_details" class="form-control" value="{{ $slider->short_details }}"
                                name="short_details" placeholder="Enter here....." required>
                        </div>

                        <div class="mb-3 col-12">
                            <label for="btn_name" class="form-label">Button Name</label>
                            <input type="text" id="btn_name" class="form-control" value="{{ $slider->btn_name }}"
                                name="btn_name" placeholder="Enter here....." required>
                        </div>

                        <div class="mb-3 col-12">
                            <label for="btn_link" class="form-label">Button Link</label>
                            <input type="text" id="btn_link" class="form-control" value="{{ $slider->btn_link }}"
                                name="btn_link" placeholder="Enter here....." required>
                        </div>

                        <div class="mb-3 col-12">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" id="image" class="form-control" name="image" placeholder="Enter here.....">
                            <div class="mt-2">
                                <img src="{{ asset($slider->image) }}" alt="" width="80">
                            </div>
                        </div>

                        <div class="mb-3 col-12">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" class="form-select">
                                <option @if($slider->status == 1) selected @endif value="1">Active</option>
                                <option @if($slider->status == 0) selected @endif value="0">Inactive</option>
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

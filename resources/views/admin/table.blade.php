@extends('layouts.main')

@section('main-container')


{{-- add new employee modal start --}}
<div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Employee</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="add_employee_form" enctype="multipart/form-data">
        @csrf
        <div class="modal-body p-4 bg-light">
          <div class="row">
            <div class="col-lg">
              <label for="name"> Name</label>
              <input type="text" name="name" required class="form-control">
            </div>
          </div>
          <div class="my-2">
            <label for="price">Price</label>
            <input type="text" name="price" required class="form-control">
          </div>
          <div class="my-2">
            <label for="category">Short description</label>
            <input type="text" name="category" required class="form-control">
          </div>
          <div class="my-2">
            <label for="description">Long description</label>
            <input type="text" name="description" required class="form-control">
          </div>
          <div class="my-2">
            <label for="category_id">Category</label>
            <select class="form-control" id="category_id" required name="category_id">
                @foreach ($SubMenuItems as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
          </div>
          <div class="">
            <label><strong>Select Size :</strong></label><br/>
            <select  multiple="multiple"     name="cat[]">
              <option value="S">S</option>
              <option value="M">M</option>
              <option value="L">L</option>
              <option value="XL">XL</option>
              <option value="XXL">XXL</option>
              <option value="XXXL">XXXL</option>
            </select>
        </div>
          <div class="my-2">
            <label for="gallery">Gallery</label>
            <input type="file" name="gallery" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" id="add_employee_btn" class="btn btn-primary">Add Employee</button>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- add new employee modal end --}}


{{-- edit employee modal start --}}
<div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Employee</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="edit_employee_form" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="emp_id" id="emp_id">
        <input type="hidden" name="emp_avatar" id="emp_avatar">
        <div class="modal-body p-4 bg-light">
          <div class="row">
            <div class="col-lg">
                <label for="name"> Name</label>
                <input type="text" name="name" id="name" required class="form-control">
            </div>
            <div class="col-lg">
                <label for="price">Price</label>
                <input type="text" name="price" id="price" required class="form-control">
            </div>
          </div>
          <div class="my-2">
            <label for="category">Short description</label>
            <input type="text" name="category" id="category" required class="form-control">
          </div>
          <div class="my-2">
            <label for="description">Long description</label>
            <input type="text" name="description" id="description" required class="form-control">
          </div>
          <div class="my-2">
            <label for="category_id">Category</label>
            <select class="form-control" id="category_id" required name="category_id">
                @foreach ($SubMenuItems as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
          </div>
          <div class="my-2">
            <label for="gallery">Gallery</label>
            <input type="file" name="gallery" class="form-control" required>
          </div>
          <div class="mt-2" id="gallery">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" id="edit_employee_btn" class="btn btn-success">Update Employee</button>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- edit employee modal end --}}
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
<div class="container">
    <div class="row my-5">
      <div class="col-lg-12">
        <div class="card shadow">
          <div class="card-header bg-danger d-flex justify-content-between align-items-center">
            <h3 class="text-light">Manage Products</h3>
            <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addEmployeeModal"><i
                class="bi-plus-circle me-2"></i>Add New Product</button>
          </div>
          <div class="card-body" id="show_all_employees">
            <h1 class="text-center text-secondary my-5">Loading...</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
</div>
{{-- <script type="text/javascript">
    $(document).ready(function() {
        $('select').selectpicker();
    });
</script> --}}
@endsection

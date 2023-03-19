@extends('layouts.main')

@section('main-container')

<!-- BEGIN: Content-->
 <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-4 col-12 mb-2">
          <h3 class="content-header-title">Add Menu Items</h3>
        </div>
        <div class="content-header-right col-md-8 col-12">
          <div class="breadcrumbs-top float-md-right">
            <div class="breadcrumb-wrapper mr-1">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Menu Items</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="content-body"><!-- Basic form layout section start -->
<section id="basic-form-layouts">
  <div class="row match-height">
      <div class="col-md-6">
          <div class="card">
              <div class="card-header">
                  {{-- <h4 class="card-title" id="basic-layout-form">Menu Items</h4>
                  <a class="heading-elements-toggle">
                      <i class="la la-ellipsis-v font-medium-3"></i>
                  </a> --}}

              </div>
              <div class="card-content collapse show">
                  <div class="card-body">
                      <form class="form" action="{{route('menuitem.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                          <div class="form-body">

                              <div class="form-group">
                                  <label for="name">Menu Name</label>
                                  <input type="text" id="name" class="form-control" placeholder="Enter Menu Name" name="name">
                              </div>
                              <div class="row">
                                  {{-- <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="link">Link</label>
                                          <input type="text" id="link" class="form-control" placeholder="Enter menu link" name="link">
                                      </div>
                                  </div> --}}
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="status">Status</label>
                                          <select class="form-control" required name="status">
                                              <option>enable</option>
                                              <option>desable</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="form-actions">
                              <button type="button" class="btn btn-danger mr-1">
                                  <i class="ft-x"></i> Cancel
                              </button>
                              <button type="submit" class="btn btn-primary">
                                  <i class="la la-check-square-o"></i> Save
                              </button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>


</section>
<!-- // Basic form layout section end -->
      </div>
    </div>
  </div>
  <!-- END: Content-->
  @endsection

@extends('layouts.main')

@section('main-container')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">Order Table</h3>
                </div>
                <div class="content-header-right col-md-8 col-12">
                    <div class="breadcrumbs-top float-md-right">
                        <div class="breadcrumb-wrapper mr-1">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/students') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Tables</a>
                                </li>
                                <li class="breadcrumb-item active">Order Tables
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic Tables start -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Orders</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                {{-- <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="card-content collapse show">

                                <div class="table-responsive">



                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">ID</th>

                                                <th scope="col">Tracking No</th>
                                                <th scope="col">C - Name</th>
                                                <th scope="col">Number</th>
                                                <th scope="col">Status</th>
                                                {{-- <th scope="col">Payment Status</th> --}}
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                                @if($item->order_status == 1)
                                                <tr>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->tracking_no }}</td>
                                                    <td>{{ $item->users->name.' '.$item->users->lname }}</td>
                                                    <td>{{ $item->users->number }}</td>
                                                    <td>
                                                        @if($item->order_status == 0)
                                                        <div class="badge badge-danger">Pending</div>
                                                        @elseif ($item->order_status == 1)
                                                        <div class="badge badge-success">Success</div>
                                                        @elseif ($item->order_status == 2)
                                                        <div class="badge badge-danger">Rejected</div>
                                                        @endif
                                                    </td>
                                                    {{-- <td>
                                                        @if($item->payment_status == 0)
                                                        COD (Pending)
                                                        @elseif ($item->payment_status == 2)
                                                        Success (Razorpay)
                                                        @endif
                                                    </td> --}}
                                                    <td>
                                                        <a href="javascript:void(0);" data-id="{{$item->id}}" class="editbtn badge btn-warning" >Update Status</a>
                                                        <a href="{{url('order-view/'.$item->id)}}" class="badge btn-primary">View</a>
                                                    </td>
                                                </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="updatestatusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">


            <form action="{{ url('update-status') }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="stud_id" id="stud_id" />
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="">Tracking No</label>
                        <input type="text" name="tracking_no" id="tracking_no" readonly class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label>Order Status</label>
                            <select name="order_status" required class="form-control" id="order_status">
                                <option value="none" selected="" disabled="">Status</option>
                                <option value="0">Pending</option>
                                <option value="1">Success</option>
                                <option value="2">Rejected</option>
                            </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>



    <!-- END: Content-->
@endsection

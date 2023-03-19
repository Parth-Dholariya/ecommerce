@extends('layouts.main')

@section('main-container')

<!-- BEGIN: Content-->
 <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-4 col-12 mb-2">
          <h3 class="content-header-title">Add Sub Menu Items</h3>
        </div>
        <div class="content-header-right col-md-8 col-12">
          <div class="breadcrumbs-top float-md-right">
            <div class="breadcrumb-wrapper mr-1">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Basic Forms</a>
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
                  <h4 class="card-title" id="basic-layout-form">Sub Menu Item</h4>
                  <a class="heading-elements-toggle">
                      <i class="la la-ellipsis-v font-medium-3"></i>
                  </a>
                  <div class="heading-elements">
                      <ul class="list-inline mb-0">
                          <li>
                              <a data-action="collapse">
                                  <i class="ft-minus"></i>
                              </a>
                          </li>
                          <li>
                              <a data-action="reload">
                                  <i class="ft-rotate-cw"></i>
                              </a>
                          </li>
                          <li>
                              <a data-action="expand">
                                  <i class="ft-maximize"></i>
                              </a>
                          </li>
                          <li>
                              <a data-action="close">
                                  <i class="ft-x"></i>
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="card-content collapse show">
                  <div class="card-body">
                      <div class="card-text">
                          <p>This is the Adding sub category form section.</p>
                      </div>
                      <form class="form" action="{{route('submenuitem.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                          <div class="form-body">
                              <h4 class="form-section">
                                  <i class="ft-flag"></i> Sub Menu Item</h4>
                              <div class="form-group">
                                  <label for="name">Sub Menu Name</label>
                                  <input type="text" id="name" class="form-control" placeholder="Enter Menu Name" name="name">
                              </div>
                              <div class="row">
                                  {{-- <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="link">Sub Menu Link</label>
                                          <input type="text" id="link" class="form-control" placeholder="Enter menu link" name="link">
                                      </div>
                                  </div> --}}
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="status">Status</label>
                                          <select class="form-control" required name="status">
                                              <option value="enable">enable</option>
                                              <option value="'desable">desable</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>

                                <div class="form-group">
                                    <label for="status">Select Main Menu</label>
                                    <select class="form-control" required name="menu_item_id">
                                        @foreach ($menuItems as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
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

      {{-- <div class="col-md-6">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title" id="basic-layout-colored-form-control">Form with Bordered Controls</h4>
                  <a class="heading-elements-toggle">
                      <i class="la la-ellipsis-v font-medium-3"></i>
                  </a>
                  <div class="heading-elements">
                      <ul class="list-inline mb-0">
                          <li>
                              <a data-action="collapse">
                                  <i class="ft-minus"></i>
                              </a>
                          </li>
                          <li>
                              <a data-action="reload">
                                  <i class="ft-rotate-cw"></i>
                              </a>
                          </li>
                          <li>
                              <a data-action="expand">
                                  <i class="ft-maximize"></i>
                              </a>
                          </li>
                          <li>
                              <a data-action="close">
                                  <i class="ft-x"></i>
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="card-content collapse show">
                  <div class="card-body">

                      <div class="card-text">
                          <p>You can always change the border color of the form controls using
                              <code>border-*</code> class.</p>
                      </div>

                      <form class="form">
                          <div class="form-body">

                              <h4 class="form-section">
                                  <i class="ft-briefcase"></i> Contact Details</h4>
                              <div class="form-group">
                                  <label for="contactinput5">Name</label>
                                  <input class="form-control border-primary" type="text" placeholder="Name" id="contactinput5">
                              </div>

                              <div class="form-group">
                                  <label for="contactinput5">Email</label>
                                  <input class="form-control border-primary" type="email" placeholder="Email" id="contactemail5">
                              </div>

                              <div class="form-group">
                                  <label for="contactinput6">Website</label>
                                  <input class="form-control border-primary" type="url" placeholder="http://" id="contactinput6">
                              </div>

                              <div class="form-group">
                                  <label>Contact Number</label>
                                  <input class="form-control border-primary" id="contactinput7" type="tel" placeholder="Contact Number">
                              </div>

                          </div>

                          <div class="form-actions right">
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
  </div>

  <div class="row match-height">
      <div class="col-md-6">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title" id="basic-layout-icons">Form with Icon control</h4>
                  <a class="heading-elements-toggle">
                      <i class="la la-ellipsis-v font-medium-3"></i>
                  </a>
                  <div class="heading-elements">
                      <ul class="list-inline mb-0">
                          <li>
                              <a data-action="collapse">
                                  <i class="ft-minus"></i>
                              </a>
                          </li>
                          <li>
                              <a data-action="reload">
                                  <i class="ft-rotate-cw"></i>
                              </a>
                          </li>
                          <li>
                              <a data-action="expand">
                                  <i class="ft-maximize"></i>
                              </a>
                          </li>
                          <li>
                              <a data-action="close">
                                  <i class="ft-x"></i>
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="card-content collapse show">
                  <div class="card-body">

                      <div class="card-text">
                          <p>This form shows the use of icons with form controls. Define the position of the icon using
                              <code>has-icon-left</code> or
                              <code>has-icon-right</code> class. Use
                              <code>icon-*</code> class to define the icon for the form control. See Icons sections for the list of icons you can use. </p>
                      </div>

                      <form class="form">
                          <div class="form-body">
                                  <div class="row">
                                          <div class="col-md-6">
                                                  <div class="form-group">
                                                          <label for="timesheetinput1">Employee Name</label>
                                                          <div class="position-relative has-icon-left">
                                                              <input type="text" id="timesheetinput1" class="form-control" placeholder="employee name" name="employeename">
                                                              <div class="form-control-position">
                                                                  <i class="ft-user"></i>
                                                              </div>
                                                          </div>
                                                      </div>
                                          </div>
                                          <div class="col-md-6">
                                                  <div class="form-group">
                                                          <label for="timesheetinput2">Project Name</label>
                                                          <div class="position-relative has-icon-left">
                                                              <input type="text" id="timesheetinput2" class="form-control" placeholder="project name" name="projectname">
                                                              <div class="form-control-position">
                                                                  <i class="la la-briefcase"></i>
                                                              </div>
                                                          </div>
                                                      </div>
                                          </div>
                                      </div>




                              <div class="form-group">
                                  <label for="timesheetinput3">Date</label>
                                  <div class="position-relative has-icon-left">
                                      <input type="date" id="timesheetinput3" class="form-control" name="date">
                                      <div class="form-control-position">
                                          <i class="ft-message-square"></i>
                                      </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label>Rate Per Hour</label>
                                  <div class="input-group">
                                      <div class="input-group-prepend">
                                          <span class="input-group-text">$</span>
                                      </div>
                                      <input type="text" class="form-control" placeholder="Rate Per Hour" aria-label="Amount (to the nearest dollar)" name="rateperhour">
                                      <div class="input-group-append">
                                          <span class="input-group-text">.00</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="timesheetinput5">Start Time</label>
                                          <div class="position-relative has-icon-left">
                                              <input type="time" id="timesheetinput5" class="form-control" name="starttime">
                                              <div class="form-control-position">
                                                  <i class="ft-clock"></i>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="timesheetinput6">End Time</label>
                                          <div class="position-relative has-icon-left">
                                              <input type="time" id="timesheetinput6" class="form-control" name="endtime">
                                              <div class="form-control-position">
                                                  <i class="ft-clock"></i>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                          </div>

                          <div class="form-actions right">
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

      <div class="col-md-6">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title" id="basic-layout-tooltip">Form with Tooltip</h4>
                  <a class="heading-elements-toggle">
                      <i class="la la-ellipsis-v font-medium-3"></i>
                  </a>
                  <div class="heading-elements">
                      <ul class="list-inline mb-0">
                          <li>
                              <a data-action="collapse">
                                  <i class="ft-minus"></i>
                              </a>
                          </li>
                          <li>
                              <a data-action="reload">
                                  <i class="ft-rotate-cw"></i>
                              </a>
                          </li>
                          <li>
                              <a data-action="expand">
                                  <i class="ft-maximize"></i>
                              </a>
                          </li>
                          <li>
                              <a data-action="close">
                                  <i class="ft-x"></i>
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="card-content collapse show">
                  <div class="card-body">

                      <div class="card-text">
                          <p>This form shows tooltips on hover to provide useful information while user is filling the form. Use data attributes
                              like toggle
                              <code>data-toggle</code>, trigger
                              <code>data-trigger</code>, placement
                              <code>data-placement</code>, title
                              <code>data-title</code> to show tooltips on form controls.</p>
                      </div>

                      <form class="form">
                          <div class="form-body">

                              <div class="form-group">
                                  <label for="projectinput1">Issue Title</label>
                                  <input type="text" id="projectinput1" class="form-control" placeholder="issue title" name="issuetitle" data-toggle="tooltip"
                                   data-trigger="hover" data-placement="top" data-title="Issue Title">
                              </div>

                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="projectinput3">Date Opened</label>
                                          <input type="date" id="projectinput3" class="form-control" name="dateopened" data-toggle="tooltip" data-trigger="hover" data-placement="top"
                                           data-title="Date Opened">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="projectinput5">Priority</label>
                                          <select id="projectinput5" name="priority" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top"
                                           data-title="Priority">
                                              <option value="low">Low</option>
                                              <option value="medium">Medium</option>
                                              <option value="high">High</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label for="projectinput8">Comments</label>
                                  <textarea id="projectinput8" rows="5" class="form-control" name="comments" placeholder="comments" data-toggle="tooltip" data-trigger="hover"
                                   data-placement="top" data-title="Comments"></textarea>
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
  </div>


  <div class="row match-height">
      <div class="col-md-6">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title" id="basic-layout-square-controls">Square Style Form Control</h4>
                  <a class="heading-elements-toggle">
                      <i class="la la-ellipsis-v font-medium-3"></i>
                  </a>
                  <div class="heading-elements">
                      <ul class="list-inline mb-0">
                          <li>
                              <a data-action="collapse">
                                  <i class="ft-minus"></i>
                              </a>
                          </li>
                          <li>
                              <a data-action="reload">
                                  <i class="ft-rotate-cw"></i>
                              </a>
                          </li>
                          <li>
                              <a data-action="expand">
                                  <i class="ft-maximize"></i>
                              </a>
                          </li>
                          <li>
                              <a data-action="close">
                                  <i class="ft-x"></i>
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="card-content collapse show">
                  <div class="card-body">

                      <div class="card-text">
                          <p>This is another variation to the default form control styling. In this example all the form controls has square styling.
                              To apply square style add class
                              <code>square</code> to any form control.</p>
                      </div>

                      <form class="form">
                          <div class="form-body">

                              <div class="form-group">
                                  <label for="donationinput1">Full Name</label>
                                  <input type="text" id="donationinput1" class="form-control square" placeholder="name" name="fullname">
                              </div>

                              <div class="form-group">
                                  <label for="donationinput2">Email</label>
                                  <input type="email" id="donationinput2" class="form-control square" placeholder="email" name="email">
                              </div>

                              <div class="form-group">
                                  <label for="donationinput3">Contact Number</label>
                                  <input type="tel" id="donationinput3" class="form-control square" name="contact">
                              </div>

                              <div class="form-group">
                                  <label for="donationinput4">Dontaion Type</label>
                                  <input type="text" id="donationinput4" class="form-control square" placeholder="type of donation" name="donationtype">
                              </div>

                              <div class="form-group">
                                  <label>Amount</label>
                                  <div class="input-group">
                                      <div class="input-group-prepend">
                                          <span class="input-group-text">$</span>
                                      </div>
                                      <input type="text" class="form-control square" placeholder="amount" aria-label="Amount (to the nearest dollar)" name="amount">
                                      <div class="input-group-append">
                                          <span class="input-group-text">.00</span>
                                      </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label for="donationinput7">Comments</label>
                                  <textarea id="donationinput7" rows="5" class="form-control square" name="comments" placeholder="comments"></textarea>
                              </div>

                          </div>

                          <div class="form-actions right">
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
      <div class="col-md-6">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title" id="basic-layout-round-controls">Round Style Form Control</h4>
                  <a class="heading-elements-toggle">
                      <i class="la la-ellipsis-v font-medium-3"></i>
                  </a>
                  <div class="heading-elements">
                      <ul class="list-inline mb-0">
                          <li>
                              <a data-action="collapse">
                                  <i class="ft-minus"></i>
                              </a>
                          </li>
                          <li>
                              <a data-action="reload">
                                  <i class="ft-rotate-cw"></i>
                              </a>
                          </li>
                          <li>
                              <a data-action="expand">
                                  <i class="ft-maximize"></i>
                              </a>
                          </li>
                          <li>
                              <a data-action="close">
                                  <i class="ft-x"></i>
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="card-content collapse show">
                  <div class="card-body">

                      <div class="card-text">
                          <p>This is a variation to the default form control styling. In this example all the form controls has round styling.
                              To apply round style add class
                              <code>round</code> to any form control.</p>
                      </div>

                      <form class="form">
                          <div class="form-body">

                              <div class="form-group">
                                  <label for="complaintinput1">Company Name</label>
                                  <input type="text" id="complaintinput1" class="form-control round" placeholder="company name" name="companyname">
                              </div>

                              <div class="form-group">
                                  <label for="complaintinput2">Employee Name</label>
                                  <input type="text" id="complaintinput2" class="form-control round" placeholder="employee name" name="employeename">
                              </div>

                              <div class="form-group">
                                  <label for="complaintinput3">Date of Complaint</label>
                                  <input type="date" id="complaintinput3" class="form-control round" name="complaintdate">
                              </div>


                              <div class="form-group">
                                  <label for="complaintinput4">Supervisor's Name</label>
                                  <input type="text" id="complaintinput4" class="form-control round" placeholder="supervisor name" name="supervisorname">
                              </div>


                              <div class="form-group">
                                  <label for="complaintinput5">Complaint Details</label>
                                  <textarea id="complaintinput5" rows="5" class="form-control round" name="complaintdetails" placeholder="details"></textarea>
                              </div>


                              <div class="form-group">
                                  <label for="complaintinput6">Signature</label>
                                  <input type="text" id="complaintinput6" class="form-control round" placeholder="signature" name="signature">
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
  </div>


  <div class="row match-height">
      <div class="col-lg-6 col-md-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title" id="basic-layout-form-center">Center Aligned Form</h4>
                  <a class="heading-elements-toggle">
                      <i class="la la-ellipsis-v font-medium-3"></i>
                  </a>
                  <div class="heading-elements">
                      <ul class="list-inline mb-0">
                          <li>
                              <a data-action="collapse">
                                  <i class="ft-minus"></i>
                              </a>
                          </li>
                          <li>
                              <a data-action="reload">
                                  <i class="ft-rotate-cw"></i>
                              </a>
                          </li>
                          <li>
                              <a data-action="expand">
                                  <i class="ft-maximize"></i>
                              </a>
                          </li>
                          <li>
                              <a data-action="close">
                                  <i class="ft-x"></i>
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="card-content collapse show">
                  <div class="card-body">

                      <div class="card-text">
                          <p>This example shows a way to center your form in the card. Here we have used
                              <code>row justify-content-center</code> classes to center the form in a full width card. User can always change those classes according to width and offset
                              requirements. This example also uses form action buttons in the center bottom position of the card.</p>
                      </div>

                      <form class="form">
                          <div class="row justify-content-center">
                              <div class="col-8">
                                  <div class="form-body">
                                      <div class="form-group">
                                          <label for="eventRegInput1">Full Name</label>
                                          <input type="text" id="eventRegInput1" class="form-control" placeholder="name" name="fullname">
                                      </div>

                                      <div class="form-group">
                                          <label for="eventRegInput2">Address</label>
                                          <input type="text" id="eventRegInput2" class="form-control" placeholder="address" name="address">
                                      </div>

                                      <div class="form-group">
                                          <label for="eventRegInput3">City</label>
                                          <input type="text" id="eventRegInput3" class="form-control" placeholder="city" name="city">
                                      </div>

                                      <div class="form-group">
                                          <label for="eventRegInput4">State</label>
                                          <input type="text" id="eventRegInput4" class="form-control" placeholder="state" name="state">
                                      </div>

                                      <div class="form-group">
                                          <label for="eventRegInput5">Contact Number</label>
                                          <input type="tel" id="eventRegInput5" class="form-control" name="contact" placeholder="contact number">
                                      </div>

                                      <div class="form-group">
                                          <label for="eventRegInput5">Membership Number</label>
                                          <input type="text" id="eventRegInput6" class="form-control" name="membership" placeholder="membership number">
                                      </div>

                                  </div>
                              </div>
                          </div>

                          <div class="form-actions center">
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

      <div class="col-lg-6 col-md-12">
          <div class="row justify-content-center">
              <div class="col-10 ">
                  <div class="card">
                      <div class="card-header">
                          <h4 class="card-title" id="basic-layout-card-center">Center Aligned Card With Form</h4>
                          <a class="heading-elements-toggle">
                              <i class="la la-ellipsis-v font-medium-3"></i>
                          </a>
                          <div class="heading-elements">
                              <ul class="list-inline mb-0">
                                  <li>
                                      <a data-action="collapse">
                                          <i class="ft-minus"></i>
                                      </a>
                                  </li>
                                  <li>
                                      <a data-action="reload">
                                          <i class="ft-rotate-cw"></i>
                                      </a>
                                  </li>
                                  <li>
                                      <a data-action="expand">
                                          <i class="ft-maximize"></i>
                                      </a>
                                  </li>
                                  <li>
                                      <a data-action="close">
                                          <i class="ft-x"></i>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div class="card-content collapse show">
                          <div class="card-body">
                              <div class="card-text">
                                  <p>This example shows a ways to center your card with form. Here we have used
                                      <code>row justify-content-center</code> classes to center the card as its not full width. User can always change those classes according to width and offset
                                      requirements. This example also uses form action buttons in the center bottom position of the card.</p>
                              </div>
                              <form class="form">
                                  <div class="form-body">

                                      <div class="form-group">
                                          <label for="centerInput1">Full Name</label>
                                          <input type="text" id="centerInput1" class="form-control" placeholder="name" name="fullname">
                                      </div>

                                      <div class="form-group">
                                          <label for="centerInput2">Address</label>
                                          <input type="text" id="centerInput2" class="form-control" placeholder="address" name="address">
                                      </div>

                                      <div class="form-group">
                                          <label for="centerInput3">City</label>
                                          <input type="text" id="centerInput3" class="form-control" placeholder="city" name="city">
                                      </div>

                                      <div class="form-group">
                                          <label for="centerInput4">State</label>
                                          <input type="text" id="centerInput4" class="form-control" placeholder="state" name="state">
                                      </div>

                                      <div class="form-group">
                                          <label for="centerInput5">Contact Number</label>
                                          <input type="tel" id="centerInput5" class="form-control" name="contact" placeholder="contact number">
                                      </div>

                                      <div class="form-group">
                                          <label for="centerInput6">Membership Number</label>
                                          <input type="text" id="centerInput6" class="form-control" name="membership" placeholder="membership number">
                                      </div>
                                  </div>

                                  <div class="form-actions center">
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
          </div>
      </div>
  </div> --}}
</section>
<!-- // Basic form layout section end -->
      </div>
    </div>
  </div>
  <!-- END: Content-->
  @endsection

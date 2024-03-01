@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Map')

@section('content')
<h1>Maps</h1>
<div class="container">

  <div class="row">

    <div class="col-lg-6">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15432.64250758875!2d121.02204164999999!3d14.759978850000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1709229136965!5m2!1sen!2sph"
      width="1345" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

  </div>
<br>
<br>
  <div class="row">

  <div class="col-lg-4">

    <div class="card">
        <div class="card-body">
          <h1 class="card-title">Driver</h1>
            <div class="row">
                <div class="col-lg-6">
                    <h1>driver1</h1>
                    <a class="btn btn-primary" data-bs-toggle="modal" href="#driver1" role="button">View Driver</a>
                </div>
            </div>
        </div>
    </div>

  </div>


  <div class="col-lg-4">
    <div class="card">
        <div class="card-body">
          <h1 class="card-title">Driver</h1>
            <div class="row">
                <div class="col-lg-6">
                    <h1>driver2</h1>
                    <a class="btn btn-primary" data-bs-toggle="modal" href="#driver2" role="button">View Driver</a>
                </div>
            </div>
        </div>
    </div>
  </div>


  <div class="col-lg-4">
    <div class="card">
        <div class="card-body">
          <h1 class="card-title">Driver</h1>
            <div class="row">
                <div class="col-lg-6">
                    <h1>driver3</h1>
                    <a class="btn btn-primary" data-bs-toggle="modal" href="#driver3" role="button">View Driver</a>
                </div>
            </div>
        </div>
    </div>
  </div>

  </div>


</div>

<!-- MODAL -->

<div class="modal fade" id="driver1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Driver 1</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Driver Information

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Send message</button> -->
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="driver2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Driver 2</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Driver Information
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Send message</button> -->
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="driver3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Driver 3</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Driver Information
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Send message</button> -->
      </div>
    </div>
  </div>
</div>
@endsection

@extends('adminsection.main')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="mb-4">
        <h1 class="fs-3 mb-1">Dashboard</h1>
        <p class="text-muted">Welcome to your ClinicFlow Admin Dashboard</p>
      </div>
    </div>
  </div>

  <div class="row g-3 mb-4">
    <!-- Card 1 -->
    <div class="col-lg-3 col-md-6 col-12">
      <div class="card p-4 bg-primary bg-opacity-10 border border-primary border-opacity-25 rounded-3">
        <div class="d-flex gap-3 align-items-center">
          <div class="icon-shape icon-md bg-primary text-white rounded-2 p-3 d-flex align-items-center justify-content-center">
            <i class="ti ti-report-analytics fs-4"></i>
          </div>
          <div>
            <h2 class="mb-1 fs-6 text-muted">Total Sales</h2>
            <h3 class="fw-bold mb-0">$25,000</h3>
            <p class="text-primary mb-0 small fw-semibold">+5% since last month</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-lg-3 col-md-6 col-12">
      <div class="card p-4 bg-success bg-opacity-10 border border-success border-opacity-25 rounded-3">
        <div class="d-flex gap-3 align-items-center">
          <div class="icon-shape icon-md bg-success text-white rounded-2 p-3 d-flex align-items-center justify-content-center">
            <i class="ti ti-shopping-cart fs-4"></i>
          </div>
          <div>
            <h2 class="mb-1 fs-6 text-muted">Total Orders</h2>
            <h3 class="fw-bold mb-0">1,450</h3>
            <p class="text-success mb-0 small fw-semibold">+12% since last month</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-lg-3 col-md-6 col-12">
      <div class="card p-4 bg-info bg-opacity-10 border border-info border-opacity-25 rounded-3">
        <div class="d-flex gap-3 align-items-center">
          <div class="icon-shape icon-md bg-info text-white rounded-2 p-3 d-flex align-items-center justify-content-center">
            <i class="ti ti-users fs-4"></i>
          </div>
          <div>
            <h2 class="mb-1 fs-6 text-muted">Active Patients</h2>
            <h3 class="fw-bold mb-0">890</h3>
            <p class="text-info mb-0 small fw-semibold">+8% new this week</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col-lg-3 col-md-6 col-12">
      <div class="card p-4 bg-warning bg-opacity-10 border border-warning border-opacity-25 rounded-3">
        <div class="d-flex gap-3 align-items-center">
          <div class="icon-shape icon-md bg-warning text-white rounded-2 p-3 d-flex align-items-center justify-content-center">
            <i class="ti ti-clock fs-4"></i>
          </div>
          <div>
            <h2 class="mb-1 fs-6 text-muted">Appointments</h2>
            <h3 class="fw-bold mb-0">34</h3>
            <p class="text-warning mb-0 small fw-semibold">Scheduled today</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
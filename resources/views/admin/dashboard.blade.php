@extends('admin.layouts.master')

@push('style')
  <link rel="stylesheet" href="{{ asset("admin/charts/apex-charts.css") }}">
@endpush

@section('title') {{ trans('sentence.dashboard')}} @endsection

@section('content')
<div class="row">
<!-- Customer Ratings -->
<div class="col-md-6 col-lg-4 mb-4">
<div class="card h-100">
<div class="card-header d-flex align-items-center justify-content-between">
  <h5 class="card-title m-0 me-2">Customer Ratings</h5>
  <div class="dropdown">
    <button class="btn p-0" type="button" id="customerRatings" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="bx bx-dots-vertical-rounded"></i>
    </button>
    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="customerRatings">
      <a class="dropdown-item" href="javascript:void(0);">Featured Ratings</a>
      <a class="dropdown-item" href="javascript:void(0);">Based on Task</a>
      <a class="dropdown-item" href="javascript:void(0);">See All</a>
    </div>
  </div>
</div>
<div class="card-body pb-0">
  <div class="d-flex align-items-center gap-3 mb-3">
    <h1 class="display-3 mb-0">4.0</h1>
    <div class="ratings">
      <i class="bx bxs-star bx-sm text-warning"></i>
      <i class="bx bxs-star bx-sm text-warning"></i>
      <i class="bx bxs-star bx-sm text-warning"></i>
      <i class="bx bxs-star bx-sm text-warning"></i>
      <i class="bx bxs-star bx-sm text-lighter"></i>
    </div>
  </div>
  <div class="d-flex align-items-center">
    <span class="badge bg-label-primary me-3">+5.0</span>
    <span>Points from last month</span>
  </div>
</div>
<div id="customerRatingsChart"></div>
</div>
</div>
<!--/ Customer Ratings -->
<!-- Overview & Sales Activity -->
<div class="col-md-6 col-lg-4 mb-4">
<div class="card h-100">
<div class="card-header">
  <h5 class="card-title mb-0">Overview & Sales Activity</h5>
  <small class="card-subtitle">Check out each column for more details</small>
</div>
<div id="salesActivityChart"></div>
</div>
</div>
<!--/ Overview & Sales Activity -->
<div class="col-12 col-md-12 col-lg-4">
<div class="row">
<div class="col-sm-6 col-md-3 col-lg-6 mb-4">
  <div class="card">
    <div class="card-body pb-0">
      <span class="d-block fw-semibold mb-1">Sessions</span>
      <h3 class="card-title mb-2">2,845</h3>
    </div>
    <div id="sessionsChart" class="mb-3"></div>
  </div>
</div>
<div class="col-sm-6 col-md-3 col-lg-6 mb-4">
  <div class="card">
    <div class="card-body">
      <div class="card-title d-flex align-items-start justify-content-between mb-4">
        <div class="avatar flex-shrink-0">
          <img src="{{ asset('admin/assets/img/cube-secondary.png') }}" alt="cube" class="rounded">
        </div>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="cardOpt2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt2">
            <a class="dropdown-item" href="javascript:void(0);">View More</a>
            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
          </div>
        </div>
      </div>
      <span class="fw-semibold d-block mb-1">Order</span>
      <h4 class="card-title mb-2">$1,286</h4>
      <small class="text-danger fw-semibold"><i class='bx bx-down-arrow-alt'></i> -13.24%</small>
    </div>
  </div>
</div>
<div class="col-12 col-md-6 col-lg-12 mb-4">
  <div class="card">
    <div class="card-body">
      <div class="d-flex justify-content-between">
        <div class="d-flex flex-column">
          <div class="card-title mb-auto">
            <h5 class="mb-0">Generated Leads</h5>
            <small>Monthly Report</small>
          </div>
          <div class="chart-statistics">
            <h3 class="card-title mb-1">4,230</h3>
            <small class="text-success text-nowrap fw-semibold"><i class='bx bx-up-arrow-alt'></i> +12.8%</small>
          </div>
        </div>
        <div id="leadsReportChart"></div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<div class="row">



<!-- Earning Reports -->
<div class="col-md-6 col-lg-4 col-xl-4 mb-4">
<div class="card h-100">
<div class="card-header d-flex justify-content-between">
  <div class="card-title mb-0">
    <h5 class="m-0 me-2">Earning Reports</h5>
    <small class="text-muted">Weekly Earnings Overview</small>
  </div>
  <div class="dropdown">
    <button class="btn p-0" type="button" id="earningReports" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="bx bx-dots-vertical-rounded"></i>
    </button>
    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReports">
      <a class="dropdown-item" href="javascript:void(0);">Select All</a>
      <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
      <a class="dropdown-item" href="javascript:void(0);">Share</a>
    </div>
  </div>
</div>
<div class="card-body pb-0">
  <ul class="p-0 m-0">
    <li class="d-flex mb-4 pb-1">
      <div class="avatar flex-shrink-0 me-3">
        <span class="avatar-initial rounded bg-label-primary"><i class='bx bx-trending-up'></i></span>
      </div>
      <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
        <div class="me-2">
          <h6 class="mb-0">Net Profit</h6>
          <small class="text-muted">12.4k Sales</small>
        </div>
        <div class="user-progress">
          <small class="fw-semibold">$1,619</small><i class='bx bx-chevron-up text-success ms-1'></i> <small class="text-muted">18.6%</small>
        </div>
      </div>
    </li>
    <li class="d-flex mb-4 pb-1">
      <div class="avatar flex-shrink-0 me-3">
        <span class="avatar-initial rounded bg-label-success"><i class='bx bx-dollar'></i></span>
      </div>
      <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
        <div class="me-2">
          <h6 class="mb-0">Total Income</h6>
          <small class="text-muted">Sales, Affiliation</small>
        </div>
        <div class="user-progress">
          <small class="fw-semibold">$3,571</small><i class='bx bx-chevron-up text-success ms-1'></i> <small class="text-muted">39.6%</small>
        </div>
      </div>
    </li>
    <li class="d-flex mb-4 pb-1">
      <div class="avatar flex-shrink-0 me-3">
        <span class="avatar-initial rounded bg-label-secondary"><i class='bx bx-credit-card'></i></span>
      </div>
      <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
        <div class="me-2">
          <h6 class="mb-0">Total Expenses</h6>
          <small class="text-muted">ADVT, Marketing</small>
        </div>
        <div class="user-progress">
          <small class="fw-semibold">$430</small><i class='bx bx-chevron-up text-success ms-1'></i> <small class="text-muted">52.8%</small>
        </div>
      </div>
    </li>
  </ul>
  <div id="reportBarChart"></div>
</div>
</div>
</div>
<!--/ Earning Reports -->

<!-- Sales Analytics -->
<div class="col-md-6 col-lg-4 mb-4">
<div class="card h-100">
<div class="card-header d-flex align-items-start justify-content-between">
  <div>
    <h5 class="card-title m-0 me-2 mb-2">Sales Analytics</h5>
    <span class="badge bg-label-success me-1">+42.6%</span> <span>Than last year</span>
  </div>
  <div class="dropdown">
    <button class="btn btn-sm btn-label-primary dropdown-toggle" type="button" id="salesAnalyticsId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      2022
    </button>
    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesAnalyticsId">
      <a class="dropdown-item" href="javascript:void(0);">2021</a>
      <a class="dropdown-item" href="javascript:void(0);">2020</a>
      <a class="dropdown-item" href="javascript:void(0);">2019</a>
    </div>
  </div>
</div>
<div class="card-body pb-0">
  <div id="salesAnalyticsChart"></div>
</div>
</div>
</div>
<!--/ Sales Analytics -->

<!-- Sales Stats -->
<div class="col-md-6 col-lg-4 mb-4">
<div class="card h-100">
<div class="card-header d-flex align-items-center justify-content-between mb-30">
  <h5 class="card-title m-0 me-2">Sales Stats</h5>
  <div class="dropdown">
    <button class="btn p-0" type="button" id="salesStatsID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="bx bx-dots-vertical-rounded"></i>
    </button>
    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesStatsID">
      <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
      <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
      <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
    </div>
  </div>
</div>
<div id="salesStats"></div>
<div class="card-body">
  <div class="d-flex justify-content-around">
    <div class="d-flex align-items-center lh-1 mb-3 mb-sm-0">
      <span class="badge badge-dot bg-success me-2"></span> Conversion Ratio
    </div>
    <div class="d-flex align-items-center lh-1 mb-3 mb-sm-0">
      <span class="badge badge-dot bg-label-secondary me-2"></span> Total requirements
    </div>
  </div>
</div>
</div>
</div>
<!--/ Sales Stats -->
@endsection

@push('script')
  <script src="{{ asset("admin/charts/apexcharts.js") }}"></script>
  <script src="{{ asset("admin/charts/dashboards-crm.js") }}"></script>
@endpush
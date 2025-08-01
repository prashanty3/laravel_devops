@extends('admin.dashboard')

@section('content')

@section('title', 'View All Bookings')
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Bookings</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Taxi Services</li>
                                <li class="breadcrumb-item active" aria-current="page">Bookings</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="right-title">
                    <div class="d-flex mt-10 justify-content-end">
                        <div class="d-lg-flex mr-20 ml-10 d-none">
                            <div class="chart-text mr-10">
                                <h6 class="mb-0"><small>THIS MONTH</small></h6>
                            </div>
                        </div>
                        <div class="d-lg-flex mr-20 ml-10 d-none">
                            <div class="chart-text mr-10">
                                <h6 class="mb-0"><small>TOTAL</small></h6>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="bookingTable" class="table table-hover no-wrap booking-table" data-page-size="10">
                                    <thead>
                                        <tr>
                                            <th>Booking ID</th>
                                            <th>Customer</th>
                                            <th>Car Type</th>
                                            <th>Pickup Location</th>
                                            <th>Dropoff Location</th>
                                            <th>Pickup Time</th>
                                            <th>Phone</th>
                                            <th>Occasion</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($bookings as $key => $booking)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $booking->user->name ?? 'Guest' }}</td>
                                            <td>
                                                @if($booking->car_type == 'luxury')
                                                    <span class="badge badge-pill badge-primary">Luxury</span>
                                                @else
                                                    <span class="badge badge-pill badge-info">Standard</span>
                                                @endif
                                            </td>
                                            <td>{{ $booking->pickup_location }}</td>
                                            <td>{{ $booking->dropoff_location }}</td>
                                            <td>{{ $booking->pickup_time->format('M d, Y H:i') }}</td>
                                            <td>{{ $booking->phone }}</td>
                                            <td>{{ $booking->occasion ?? '-' }}</td>
                                            <td>
                                                @if($booking->status == 'completed')
                                                    <span class="badge badge-pill badge-success">Completed</span>
                                                @elseif($booking->status == 'cancelled')
                                                    <span class="badge badge-pill badge-danger">Cancelled</span>
                                                @else
                                                    <span class="badge badge-pill badge-warning">Pending</span>
                                                @endif
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.bookings.destroy', $booking->id) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-danger bg-transparent border-0" data-original-title="Delete" data-toggle="tooltip">
                                                        <i class="ti-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
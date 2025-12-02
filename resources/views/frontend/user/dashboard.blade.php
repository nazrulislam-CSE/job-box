@extends('layouts.frontend', [$pageTitle => 'User Dashboard'])

@section('content')

<section class="section-b-space pt-5">
    <div class="heading-banner">
        <div class="custom-container container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4>{{ $pageTitle }}</h4>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb float-end">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active text-primary">
                            {{ $pageTitle }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===============================
        USER DASHBOARD START
================================== -->
<section class="dashboard-section py-5">
    <div class="container">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-lg-3">
                <div class="card shadow-lg border-0">
                    <div class="card-body text-center py-4">
                        <img src="https://via.placeholder.com/90" class="rounded-circle mb-3" alt="User">
                        <h5 class="mb-1">{{ Auth::user()->name ?? '' }}</h5>
                        <p class="text-muted small mb-3">{{ Auth::user()->email ?? '' }}</p>

                        <hr>

                        <ul class="nav flex-column text-start dashboard-menu">
                            <li class="nav-item mb-2">
                                <a class="nav-link active" href="#">
                                    <i class="bi bi-speedometer2 me-2"></i> Dashboard
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a class="nav-link" href="#">
                                    <i class="bi bi-person me-2"></i> Profile Settings
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a class="nav-link" href="#">
                                    <i class="bi bi-bag me-2"></i> My Orders
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a class="nav-link" href="#">
                                    <i class="bi bi-heart me-2"></i> Wishlist
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a class="nav-link" href="#">
                                    <i class="bi bi-gear me-2"></i> Account Settings
                                </a>
                            </li>
                            <li class="nav-item mt-3">
                                <a class="btn btn-danger w-100" href="{{ route('user.logout') }}">
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-lg-9">
                <div class="row g-4">

                    <!-- Card 1 -->
                    <div class="col-md-4">
                        <div class="card shadow-lg border-0 p-3 text-center dashboard-box">
                            <i class="bi bi-bag-check fs-1 text-primary mb-3"></i>
                            <h4>24</h4>
                            <p class="text-muted mb-0">Total Orders</p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-4">
                        <div class="card shadow-lg border-0 p-3 text-center dashboard-box">
                            <i class="bi bi-heart fs-1 text-danger mb-3"></i>
                            <h4>10</h4>
                            <p class="text-muted mb-0">Wishlist Items</p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-4">
                        <div class="card shadow-lg border-0 p-3 text-center dashboard-box">
                            <i class="bi bi-chat-left-text fs-1 text-success mb-3"></i>
                            <h4>5</h4>
                            <p class="text-muted mb-0">Support Tickets</p>
                        </div>
                    </div>

                </div>

                <!-- Recent Orders Table -->
                <div class="card shadow-lg border-0 mt-4">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">Recent Orders</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#1001</td>
                                    <td>2025-01-15</td>
                                    <td><span class="badge bg-success">Delivered</span></td>
                                    <td>$120.00</td>
                                </tr>
                                <tr>
                                    <td>#1002</td>
                                    <td>2025-01-20</td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td>$80.00</td>
                                </tr>
                                <tr>
                                    <td>#1003</td>
                                    <td>2025-02-01</td>
                                    <td><span class="badge bg-danger">Canceled</span></td>
                                    <td>$45.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection

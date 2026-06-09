@extends('layouts.app')

@section('content')

<div class="dashboard-header mb-4">

<div>

    <h2 class="dashboard-title">
        <i class="fa-solid fa-chart-line"></i>
        Dashboard Rental PS
    </h2>

    <p class="dashboard-subtitle">
        Monitoring aktivitas rental PlayStation secara real-time.
    </p>

</div>

</div>

<div class="row g-4">

<div class="col-lg-3 col-md-6">

    <div class="stat-card stat-blue">

        <div class="stat-icon">
            <i class="fa-solid fa-users"></i>
        </div>

        <div>

            <div class="stat-label">
                Total Pelanggan
            </div>

            <div class="stat-value">
                {{ $pelanggan }}
            </div>

        </div>

    </div>

</div>

<div class="col-lg-3 col-md-6">

    <div class="stat-card stat-purple">

        <div class="stat-icon">
            <i class="fa-solid fa-gamepad"></i>
        </div>

        <div>

            <div class="stat-label">
                Total PlayStation
            </div>

            <div class="stat-value">
                {{ $playstations }}
            </div>

        </div>

    </div>

</div>

<div class="col-lg-3 col-md-6">

    <div class="stat-card stat-green">

        <div class="stat-icon">
            <i class="fa-solid fa-money-bill-wave"></i>
        </div>

        <div>

            <div class="stat-label">
                Pendapatan
            </div>

            <div class="stat-value">
                Rp {{ number_format($pendapatan,0,',','.') }}
            </div>

        </div>

    </div>

</div>

<div class="col-lg-3 col-md-6">

    <div class="stat-card stat-orange">

        <div class="stat-icon">
            <i class="fa-solid fa-tv"></i>
        </div>

        <div>

            <div class="stat-label">
                Sedang Dipakai
            </div>

            <div class="stat-value">
                {{ $psDipakai }}
            </div>

        </div>

    </div>

</div>

</div>
<footer class="premium-footer">

    <div class="footer-glow"></div>

    <div class="container">

        <div class="footer-content">

            <div class="footer-brand">

                <div class="brand-icon">
                    <i class="fa-solid fa-gamepad"></i>
                </div>

                <div>

                    <h5>Rental PS Management</h5>

                    <small>
                        Smart Gaming Management System
                    </small>

                </div>

            </div>

            <div class="footer-center">

                <div class="status-item">

                    <span class="dot-online"></span>

                    System Online

                </div>

                <div class="status-item">

                    <i class="fa-solid fa-shield-halved"></i>

                    Secure Database

                </div>

            </div>

            <div class="footer-version">

                <span>Version 1.0  <small>
                    © {{ date('Y') }}
                </small></span>

            </div>

        </div>

    </div>

</footer>
@endsection

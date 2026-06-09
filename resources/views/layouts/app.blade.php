<!DOCTYPE html>
<html>
<head>
    <title>Rental PS Management</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>

/* Background */
body{
    background:
    radial-gradient(circle at top left,#0ea5e9 0%,transparent 30%),
    radial-gradient(circle at bottom right,#2563eb 0%,transparent 30%),
    #020617;
    color:white;
    min-height:100vh;
}

/* Navbar */
.navbar-tech{
    background:rgba(2,6,23,.75);
    backdrop-filter:blur(15px);
    border-bottom:1px solid rgba(255,255,255,.08);
    box-shadow:0 5px 30px rgba(0,0,0,.3);
}

/* Logo */
.logo-text{
    font-size:26px;
    font-weight:800;
    letter-spacing:1px;
}

.logo-text span{
    color:#38bdf8;
}

/* Menu */
.nav-link{
    color:#cbd5e1 !important;
    margin-left:8px;
    border-radius:12px;
    transition:.3s;
    padding:10px 16px !important;
}

.nav-link:hover,
.nav-link.active{
    color:white !important;
    background:linear-gradient(
        135deg,
        #0ea5e9,
        #2563eb
    );
    box-shadow:0 10px 25px rgba(37,99,235,.35);
}

/* Banner */
.hero-banner{
    background:linear-gradient(
        135deg,
        rgba(14,165,233,.95),
        rgba(37,99,235,.95)
    );
    border-radius:25px;
    padding:40px;
    position:relative;
    overflow:hidden;
}

.hero-banner::before{
    content:'';
    position:absolute;
    width:250px;
    height:250px;
    background:rgba(255,255,255,.08);
    border-radius:50%;
    top:-100px;
    right:-100px;
}

.hero-title{
    font-size:34px;
    font-weight:800;
}

.hero-sub{
    margin-top:10px;
    color:rgba(255,255,255,.85);
}

/* Card */
.glass-card{
    background:rgba(15,23,42,.85);
    border:1px solid rgba(255,255,255,.08);
    backdrop-filter:blur(20px);
    border-radius:25px;
    padding:30px;
    box-shadow:
    0 15px 40px rgba(0,0,0,.3),
    0 0 25px rgba(14,165,233,.08);
}

/* =========================
   TABLE FUTURISTIC
========================= */

.table-responsive{
    border-radius:18px;
    overflow:hidden;
    border:1px solid rgba(56,189,248,.08);
}

.table{
    width:100%;
    margin-bottom:0;
    color:#cbd5e1;
    border-collapse:separate;
    border-spacing:0;
}

/* HEADER */

.table thead th{
    background:#172554;
    color:#93c5fd;
    border:none;
    padding:18px;
    font-weight:600;
    letter-spacing:.7px;
    text-transform:uppercase;
    font-size:13px;
}

.table thead th:first-child{
    border-top-left-radius:15px;
}

.table thead th:last-child{
    border-top-right-radius:15px;
}

/* BODY */

.table tbody td{
    background:rgba(15,23,42,.65);
    border:none;
    color:#e2e8f0;
    padding:18px;
    vertical-align:middle;
    transition:.25s;
}

/* GARIS PEMISAH */

.table tbody tr{
    border-bottom:1px solid rgba(255,255,255,.03);
}

/* HOVER */

.table tbody tr:hover td{
    background:rgba(30,41,59,.95);
    color:#ffffff;
}

/* KOLOM PERTAMA */

.table tbody td:first-child{
    color:#93c5fd;
    font-weight:600;
}

/* SCROLLBAR */

.table-responsive::-webkit-scrollbar{
    height:8px;
}

.table-responsive::-webkit-scrollbar-thumb{
    background:#2563eb;
    border-radius:20px;
}

/* STATUS */

.badge-status{
    padding:8px 14px;
    border-radius:50px;
    font-size:12px;
    font-weight:600;
}

.badge-tersedia{
    background:rgba(34,197,94,.15);
    color:#22c55e;
    border:1px solid rgba(34,197,94,.25);
}

.badge-dipakai{
    background:rgba(239,68,68,.15);
    color:#ef4444;
    border:1px solid rgba(239,68,68,.25);
}

/* BUTTON ACTION */

.action-buttons{
    display:flex;
    justify-content:center;
    align-items:center;
    gap:10px;
}

.action-buttons form{
    margin:0;
}

.btn-action{
    width:42px;
    height:42px;
    border:none;
    border-radius:12px;
    display:flex;
    align-items:center;
    justify-content:center;
    transition:.25s;
}

/* EDIT */

.btn-edit{
    background:rgba(245,158,11,.15);
    color:#f59e0b;
}

.btn-edit:hover{
    background:#f59e0b;
    color:white;
    transform:translateY(-2px);
}

/* DELETE */

.btn-delete{
    background:rgba(239,68,68,.15);
    color:#ef4444;
}

.btn-delete:hover{
    background:#ef4444;
    color:white;
    transform:translateY(-2px);
}
 body{
            background: #0f172a;
            color: white;
            min-height:100vh;
        }

        .navbar-tech{
            background: rgba(15,23,42,0.9);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255,255,255,.1);
        }

        .logo-text{
            font-size:24px;
            font-weight:700;
            letter-spacing:1px;
        }

        .logo-text span{
            color:#38bdf8;
        }

.nav-link{
    color:#cbd5e1 !important;
    margin-left:10px;
    transition:0.3s;
    border-radius:10px;
    padding:8px 15px !important;
}

.nav-link:hover,
.nav-link.active{
    background:rgba(56,189,248,.12);
    color:#38bdf8 !important;
    box-shadow:0 0 15px rgba(56,189,248,.15);
}

        .content-wrapper{
            margin-top:30px;
        }

        .glass-card{
            background: rgba(30,41,59,.8);
            border:1px solid rgba(255,255,255,.08);
            backdrop-filter: blur(12px);
            border-radius:20px;
            padding:25px;
            box-shadow:0 0 30px rgba(56,189,248,.08);
        }

        .hero-banner{
            background: linear-gradient(
                135deg,
                #0ea5e9,
                #1d4ed8
            );

            border-radius:20px;
            padding:30px;
            margin-bottom:25px;
        }

        .hero-title{
            font-size:30px;
            font-weight:bold;
        }

        .hero-sub{
            opacity:.85;
        }
/* ===========================
DASHBOARD
=========================== */

.dashboard-title{
font-weight:700;
color:white;
}

.dashboard-title i{
color:#38bdf8;
}

.dashboard-subtitle{
color:#94a3b8;
}

.stat-card{

```
position:relative;

overflow:hidden;

border-radius:20px;

padding:25px;

display:flex;

align-items:center;

gap:20px;

background:rgba(15,23,42,.85);

border:1px solid rgba(255,255,255,.06);

backdrop-filter:blur(12px);

transition:.3s;

height:100%;
```

}

.stat-card:hover{

```
transform:translateY(-5px);

box-shadow:
0 20px 40px rgba(0,0,0,.25);
```

}

.stat-icon{
width:90px;
height:60px;
border-radius:15px;

display:flex;
justify-content:center;
align-items:center;

font-size:28px;

color:white;
```

}

.stat-label{

```
font-size:14px;

color:#cbd5e1;
```

}

.stat-value{

```
font-size:30px;

font-weight:700;

color:white;
```

}

/* WARNA */

.stat-blue .stat-icon{
background:#0ea5e9;
}

.stat-purple .stat-icon{
background:#8b5cf6;
}

.stat-green .stat-icon{
background:#22c55e;
}

.stat-orange .stat-icon{
background:#f97316;
}

/* ==========================
   PREMIUM FOOTER
========================== */

.premium-footer{

    position:relative;

    margin-top:50px;

    background:
    rgba(15,23,42,.85);

    backdrop-filter:blur(20px);

    border-top:
    1px solid rgba(255,255,255,.08);

    padding:22px 0;

    overflow:hidden;
}

.footer-glow{

    position:absolute;

    top:0;

    left:50%;

    transform:translateX(-50%);

    width:400px;

    height:2px;

    background:
    linear-gradient(
        90deg,
        transparent,
        #38bdf8,
        #2563eb,
        transparent
    );

    box-shadow:
    0 0 25px #38bdf8;
}

.footer-content{

    display:flex;

    justify-content:space-between;

    align-items:center;

    flex-wrap:wrap;
}

.footer-brand{

    display:flex;

    align-items:center;

    gap:15px;
}

.brand-icon{

    width:50px;

    height:50px;

    border-radius:15px;

    display:flex;

    align-items:center;

    justify-content:center;

    background:
    linear-gradient(
        135deg,
        #0ea5e9,
        #2563eb
    );

    color:white;

    font-size:20px;
}

.footer-brand h5{

    color:white;

    margin:0;

    font-weight:700;
}

.footer-brand small{

    color:#94a3b8;
}

.footer-center{

    display:flex;

    gap:25px;
}

.status-item{

    color:#cbd5e1;

    font-size:14px;
}

.dot-online{

    display:inline-block;

    width:10px;

    height:10px;

    border-radius:50%;

    background:#22c55e;

    margin-right:8px;

    box-shadow:
    0 0 10px #22c55e;
}

.footer-version{

    text-align:right;

    color:#94a3b8;
}

.footer-version span{

    display:block;

    color:white;

    font-weight:600;
}
.logout-btn{
    background:rgba(239,68,68,.12);
    color:#ef4444 !important;
    border-radius:12px;
    margin-left:10px;

}

.logout-btn:hover{
    background:#ef4444;
    color:white !important;
}
    </style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-tech">

    <div class="container">

        <a class="navbar-brand logo-text" href="/dashboard">
            <i class="fa-solid fa-gamepad"></i>
            RENTAL<span>PS</span>
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMenu">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div
            class="collapse navbar-collapse Nvv"
            id="navbarMenu">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}"
                        href="/dashboard">
                        <i class="fa-solid fa-chart-line"></i>
                        Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('pelanggan*') ? 'active' : '' }}"
                        href="/pelanggan">
                        <i class="fa-solid fa-users"></i>
                        Pelanggan
                    </a>
                </li>

                <li class="nav-item">
                   <a class="nav-link {{ request()->is('playstations*') ? 'active' : '' }}"
                        href="/playstations">
                        <i class="fa-solid fa-gamepad"></i>
                        PlayStation
                    </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link {{ request()->is('transaksi*') ? 'active' : '' }}"
                     href="/transaksi">
                    <i class="fa-solid fa-cash-register"></i>
                    Transaksi
                </a>
                </li>
                
            <li class="nav-item ms-3">
                <a class="nav-link logout-btn" href="/logout">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    Logout
                </a>
            </li>
            </ul>

        </div>

    </div>

</nav>

<div class="container content-wrapper">

    <div class="hero-banner">

        <div class="hero-title ">
         <i class="fa-solid fa-gamepad"></i>
            Rental PS Management System
        </div>

     <div class="hero-sub">
        Kelola pelanggan, monitor PlayStation, transaksi rental,
        serta pendapatan harian dengan tampilan modern dan real-time.
    </div>

    </div>

    <div class="glass-card">

        @yield('content')

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<!DOCTYPE html>
<html>
<head>

<title>Login Rental PS</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


<style>

body{

    height:100vh;

    display:flex;

    justify-content:center;

    align-items:center;

    background:
    radial-gradient(circle at top left,#0ea5e9,transparent 30%),
    radial-gradient(circle at bottom right,#2563eb,transparent 30%),
    #020617;
}

.login-card{

    width:420px;

    background:rgba(15,23,42,.9);

    padding:40px;

    border-radius:25px;

    backdrop-filter:blur(20px);

    border:1px solid rgba(255,255,255,.08);
}

.logo{

    font-size:60px;

    color:#38bdf8;

    text-align:center;

    margin-bottom:15px;
}

.title{

    text-align:center;

    color:white;

    font-weight:700;

    margin-bottom:25px;
}

.form-control{

    background:#0f172a;

    color:white;

    border:1px solid rgba(255,255,255,.08);
}

.form-control:focus{

    background:#0f172a;

    color:white;
}

</style>
<script>
function togglePassword()
{
    const password =
        document.getElementById('password');

    const eyeIcon =
        document.getElementById('eyeIcon');

    if(password.type === 'password')
    {
        password.type = 'text';

        eyeIcon.classList.remove('fa-eye');
        eyeIcon.classList.add('fa-eye-slash');
    }
    else
    {
        password.type = 'password';

        eyeIcon.classList.remove('fa-eye-slash');
        eyeIcon.classList.add('fa-eye');
    }
}
</script>
</head>

<body>

<div class="login-card">

    <div class="logo">
        <i class="fa-solid fa-gamepad"></i>
    </div>

    <h3 class="title">
        Rental PS Login
    </h3>

    @if(session('error'))

    <div class="alert alert-danger">
        {{ session('error') }}
    </div>

    @endif

    <form method="POST" action="/login">

        @csrf

        <div class="mb-3">

            <label class="text-white">Email</label>

            <input
            type="email"
            name="email"
            class="form-control">

        </div>

        <div class="mb-3">
            <label class="text-white">Password</label>

            <div class="input-group">

                <input
                    type="password"
                    name="password"
                    id="password"
                    class="form-control"
                    required>

                <button
                    type="button"
                    class="btn btn-outline-secondary"
                    onclick="togglePassword()">

                    <i id="eyeIcon" class="fa-solid fa-eye"></i>

                </button>

            </div>
        </div>

        <button class="btn btn-primary w-100">

            Login

        </button>

    </form>

</div>

</body>
</html>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
    body {
        font-size: 0.875rem;
        background-color: #F9F0EB;
        font-family: 'Calibri', sans-serif;

    }

    .sidebar {
        height: 100vh;
        position: fixed;
        top: 0;
        right: 0;
        z-index: 100;
        padding: 20px 0;
        background-color: #c68a6a;
        color: white;
        border-bottom: 5px solid #844e3f;
        /* Blue bottom border */
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.5);
        /* Shadow effect */
        transition: width 0.3s;
    }

    .sidebar a {
        color: white;
        transition: background-color 0.3s;
    }

    .sidebar a:hover {
        background-color: #495057;
    }

    .sidebar .nav-item {
        margin-bottom: 10px;
        text-align: justify;
        padding-right: 0px;
        padding-left: 50px;
    }

    .sidebar .nav-link {
        padding: 10px 35px;
        border-radius: 5px;
    }

    .sidebar .nav-link.active {
        background-color: #844e3f;
    }

    .main-content {
        margin-right: 250px;
        padding: 20px;
    }

    .card-header_dash{
        background-color: #dcac9f;

        text-align:center;
        color:#000;
    }
    .btn-rana{
        background-color: #dcac9f;
color:#000;
    }
    .form-group{
        text-align: justify;
    }
    .header {
        background-color: #844e3f;
        color: white;
        padding: 10px;
        text-align: center;
        border-radius: 5px;
        margin-bottom: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        /* Shadow effect */
    }

    .sidebar h2 {
        font-size: 1.5rem;
        margin-bottom: 20px;
        text-align: center;
    }

    .img-circle{
        width: 60px;
        height: 60px;
        border-radius:50%;

    }
    .sidebar .nav-item i {
        margin-left: 10px;
    }
    </style>
</head>

<body>

    <div class="sidebar">
        <div class="container">
            <h2> رنا القفاري</h2>
            <ul class="nav flex-column" style="padding-right:0px">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-tachometer-alt"></i> الرئيسية
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('posts.index') ? 'active' :''}}" href="{{route('posts.index')}}">
                        <i class="fas fa-plus"></i> المدونات
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('recommends.index') ? 'active' :''}}" href="{{route('recommends.index')}}">
                        <i class="fas fa-plus"></i> التوصيات
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-cog"></i> الإعدادات
                    </a>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-sign-out-alt"></i> تسجيل الخروج
                    </a>
                </li> -->
            </ul>
        </div>
    </div>

    <div class="main-content">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
    </script>
</body>

</html>
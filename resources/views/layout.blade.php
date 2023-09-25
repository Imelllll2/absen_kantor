<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Mengimpor DataTables CSS melalui CDN -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <!-- Mengimpor DataTables JavaScript melalui CDN -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
   <style>
      


.navbar-brand {
    font-size: 24px;
    font-weight: bold;
    display: flex;
    align-items: center; 
}

.navbar-nav {
    margin-left: auto; 
}

.navbar-nav .nav-item {
    text-align: center; /* Mengatur teks rata tengah horizontal */
}

.navbar-nav .nav-link {
    font-size: 18px;
    margin-right: 20px;
    color: #333; /* Warna teks */
    display: flex;
    align-items: center; 
}

.navbar-nav .nav-link:hover {
    color: #007bff; /* Warna teks saat dihover */
}

    </style>
</head>
<body>

    @yield('content')
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
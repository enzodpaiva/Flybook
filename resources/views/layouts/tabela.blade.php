<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}" defer></script>
    <script> $(document).ready(function () {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
    </script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tabela.css') }}">

</head>
<body>
    <div id="app">
<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Name
      </th>
      <th class="th-sm">Position
      </th>
      <th class="th-sm">Office
      </th>
      <th class="th-sm">Age
      </th>
      <th class="th-sm">Start date
      </th>
      <th class="th-sm">Salary
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Tiger Nixon</td>
      <td>System Architect</td>
      <td>Edinburgh</td>
      <td>61</td>
      <td>2011/04/25</td>
      <td>$320,800</td>
    </tr>
    <tr>
      <td>Donna Snider</td>
      <td>Customer Support</td>
      <td>New York</td>
      <td>27</td>
      <td>2011/01/25</td>
      <td>$112,000</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <th>Name
      </th>
      <th>Position
      </th>
      <th>Office
      </th>
      <th>Age
      </th>
      <th>Start date
      </th>
      <th>Salary
      </th>
    </tr>
  </tfoot>
</table>

<main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="footer-distributed">

<div class="footer-left">   
<img src="{{ asset('css/IMG/medalha.png') }}" class="img" alt="Projeto Medalha" width=60 height=60>
    <p class="footer-links">
        <a href="#">Home</a>
        ·
        <a href="https://projetomedalha.org/home/">Blog</a>
        ·
        <a href="#">Sobre</a>
        ·
        <a href="#">Contato</a>
    </p>
    
</div>

<div class="footer-center">

<img src="{{ asset('css/IMG/logo.png') }}" class="img" alt="BlueSky" width=150 height=100>


</div>

<div class="footer-right">

    <p class="footer-company-about">
        <span>Sobre</span>
        O site foi desenvolvido pelo Projeto Medalha com parceria com a escola de voo livre BlueSky.
    </p>
    
    <p class="footer-company-name">FlyBook &copy; 2019</p>

    

</div>

</footer>
</body>
</html>

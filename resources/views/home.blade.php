<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


        <link rel="stylesheet" href="/css/app.css">
    <title>Single page forum</title>
</head>
<body>
    <div class="wrapper" id="app">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Real Time Forum App</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
      <router-link class="nav-item nav-link" to="#">Forum</router-link>
      <router-link class="nav-item nav-link" to="/question">Ask Question</router-link>
      <router-link class="nav-item nav-link" to="/category">Category</router-link>
      <router-link class="nav-item nav-link ml-auto" to="/logout">Logout</router-link>
    </div>
  </div>
</nav>
  <div class="mt-4">
    <router-view></router-view>

  </div>

    </div>
</body>

<script src="{{asset('js/app.js')}}"></script>
</html>
<!-- Styles -->
<style>
    html, body {

        font-family: 'Nunito', sans-serif;
        font-weight: 200;

    }
</style>


<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | Starter</title>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

<link rel="stylesheet" href="{{ asset('build/assets/app.e9da660b.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script nonce="4d900c6a-e771-4980-8d5d-80038135274a">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{};a.zarazData.executed=[];a.zaraz={deferred:[],listeners:[]};a.zaraz.q=[];a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","debug"])a.zaraz[e]=a.zaraz._f(e);a.zaraz.init=()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text);a.zarazData.x=Math.random();a.zarazData.w=a.screen.width;a.zarazData.h=a.screen.height;a.zarazData.j=a.innerHeight;a.zarazData.e=a.innerWidth;a.zarazData.l=a.location.href;a.zarazData.r=e.referrer;a.zarazData.k=a.screen.colorDepth;a.zarazData.n=e.characterSet;a.zarazData.o=(new Date).getTimezoneOffset();a.zarazData.q=[];for(;a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0;for(const e of[localStorage,sessionStorage])Object.keys(e||{}).filter((a=>a.startsWith("_zaraz_"))).forEach((t=>{try{a.zarazData["z_"+t.slice(7)]=JSON.parse(e.getItem(t))}catch{a.zarazData["z_"+t.slice(7)]=e.getItem(t)}}));z.referrerPolicy="origin";z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData)));t.parentNode.insertBefore(z,t)};["complete","interactive"].includes(e.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script></head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">




<aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="{{ url('homepage') }}" class="brand-link">
<span class="brand-text font-weight-light">Fashion</span>
</a>

<div class="sidebar">

<div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
</div>
<div class="info">
<a href="" class="d-block">{{ Auth::user()->name }}</a>
</div>
</div>


<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu"  data-accordion="false">
<li class="nav-item" >
    <form action="{{ route('user.index') }}">

<button class="nav-link active" id="item-1">
    <i class="fa-solid fa-user"></i>
    <p>
        Users
        </p>
        </button>
        </form>
        </li>
<li class="nav-item" >
    <form action="{{ route('product.index') }}">
        <button  class="nav-link" id="item-2" aria-current="page">
            <i class="fa-solid fa-cart-shopping"></i>
    <p>
        Products
        </p>
        </button>
        </form>
</li>
<li class="nav-item" >
    <form action="{{ route('category.index') }}">

<button class="nav-link" id="item-3">
    <i class="fa-solid fa-shirt"></i>
    <p>
        Categories
        </p>
        </button>
    </form>
        </li>

</ul>
</nav>



</div>

</aside>

<div>
@yield('content')
</div>



<aside class="control-sidebar control-sidebar-dark">

    <div class="p-3">
<h5>Title</h5>
<p>Sidebar content</p>
</div>
</aside>


<footer class="main-footer">

    <div class="float-right d-none d-sm-inline">
        Anything you want
        </div>

        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
        </div>



        <script src="{{ asset('build/assets/app.36a2ae13.js') }}"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

</body>
</html>

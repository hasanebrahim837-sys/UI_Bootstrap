<!DOCTYPE html>
<html>
<head>
    <title>My Blog</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<!-- ================= NAVBAR ================= -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">

<a class="navbar-brand" href="#">MyBlog</a>

<button class="navbar-toggler" data-bs-toggle="collapse"
data-bs-target="#navbarNav">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="navbarNav">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link active">Home</a>
</li>

<li class="nav-item">
<a class="nav-link">Profile</a>
</li>

<li class="nav-item">
<a class="nav-link">Articles</a>
</li>

<li class="nav-item">
<a class="nav-link">Contact Us</a>
</li>

</ul>

</div>

</div>
</nav>


<!-- ================= HERO / CAROUSEL ================= -->

<div id="carouselExample" class="carousel slide">

<div class="carousel-inner">

<div class="carousel-item active">

<img src="https://picsum.photos/1200/400?random=1"
class="d-block w-100">

</div>

<div class="carousel-item">

<img src="https://picsum.photos/1200/400?random=2"
class="d-block w-100">

</div>

<div class="carousel-item">

<img src="https://picsum.photos/1200/400?random=3"
class="d-block w-100">

</div>

</div>

<button class="carousel-control-prev"
data-bs-target="#carouselExample"
data-bs-slide="prev">

<span class="carousel-control-prev-icon"></span>

</button>

<button class="carousel-control-next"
data-bs-target="#carouselExample"
data-bs-slide="next">

<span class="carousel-control-next-icon"></span>

</button>

</div>


<!-- ================= ARTICLES ================= -->

<div class="container mt-5">

<h2 class="text-center mb-4">Latest News</h2>

<div class="row">

<div class="col-md-4">

<div class="card">

<img src="https://picsum.photos/300/200?random=4">

<div class="card-body">

<h5>Article 1</h5>

<p>This is news content example</p>

<button class="btn btn-primary">Read More</button>

</div>

</div>

</div>


<div class="col-md-4">

<div class="card">

<img src="https://picsum.photos/300/200?random=5">

<div class="card-body">

<h5>Article 2</h5>

<p>This is news content example</p>

<button class="btn btn-primary">Read More</button>

</div>

</div>

</div>


<div class="col-md-4">

<div class="card">

<img src="https://picsum.photos/300/200?random=6">

<div class="card-body">

<h5>Article 3</h5>

<p>This is news content example</p>

<button class="btn btn-primary">Read More</button>

</div>

</div>

</div>

</div>

</div>


<!-- ================= FOOTER ================= -->

<footer class="bg-dark text-white text-center mt-5 p-3">

<p>Copyright © 2026 MyBlog | Ebrahim</p>

</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
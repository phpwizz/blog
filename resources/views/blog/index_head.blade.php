
<html lang="en">
<head>
<!--HTML Bootstrap-->
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="jumbotron">
 <center><img src = "https://render.bitstrips.com/v2/cpanel/10212367-281901098_5-s1-v1.png?transparent=1&palette=1" alt="Profile image example" width="200px" height="200px">
 <h1>Hello Admin </h1>


 
</center>
<ul class="list-group">
  <li class="list-group-item list-group-item-info "><h4>Members registerd on your blog: {{ App\User::count()-1 }} </h4></li>
<li class="list-group-item list-group-item-danger"><h4>Blog post you have published: {{ App\Post::count() }}</h4></li>
<li class="list-group-item list-group-item-info "><h4>Comments published on your blog posts: {{ App\Comment::count() }}</h4></li>

</ul>
</center>

<a href="/home"><button class="btn btn-info"><--Back to Home</button></a>

</div>
 

</body>

</body>
</html>
<!-- -->
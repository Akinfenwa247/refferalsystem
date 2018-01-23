<html>
<body>
    <p>Hi, your friend {{Auth::user()->name}} is inviting you to join this website, kindly click on the following link {{url('register/').'/'.Auth::user()->affiliate_id}}</p>
</body>
</html>


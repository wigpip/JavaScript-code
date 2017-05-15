<!DOCTYPE html>
<html>
<head>

</head>
<body>
<p>Welcome to your profile</p>
<p>{{ Auth::user()->email }}</p>
<a href="/logout">logout</a>
</body>
</html>

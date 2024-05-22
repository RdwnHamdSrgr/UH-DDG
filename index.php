<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #FFEBB2;
    margin: 0;
    padding: 0;
    background-image: 
}

.container {
    width: 400px;
    margin: 50px auto;
    padding: 50px;
    background-color: #3AB0FF;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #c9eb0a;
    border-radius: 5px;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #0f71f2;
    border: none;
    border-radius: 5px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0f71f2;
}

a {
    display: block;
    text-align: center;
    margin-top: 20px;
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

.message {
    text-align: center;
    margin-bottom: 20px;
    color: red;
}
</style>
<body>
    <div class="container">
        <h2>Welcome to the User Registration System</h2>
        <a href="register.php">Register</a> | <a href="login.php">Login</a>
    </div>
</body>
</html>
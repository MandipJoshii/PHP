<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE </title>

    <!-- jaro -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jaro:opsz@6..72&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik+Wet+Paint&family=Tiny5&display=swap" rel="stylesheet">
    <style>
        * {}

        .navmain {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            width: 100vw;
        }

        .ul-main {
            display: flex;
            justify-content: right;
            align-items: center;
            width: 100vw;
            padding: 10px 20px;
            gap: 20px;

        }

        .login {
            border: 2px solid #865D32;
            border-radius: 6px;
            padding: 5px;
            width: 20px;
        }

        a.login {
            font-family: 'jaro';
            

        }
    </style>
</head>

<body>
    <div class="navcontainer">

        <nav class="navmain">
            <ul type="none" class="ul-main">
                <li><a href="#">Home</a></li>
                <li><a href="#">Cotact Us</a></li>
                <li><a href="#">Category</a></li>
                <li><a href="#">Register</a></li>
                <li><a href="#" class="login">Login</a></li>
            </ul>
        </nav>
    </div>
</body>

</html>
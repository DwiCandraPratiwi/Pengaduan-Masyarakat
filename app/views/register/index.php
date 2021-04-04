<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
    <form action="<?= BASEURL ?>/register/prosesRegister" id="form" class="form"  method="post">
        <h2 id="tit" class="titb">Sign Up</h2>
        <div class="input">
            <div class="box">
                <label>Username</label>
                <input id="Username" type="text" name="username" placeholder="Username" autocomplete="off" autofocus="" required="">
            </div>
            <div class="box">
                <label>Password</label>
                <input id="password" type="Password" name="password" placeholder="........." required="">
                <a onclick="tampil()" href="#" id="tampil"></a>
            </div>
            <div class="box">
                <label>Alamat</label>
                <input id="alamat" type="text" name="alamat" placeholder="Alamat" autocomplete="off" autofocus="" required="">
            </div>
            <div class="box">
                <input type="submit" id="submit" class="submit"  name="" value="Sign Up">
            </div>
        </div>
        <p>Alredy have an account ? <a href="<?= BASEURL?>">Sign In</a></p>
    </form>
    
</body>
</html>

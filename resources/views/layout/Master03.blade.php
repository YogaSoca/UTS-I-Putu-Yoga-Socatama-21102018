<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judulpage')</title>
    <link rel= "stylesheet" href="css/style4.css">
</head>
<body>
    <div class="container m">
        <ul>
            <li><a href="/project1/public/project"><h3>Project</h3></a></li>
            <li><a href="/project1/public/blog"><h3>Code</h3></a></li>
            <li><a href="/project1/public/produk"><h3>Komponen</h3></a></li>
            <li><a href="/project1/public/"><h3>Home</h3></a></li>
              
        </ul>
    </div>

    <div class ="container">
        <h3>Codingan</h3>
    </div>

    <div class="container w">
         <h4>@yield('isi')</h4>
         <p>IR Receiver & Relay Pada gambar 1.<p>
        <center><img src="IMG/Code1.jpg" alt="code1" width="1000px" height="auto"></center>
         <p>IR Transmitter & Button Pada gambar 2.<p>
        <center><img src="IMG/Code2.jpg" alt="code2" width="1000px" height="auto"></center>

    <div class ="container footer">
        &copy;Programming Seru Cuy #Yoga.S 2022
    </div>
    
</body>
</html>
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
	</div>
    <div class="container m">
        <ul>
            <li><a href="/project1/public/project"><h3>Project</h3></a></li>
            <li><a href="/project1/public/blog"><h3>Code</h3></a></li>
            <li><a href="/project1/public/produk"><h3>Komponen</h3></a></li>
            <li><a href="/project1/public/"><h3>Home</h3></a></li>
              
    <div class="container w">
        <h3> @yield('konten')</h3>
    </div>

    <div class="container s">
        <large> @yield('isi')</large> 
    </div>
    
    <div class ="container footer">
        &copy;Programming Seru Cuy #Yoga.S 2022
    </div>
    
</body>
<div class="wrapper">
        <project id="home">
            <div class="prjt">
                <h4 class="prt">Desain Alat</h4>
                <center><h6>Lampu Otomatis Menggunakan Remote Contol</h6>
                <div class="gambar">
                    <center><img src="IMG/Kotak Lampu Relay Hidup.jpeg", style="width :250px;height: 290px;"><img src="IMG/Remote Control.jpeg", style="width :250px;height: 290px;">
                </div>
                
                <p>Lampu otomatis menggunakan remote control merupakan salah satu cara yang praktis dalam menghidupkan dan mematikan lampu, 
                    fungsinya dapat membantu manusia dalam aktivitas sehari-hari dengan adanya alat ini akan bekerja secara otomatis dan sederhana dengan menekan tombol yang ada pada remote 
                    maka alat ini dapat bekerja dengan otomatis yaitu menghidupkan atau mematikan lampu dan tanpa harus mendekati saklar pada tempat tertentu.</p>        
            </div>
        </project>
</html>
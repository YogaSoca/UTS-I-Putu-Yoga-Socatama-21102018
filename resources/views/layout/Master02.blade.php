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
                 
    <div class="judul">
                <h1></h1>
            </div>
            <h5>Komponen Yang Dibutuhkan Dalam Pembuatan Alat</h5>
    <div class ="container footer">
        &copy;Programming Seru Cuy #Yoga.S 2022
    </div>
 
    <div class="Arduino">
        <img src="IMG/arduino.png", style="width :250px;height: 200px;">
    </div>
    <h3>Arduino Uno</h3>
    <p>Arduino Uno adalah board yang berbasis mikrokontroler ATMEGA328. Arduino Uno ini terdiri dari 14 digital pin input dan output (6 diantaranya digunakan sebagai output PWM) 6 input analog, 16 MHz osilator kristal, koneksi USB, jack power, header, dan tombol reset. Secara umum, 
        arduino dengan sebuah mikrokontroller ini mampu menciptakan suatu program yang dapat digunakan untuk mengendalikan berbagai komponen elektronika.
         Sehingga cukup jelas, bila fungsi yang dimiliki arduino uno adalah untuk memudahkan pengguna dalam melakukan prototyping, memprogram mikrokontroller serta menciptakan berbagai alat canggih berbasis mikrokontroler.</p>
    

    <div class="Arduino">
    <img src="IMG/bread board.jpg">
</div>
    <h3>Breadboard</h3>
    <p>Breadboard merupakan sebuah board atau papan yang berfungsi untuk merancang sebuah rangkaian elektronik sederhana. 
        Breadboard tersebut nantinya akan dilakukan prototipe atau uji coba tanpa harus melakukan solder.</p>

    <div class="Arduino">
    <img src="IMG/relay.jpg", style="width :200px;height: 200px;">
    </div>
    <h3>Relay</h3>
    <p>Relay adalah saklar mekanik yang dikendalikan atau dikontrol secara elektronik (elektro magnetik). Saklar pada relay akan terjadi perubahan posisi OFF ke ON pada saat diberikan energi elektro magnetik pada armatur relay tersebut. Relay pada dasarnya terdiri dari 2 bagian utama yaitu saklar mekanik dan sistem pembangkit elektromagnetik (induktor inti besi). saklar atau kontaktor relay dikendalikan menggunakan tegangan listrik yang diberikan ke inductor. Fungsi Relay dapat digunakan untuk mengontrol motor AC dengan rangkaian kontrol DC atau beban lain dengan sumber tegangan yang berbeda antara tegangan rangkaian kontrol dan tegangan beban. Cara kerja modul relay adalah saklarnya akan terhubung jika dialiri arus listrik dan terputus apabila tak ada aliran listrik.
        Diantara aplikasi relay yang dapat ditemui diantaranya adalah: 
        1. Relay sebagai kontrol ON/OF beban dengan sumber tegang berbeda. 
        2. Relay sebagai selektor atau pemilih hubungan. 
        3. Relay sebagai eksekutor rangkaian delay (tunda) 
        4. Relay sebagai protektor atau pemutus arus pada kondisi tertentu.</p>
    <h3>SPESIFIKASI :</h3>
    <p>1. Operating Voltage: 5V</p>
    <p>2. Signal control: TTL Level</p>
    <p>3. Maximum Switch voltage: 250 VAC 30 VDC</p>
    <p>4. Contact action time: <10ms</p>
    <p>5. Dilengkapi dengan proteksi arus kickback</p>

    <div class="Arduino">
    <img src="IMG/ir receiver.jpg">
    </div>
    <h3>IR Receiver</h3>
    <p>IR Receiver ky-022 adalah bentuk cahaya yang mirip dengan cahaya yang biasa kita lihat, satu satunya perbedaan antara cahaya IR dan cahaya biasa adalah frekuensi dan panjang gelombang. Cahaya inframerah terletak di luar jangkauan sehingga manusia tidak dapat melihatnya. Karena inframerah adalah jenis cahaya komunikasi yang digunakan memerulkan garis pandang lurus atau tidak dapat ditransmisikan melalui dinding atau bahan lain.
        Cara kerja sinyal IR adalah serangkaian pulsa cahaya IR yang dinyalakan dan dimatikan pada frekuensi tinggi yang dikenal sebagai frekuensi pembawa. Frekuensi pembawa yang digunakan sebagian besar pemancar adalah 38 kHzm karena sifatnya jarang dan dapat dibedakan dengan frekuensi cahaya sekitar. Dengan cara ini penerima IR akan tahu bahwa sinyal 38 kHz dikirim dari pemancar dan tidak diambil dari lingkungan sekitar. 
        Dalam modulasi sinyal IR, sebuah enkoder pada remote IR mengubah biner menjadi sinyal listrik termodulasi. 
        Sinyal listrik ini kemudian dikirim ke Led yang mentransmisikan. Led pemancar mengubah sinyal listrik menjadi sinyal cahaya IR termodulasi. 
        Penerima IR kemudian mengubah kembali menjadi biner sebelum meneruskan informasi tersebut ke arduino.</p>
    <h3>SPESIFIKASI :</h3>
    <p>1. OperatingVoltage:2.7to5.5V</p>
    <p>2. OperatingCurrent:0.4to1.5mA</p>
    <p>3. ReceptionDistance:18m</p>
    <p>4. ReceptionAngle:45</p>
    <p>5. CarrierFrequency:38KHz</p>
    <p>6. LowLevelVoltage:0.4V</p>
    <p>7. HighLevelVoltage:4.5V</p>
    <p>8. Ambient Light Filter: up to 500LUX</p>
  
    
    <div class="Arduino">
    <img src="IMG/nano.jpg">
    </div>
    <h3>Arduino Nano</h3>
    <p>Arduino Nano adalah salah satu papan pengembangan mikrokontroler yang berukuran kecil, lengkap dan mendukung penggunaan breadboard. 
        Arduino Nano diciptakan dengan basis mikrokontroler ATmega328 (untuk Arduino Nano versi 3.x) atau ATmega 168 (untuk Arduino versi 2.x). 
        Arduino Nano kurang lebih memiliki fungsi yang sama dengan Arduino Duemilanove, tetapi dalam paket yang berbeda. Arduino Nano tidak menyertakan port DC berjenis Barrel Jack, dan dihubungkan ke komputer menggunakan port USB Mini-B.</p>
    

    <div class="Arduino">
    <img src="IMG/ir transmitter.jpg">
    </div>
    <h3>IR Transmitter</h3>
    <p>IR Transmitter ky-005 merupakan modul pengirim data melalui gelombang infra merah yang dilengkapi pembangkit gelombang carrier dengan frekuensi 38 kHz dan panjang gelombang 940nm. 
        Ini di luar spektrum yang dapat dideteksi oleh manusia. Untuk proyek mandiri, modul ini umumnya dipasangkan dengan penerima inframerah ky-022.</p>
    <h3>SPESIFIKASI :</h3>
    <p>1. Operating Voltage: 3.3 to 5 volts</p>
    <p>2. Modulation Frequency: 38Khz</p>
    <p>3. Current Consumption: 30 to 60 milliamps</p>
    <p>4. Beam Emitting Angle: 20 degrees </p>

    <div class="Arduino">
    <img src="IMG/Push button.jpg">
    </div>
    <h3>Push Button</h3>
    <p>Push Button adalah saklar tekan yang berfungsi sebagai pemutus atau penyambung arus listrik dari sumber arus ke beban listrik. Suatu sistem saklar tekan push button terdiri dari saklar tekan start, stop reset dan saklar tekan untuk emergency. Push button memiliki kontak NC (normally close) dan NO (normally open). 
        Prinsip kerja Push Button adalah apabila dalam keadaan normal tidak ditekan maka kontak tidak berubah, apabila ditekan maka kontak NC akan berfungsi sebagai stop (memberhentikan) dan kontak NO akan berfungsi sebagai start (menjalankan). Berdasarkan fungsi kerjanya yang menghubungkan dan memutuskan, push button mempunyai 2 tipe kontak yaitu NC (Normally Close) dan NO (Normally Open). 
        1.	NO (Normally Open), merupakan kontak terminal dimana kondisi normalnya terbuka (aliran arus listrik tidak mengalir). Dan ketika tombol saklar ditekan, kontak yang NO ini akan menjadi menutup (Close) dan mengalirkan atau menghubungkan arus listrik. Kontak NO digunakan sebagai penghubung atau menyalakan sistem circuit (Push Button ON). 
        2.	NC (Normally Close), merupakan kontak terminal dimana kondisi normalnya tertutup (mengalirkan arus litrik). Dan ketika tombol saklar push button ditekan, kontak NC ini akan menjadi membuka (Open), sehingga memutus aliran arus listrik. Kontak NC digunakan sebagai pemutus atau mematikan sistem circuit (Push Button Off).</p>
       
    <div class="Arduino">
    <img src="IMG/resistor.jpg", style="width :200px;height: 200px;">
    </div>
    <h3>Resistor</h3>
    <p>Resistor merupakan salah satu komponen pasif yang memiliki fungsi untuk mengatur arus listrik. Resistor diberi lambang huruf R dengan satuannya yaitu Ohm (Ω). Resistor digunakan sebagai bagian dari jejaring elektronik dan sirkuit elektronik, dan merupakan salah satu komponen yang paling sering digunakan. Karakteristik utama dari resistor adalah resistansinya dan daya listrik yang dapat dihantarkan. Karakteristik lain termasuk koefisien suhu, desah listrik, dan induktansi. 
        Resistor dapat diintegrasikan kedalam sirkuit hibrida dan papan sirkuit cetak, bahkan sirkuit terpadu. Ukuran dan letak kaki bergantung pada desain sirkuit, kebutuhan daya resistor harus cukup dan disesuaikan dengan kebutuhan arus rangkaian agar tidak terbakar.</p>

    <div class="Arduino">
    <img src="IMG/kabel jumper.jpg">
    </div>
    <h3>Kabel Jumper</h3>
    <p>Kabel jumper adalah suatu istilah kabel yang ber-diameter kecil yang di dalam dunia elektronika digunakan untuk menghubungkan dua titik atau lebih dan dapat juga untuk menghubungkan 2 komponen elektronika. Ada bebera jenis kabel jumper yang dibedakan berdasarkan konektor kabelnya, yaitu: 
    Male-male kabel jumper jenis ini digunakan untuk koneksi male to male pada kedua ujung kabelnya.
    Male-female kabel jumper jenis ini digunakan untuk koneksi male to female dengan salah satu ujung kabel dikoneksi male dan satu ujungnya lagi dengan koneksi female.
    Female-Female kabel jenis ini digunakan untuk koneksi female to female pada
    kedua ujung kabelnya.</p>

    <div class="Arduino">
    <img src="IMG/kabel.png", style="width :200px;height: 200px;">
    </div>
    <h3>Kabel Listrik</h3>
    <p>Kabel listrik adalah sebuah alat yang fungsi utamanya digunakan untuk menghantarkan arus listrik. 
        Dimana arus listrik akan dihantarkan menuju jaringan listrik tertentu. Sebagai alat untuk menghantarkan arus. 
        Dengan begitu arus listrik yang berasal dari sumber tegangan utama dapat diedarkan secara merata ke seluruh instalasi. 
        Selain sebagai penghantar tegangan listrik, kabel juga berfungsi sebagai penerima frekuensi gelombang. 
        Dimana dengen digunakannya kabel maka siaran radio ataupun televisi akan lebih memungkinkan untuk di akses di setiap rumah.</p>

    <div class="Arduino">
    <img src="IMG/steker.jpg", style="width :200px;height: 200px;">
    </div>
    <h3>Steker</h3>
    <p>Steker adalah dua buah colokan berbahan logam yang dipasang pada ujung kabel listrik yang berfungsi untuk menghubungkan peralatan listrik dengan aliran listrik.</p>

    <div class="Arduino">
    <img src="IMG/fitting.jpg", style="width :200px;height: 200px;">
    </div>
    <h3>Fitting Lampu</h3>
    <p>Fitting lampu adalah perangkat kelistrikan yang berfungsi sebagai dudukan atau tempat meletakkan lampu.</p>

    <div class="Arduino">
    <img src="IMG/lampu_led_rumah-006.jpg", style="width :200px;height: 200px;">
    </div>
    <h3>Lampu</h3>
    <p>Lampu adalah sebuah benda yang berfungsi sebagai penerang, lampu memiliki bentuk seperti botol dengan rongga yang berisi kawat kecil yang akan menyalah apabila disambungkan ke aliran listrik.</p>
    
</body>
</html>
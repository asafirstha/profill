<?php
// Deklarasi array biodata
$biodata = array(
    "Nama" => "Ananda Asa Firstha A.",
    "Alamat" => "Jl. Jend. Sudirman No. 123",
    "NPM" => "21081010155",
    "Telepon" => "081390930261",
    "Instagram" => "asafirstha",
    "Line" => "asafirstha",
    "Riwayat_pendidikan" => array("SDN Pare 3", "SMPN 2 Pare", "SMAN 1 Pare"),
    "Email" => "asafirstha05@gmail.com",
    "Fakultas" => "Ilmu Komputer",
    "Prodi" => "Informatika",
    "TTL" => "02 Juni 2003",
    "umur" => "19"
);
#menghitung umur
$tgl_lahir="2003-06-02";
$umur = date_diff(date_create($tgl_lahir), date_create('today'))->y; //untuk menghitung selisih
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Biografi</title>
	<style>
		body {
			background-color: #ebdfd3;
			color: #8b0b54;
			transition: background-color 1s ease-in-out;
		}

		.grey {
			background-color: #988873;
		}

		.black {
			background-color: #2f2a15;
		}

		.mustard {
			background-color: #e09e19;
		}
		td, th {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
		}
		th {
			background-color: #dddddd;
		}
	</style>
    <link rel="stylesheet" href="biodata.css"></link>
</head>
<div class="table">
<body onscroll="scrollFunction()">
<?php
    ?>
    <h1 class="selamat">Hai, Selamat Datang!!</h1>    
    <p class="nama">- <?php echo $biodata ["Nama"] ?> -</p> 
    <tr>
        <table style="width: 700px;">
            <tr> 
    <br><br>
    <p>
        <br>
    </p>
            <img src="foto/WhatsApp Image 2023-02-28 at 18.06.03.jpeg" alt="Foto Profil" class="foto" height="500px" width=350px">
    <div class="container">
        <p style="font-size: 30px;">Haloo, Perkenalkan aku <?php echo $biodata["Nama"] ?>, aku sedang menempuh pendidikan di UPN "Veteran" Jawa Timur,
                        aku mengambil program studi <?php echo $biodata["Prodi"] ?> </p>
        <td>
        <h1 style="font-size: 45px;">SOSIAL MEDIA</h1>
             <table>
                    <tr>
                        <th>Nama</th>
                        <td><?php echo $biodata["Nama"] ?> </td>
                    </tr>
                    <tr>
                        <th>Instagram</th>
                        <td><?php echo $biodata["Instagram"] ?> </td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $biodata["Email"] ?></td>
                    </tr>
                    <tr>
                        <th>Line</th>
                        <td><?php echo $biodata["Line"] ?> </td>
                    </tr>
                    <tr>
                        <th>No Telepon</th>
                        <td><?php echo $biodata["Telepon"] ?></td>
                    </tr>
             </table>
            </td>
        </div>
        <tr style="text-align: center;">
            <td>
            <h1 style="font-size: 45px;">PROFILE</h1>
                <table>
                    <tr>
                        <th>Nama</th>
                        <td><?php echo $biodata["Nama"] ?> </td>
                    </tr>
                    <tr>
                        <th>TTL</th>
                        <td><?php echo $biodata["TTL"] ?> </td>
                    </tr>
                    <tr>
                        <th>Umur</th>
                        <td><?php echo $biodata["umur"] ?></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td><?php echo $biodata["Alamat"] ?> </td>
                    </tr>
                    <tr>
                        <th>NPM</th>
                        <td><?php echo $biodata["NPM"] ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $biodata["Email"] ?></td>
                    </tr>
                    <tr>
                        <th>No Telepon</th>
                        <td><?php echo $biodata["Telepon"] ?></td>
                    </tr>
                    <tr> 
                        <th>Riwayat Pendidikan</th>
                        <td><li><?php echo implode(", ",$biodata["Riwayat_pendidikan"]) ?></li>
                    </tr>
                </table>
                </div>
            </td>
            <tr style="text-align: center;">
            <td>
            <h1 style="font-size: 45px;">Pengalaman</h1>
                <table>
            <table>
                <tr>
                    <th>Loka Karya 2022</th>
                    <td>Divisi Acara</td>
                    <td><li>Membuat rundown untuk keberlangsungan acara selama 3 hari</li>
                    <li>Menjadi MC saat acara berlangsung</li>
               </td>
            </tr>
                <tr>
                    <th>Diklat calon anggota UKM Penalaran dan Kreatifitas 2022</th>
                    <td>Divisi Senior Pendamping</td>
                    <td>
                        <li>Membantu dan bertanggung jawab kepada calon anggota UKM selama acara berlangsung</li>
                        <li>Mengarahkan peserta selama berlangsungnya diklat</li>
                    </td>
                </tr>
                <tr>
                    <th>Pemira Informatika 2023</th>
                    <td>Divisi Acara</td>
                    <td><li>Membuat rundown selama untuk keberlangsungan acara </li>
                    <li>Menjadi time keeper agar waktu tetap sesuai rundown</li></td>
                
                </tr>
            </table>
        </tr>
    </table>
    </div>
</body>
<script>
	function scrollFunction() {
		var scrollPosition = window.pageYOffset;
		var body = document.querySelector("body");
		if (scrollPosition < 200) {
			body.classList.remove("grey", "black", "coffee");
		} else if (scrollPosition >= 200 && scrollPosition < 400) {
			body.classList.add("grey");
			body.classList.remove("black", "mustard");
		} else {
			body.classList.add("mustard");
			body.classList.remove("grey", "black");
		}
	}
</script>
</html>

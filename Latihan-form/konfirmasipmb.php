<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfiramsi PMB</title>
    <link href=css
</head>
<body>
<h2>Pendaftaran Online </h2>
    <table border="1">
        <tr>
            <td> Jalur Penerimaan Mahasiswa Baru </td>
            <td> : </td>
            <td> <?php echo $_POST['JPMB']?></td>
        </tr>
        <tr>
            <td> Nama Calon Mahasiswa (sesuai ijazah SMA) </td>
            <td> : </td>
            <td> <?php echo $_POST['Nama']?></td>
        </tr>
        <tr>
            <td> Tempat/ Tanggal Lahir </td>
            <td> : </td>
            <td> <?php echo $_POST['TTL']?></td>
        </tr>
        <tr>
            <td> Jenis Kelamin </td>
            <td> : </td>
            <td> <?php echo $_POST['JK']?></td>
        </tr>
        <tr>
            <td> Agama </td>
            <td> : </td>
            <td> <?php echo $_POST['Agama']?></td>
        </tr>
        <tr>
            <td> Status </td>
            <td> : </td>
            <td> <?php echo $_POST['Status']?></td>
        </tr>
        <tr>
            <td> Alamat </td>
            <td> : </td>
            <td> <?php echo $_POST['Alamat']?></td>
        </tr>
        <tr>
            <td> Kode Pos</td>
            <td> : </td>
            <td> <?php echo $_POST['KodePos']?></td>
        </tr>
        <tr>
            <td> No.Handphone</td>
            <td> : </td>
            <td> <?php echo $_POST['NoHandphone']?></td>
        </tr>
        <tr>
            <td> Email </td>
            <td> : </td>
            <td> <?php echo $_POST['Email']?></td>
        </tr>
    </table>
    <h2>DATA SEKOLAH ASAL CALON MAHASISWA</h2>
    <table border="1">
    <tr>
        <td> Asal Sekolah </td>
        <td> : </td>
        <td> <?php echo $_POST['AsalSekolah']?></td>
    </tr>
    <tr>
        <td> Tahun Lulus </td>
        <td> : </td>
        <td> <?php echo $_POST['TahunLulus']?></td>
    </tr>
    </table>
    <h2> DATA ORANG TUA CALON MAHASISWA</h2>
    <table border="1">
    <tr>
        <td> Nama Ibu </td>
        <td> : </td>
        <td> <?php echo $_POST['NamaIbu']?></td>
    </tr>
    <tr>
        <td> Nama Ayah </td>
        <td> : </td>
        <td> <?php echo $_POST['NamaAyah']?></td>
    </tr>
    <tr>
        <td> Kode Pos </td>
        <td> : </td>
        <td> <?php echo $_POST['KodePos1']?></td>
    </tr>
    <tr>
        <td> No.Handphone </td>
        <td> : </td>
        <td> <?php echo $_POST['NoHandphone1']?></td>
    </tr>
    <tr>
        <td> Pendidikan Terakhir Ayah </td>
        <td> : </td>
        <td> <?php echo $_POST['PTA']?></td>
    </tr>
    <tr>
        <td> Pendidikan Terakhir Ibu </td>
        <td> : </td>
        <td> <?php echo $_POST['PTI']?></td>
    </tr>
    <tr>
        <td> Status Ayah </td>
        <td> : </td>
        <td> <?php echo $_POST['SA']?></td>
    </tr>
    <tr>
        <td> Status Ibu </td>
        <td> : </td>
        <td> <?php echo $_POST['SI']?></td>
    </tr>
    <tr>
        <td> Pekerjaan Ayah </td>
        <td> : </td>
        <td> <?php echo $_POST['PekerjaanAyah']?></td>
    </tr>
    <tr>
        <td> Pekerjaan Ibu </td>
        <td> : </td>
        <td> <?php echo $_POST['PekerjaanIbu']?></td>
    </tr>
    </table>
    <h2> PEMINATAN PROGRAM STUDI </h2>
    <table border="1">
    <tr>
        <td> Pilihan Program Studi 1 </td>
        <td> : </td>
        <td> <?php echo $_POST['PPS1']?></td>
    </tr>
    <tr>
        <td> Pilihan Program Studi 2 </td>
        <td> : </td>
        <td> <?php echo $_POST['PPS2']?></td>
    </tr>
    <tr>
        <td> Sumber Informasi </td>
        <td> : </td>
        <td> <?php echo $_POST['SumberInformasi']?></td>
    </tr>
    </table>
    </table>
    <h2> UJIAN SARINGAN MASUK </h2>
    <table>
    <tr>
        <td> Pilihan Gelombang </td>
        <td> : </td>
        <td> <?php echo $_POST['PG']?></td>
    </tr>
    </table>
</body>
</html>
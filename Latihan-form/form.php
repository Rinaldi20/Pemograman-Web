<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <form method = "POST" action= "konfirmasipmb.php">
    <div class="jumbotron text-center">
    <h2>Pendaftaran Online </h2>
    </div>
    <table >
        <tr>
            <td> Jalur Penerimaan Mahasiswa Baru </td>
            <td><select name="JPMB" id="">
                <option class="hidden" value="Pilih Jalur Penerimaan " select disable >Pilih Jalur Penerimaan </option>
                <option value="Reguler">Jalur Reguler</option>
                <option value="Bidikmisi">Jalur Bidikmisi</option>
                <option value="BeasiswaPeringkat Rapot">Jalur Beasiswa Peringkat Rapot</option>
                <option value="USM">Jalur Beasiswa Ujian Saringan Masuk</option>
                <option value="ASAK ">Jalur Beasiswa Ayo Sekolah Ayo Kuliah</option>
                <option value="Lulusan Terbaik">Jalur Beasiswa Lulusan Terbaik Sekolah</option>
                <option value="Prestasi">Jalur Beasiswa Prestasi Akademik dan Non Akademik</option>
                </td>
        </tr>
        <tr>
            <td> Nama Calon Mahasiswa (sesuai ijazah SMA)  </td>
            <td><input type="text" name="Nama"></td>
        </tr>
        <tr>
            <td> Tempat/ Tanggal Lahir </td>
            <td><input type="text" name="TTL"></td>
        </tr>
        <tr>
            <td> Jenis Kelamin </td>
             <td><select name="JK" id="">
                <option class="hidden" value="Pilih" select disable >Pilih</option>
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
                </td>
        </tr>
        <tr>
            <td> Agama </td>
             <td><select name="Agama" id="">
                <option class="hidden" value="Pilih" select disable >Pilih</option>
                <option value="Islam">Islam</option>
                <option value="Katolik">Katolik</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu ">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Kong Hu Cu">Kong Hu Cu</option>
                </td>
        </tr>
        <tr>
            <td> Status </td>
             <td><select name="Status" id="">
                <option class="hidden" value="Pilih" select disable >Pilih</option>
                <option value="Belum Menikah">Belum Menikah</option>
                <option value="Menikah">Menikah</option>
                <option value="Janda">Duda</option>
                <option value="Duda">Duda</option>
                </td>
        </tr>
        <tr>
            <td> Alamat </td>
            <td><input type="text" name="Alamat"></td>
        </tr>
        <tr>
            <td> Kode Pos </td>
            <td><input type="text" name="KodePos"></td>
        </tr>
        <tr>
            <td> No.Handphone </td>
            <td><input type="text" name="NoHandphone"></td>
        </tr>
        <tr>
            <td> Email </td>
            <td><input type="text" name="Email"></td>
        </tr>
    </table>    
    <h2>DATA SEKOLAH ASAL CALON MAHASISWA</h2>
    <table >
        <tr>
            <td> Asal Sekolah </td>
            <td><input type="text" name="AsalSekolah"></td>
        </tr>
        <tr>
            <td> Tahun Lulus </td>
            <td><input type="text" name="TahunLulus"></td>
        </tr>
    </table>    
    <h2> DATA ORANG TUA CALON MAHASISWA</h2>
    <table>
            <tr>
                <td> Nama Ibu </td>
                <td><input type="text" name="NamaIbu"></td>
            </tr>
            <tr>
                <td> Nama Ayah </td>
                <td><input type="text" name="NamaAyah"></td>
            </tr>
            <tr>
                <td> Alamat </td>
                <td><input type="text" name="Alamat1"></td>
            </tr>
            <tr>
                <td> Kode Pos </td>
                <td><input type="text" name="KodePos1""></td>
            </tr>
            <tr>
                <td> No.Handphone </td>
                <td><input type="text" name="NoHandphone1"></td>
            </tr>
            <tr>
                <td> Pendidikan Terakhir Ayah </td>
                <td><select name="PTA" id="">
                <option class="hidden" value="Pilih" select disable >Pilih</option>
                <option value="Tidak Tamat">A - Tidak Tamat</option>
                <option value="Tamat SD">B - Tamat SD</option>
                <option value="Tamat SMP">C - Tamat SMP</option>
                <option value="Tamat SMA">D - Tamat SMA</option>
                <option value="Diploma ">E - Diploma (D1 - D2)</option>
                <option value="Sarjana D3">F - Sarjana D3</option>
                <option value="Sarjana D4 - S1">G - Sarjana S1</option>
                <option value="Pascasarjana S2">H - Pascasarjana S2</option>                    
                <option value="Doktor S3">I - Doktor S3</option>
                </td>
            </tr>
            <tr>
                <td> Pendidikan Terakhir Ibu </td>
                <td><select  name="PTI" id="">
                    <option class="hidden" value="Pilih" select disable >Pilih</option>
                    <option value="Tidak Tamat">A - Tidak Tamat</option>
                    <option value="Tamat SD">B - Tamat SD</option>
                    <option value="Tamat SMP">C - Tamat SMP</option>
                    <option value="Tamat SMA">D - Tamat SMA</option>
                    <option value="Diploma ">E - Diploma (D1 - D2)</option>
                    <option value="Sarjana D3">F - Sarjana D3</option>
                    <option value="Sarjana D4 - S1">G - Sarjana S1</option>
                    <option value="Pascasarjana S2">H - Pascasarjana S2</option>
                    <option value="Doktor S3">I - Doktor S3</option>
                </td>
            </tr>
            <tr>
                <td> Status Ayah </td>
                <td><select name="SA" id="">
                    <option class="hidden" value="Pilih" select disable >Pilih</option>
                    <option value="Masih Hidup">Masih Hidup</option>
                    <option value="Sudah Meninggal ">Tamat SD</option>
                </td>
            </tr>
            <tr>
                <td> Status Ibu </td>
                <td><select name="SI" id="">
                    <option class="hidden" value="Pilih" select disable >Pilih</option>
                    <option value="Masih Hidup">Masih Hidup</option>
                    <option value="Sudah Meninggal ">Tamat SD</option>
                </td>
            </tr>
            <tr>
                <td> Pekerjaan Ayah </td>
                <td><input type="text" name="PekerjaanAyah" ></td>
            </tr>
            <tr>
                <td> Pekerjaan Ibu </td>
                <td><input type="text" name="PekerjaanIbu" ></td>
            </tr>
    </table>
    <h2> PEMINATAN PROGRAM STUDI </h2>
    <table>
    <tr>
        <td> Pilihan Program Studi 1</td>
         <td><select name="PPS1" id="">
            <option class="hidden" value="Pilih" select disable >Pilih</option>
            <option value="Akutansi">Akutansi</option>
            <option value="Manajemen">Manajemen</option>
            <option value="Psikologi">Psikologi</option>
            <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
            <option value="Desain Produk Industri">Desain Produk Industri</option>
            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
            <option value="Teknik Infformatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Teknik Sipil ">Teknik Sipil</option>
            <option value="Arsitektur">Arsitektur</option>
            </td>
    </tr>
    <tr>
        <td> Pilihan Program Studi 2</td>
         <td><select name="PPS2" id="">
            <option class="hidden" value="Pilih" select disable >Pilih</option>
            <option value="Akutansi">Akutansi</option>
            <option value="Manajemen">Manajemen</option>
            <option value="Psikologi">Psikologi</option>
            <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
            <option value="Desain Produk Industri">Desain Produk Industri</option>
            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
            <option value="Teknik Infformatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Teknik Sipil ">Teknik Sipil</option>
            <option value="Arsitektur">Arsitektur</option>
            </td>
    </tr>
    <tr>
        <td> Sumber Informasi </td>
        <td><input type="radio" name="SumberInformasi" value="Internet">Internet
        <input type="radio" name="SumberInformasi" value="Majalah">Majalah
        <input type="radio" name="SumberInformasi" value="Brosur">Brosur
        <input type="radio" name="SumberInformasi" value="Radio">Radio
        <input type="radio" name="SumberInformasi" value="Spanduk">Spanduk
        <input type="radio" name="SumberInformasi" value="Orang Tua">Orang Tua
        <input type="radio" name="SumberInformasi" value="Teman">Teman
        <input type="radio" name="SumberInformasi" value="Pameran">Pameran
        <input type="radio" name="SumberInformasi" value="Pihak Sekolah">Pihak Sekolah
        <input type="radio" name="SumberInformasi" value="Lainnya">Lainnya.....
    </tr>
    </table>
    <h2> UJIAN SARINGAN MASUK </h2>
    <a2>Lokasi: Kampus UPJ - Jl. Cendrawasih Raya Blok B7/P Bintaro Jaya, 
        Sawah Baru, Ciputat, Tangerang Selatan 15413 Banten, Indonesia.</a2>
    <table>
    <td> Pilihan Gelombang </td>
        <td>
        <input type="radio" name="PG" value="Gelombang 1">Gelombang 1
        <input type="radio" name="PG" value="Gelombang 2">Gelombang 2
        <input type="radio" name="PG" value="Gelombang 3">Gelombang 3
        <input type="radio" name="PG" value="Gelombang 4">Gelombang 4
    <tr>
        <td>
            <button type="submit" name= "submit" value ="submit">Kirim</button
        </td>
    </tr>
    </table>
    </form>
</body>
</html>
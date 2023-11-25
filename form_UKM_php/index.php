<!DOCTYPE html>
<html>
    <head>
        <title>pendaftaranuk.com</title>
    </head>
    <body> 
    
        <img src="https://rekreartive.com/wp-content/uploads/2018/10/Logo-Gunadarma-Universitas-Gunadarma-Original-PNG.png.webp"  width="200px"
        height="200px" > 
        <form action="action.php" method="POST" name="form_ukm" enctype="multipart/form-data">

            <h1>Formulir Pendaftaran Unit Kegiatan Mahasiswa</h1>
          
            <table>
                
                <tr> 
                    <td><label for="npm">NPM</label></td>
                    <td>:</td>
                    <td><input type="text" name="npm" placeholder="1012****" required/></td>
                </tr>    

                <tr>
                    <td><label for="nama">Nama Mahasiswa</label></td>
                    <td>:</td>
                    <td><input type="text" name="nama"  placeholder="Nama lengkap..." required/></td>
                </tr>   
                
                <tr>
                    <td><label for="jenis_Kelamin">Jenis Kelamin</label></td>
                    <td>:</td>
                    <td><input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
                        <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan
        
                </tr>

                <tr>
                    <td><label for="no_hp">No Handphone:</label></td>
                    <td>:</td>
                    <td><input type="text" name="no_hp" placeholder="081*********" required /></td>
                </tr>

                <tr>
                    <td><label for="alamat">Alamat</label></td>
                    <td>:</td>
                    <td><textarea name="alamat" rows="4" cols="50" placeholder="Jl Margonda Raya No 100. Pondok Cina, Depok 16424. Jawa Barat" required ></textarea> </td>
                </tr>


                <tr>
                    <td><label for="fakultas">Fakultas</label></td>
                    <td>:</td>
                    <td><select name="fakultas" required>
                        <option value="" disabled selected>PILIH FAKULTAS</option>
                        <option value="Ilmu Komputer dan Teknologi Informasi">  Ilmu Komputer dan Teknologi Informasi </option>
                        <option value="Ekonomi"> Ekonomi </option>
                        <option value="Teknologi Industri"> Teknologi Industri </option>
                        <option value="Teknik Sipil dan Perencanaan"> Teknik Sipil dan Perencanaan </option>
                        <option value="Psikologi"> Psikologi </option>
                        <option value="Sastra"> Sastra </option>
                        <option value="Komunikasi"> Komunikasi </option>
                    </select></td>
                </tr>
            
                <tr>
                    <td><label for="jurusan">Jurusan</label></td>
                    <td>:</td>
                    <td><select name="jurusan" required>
                        <option value="" disabled selected>PILIH JURUSAN</option>
                        <option value="Teknik Informatika"> Teknik Informatika </option>
                        <option value="Sistem Informasi"> Sistem Informasi</option>
                        <option value="Ilmu Komputer"> Ilmu Komputer</option>
                        <option value="Manajemen"> Manajemen </option>
                        <option value="Akuntansi"> Akuntansi</option>
                        <option value="Ilmu Ekonomi"> Ilmu Ekonomi</option>
                        <option value="Teknik Industri"> Teknik Industri </option>
                        <option value="Teknik Informatika"> Teknik Informatika</option>
                        <option value="Arsitektur"> Arsitektur </option>
                        <option value="Teknik Sipil"> Teknik Sipil</option>
                        <option value="Psikologi"> Psikologi. </option>
                        <option value="Bahasa Inggris"> Bahasa Inggris </option>
                        <option value="Komunikasi"> Komunikasi </option>
                    </select></td>
                </tr>

                <tr>
                    <td><label for="region">Region Kampus</label></td>
                    <td>:</td>
                    <td><select name="region" required>
                        <option value="" disabled selected>PILIH REGION</option>
                        <option value="depok">  Depok </option>
                        <option value="kalimalang"> Kalimalang </option>
                        <option value="karawaci"> Karawaci </option>
                        <option value="salemba"> Salemba </option>
                    </select></td>
                </tr>

                <tr>
                    <td><label for="tingkat">Tingkat</label></td>
                    <td>:</td>
                    <td><select name="tingkat" required>
                        <option value="" disabled selected>PILIH TINGKAT</option>
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="3"> 4 </option>
                    </select></td>
                </tr>
                
                <tr>
                    <td><label for="UK">UK</label></td>
                    <td>:</td>
                    <td><input type="radio" name="uk" value="Badminton" required/> Badminton</td>
                </tr>

                <tr>
                    <td> </td>
                    <td> </td>
                    <td><input type="radio" name="uk" value="Voli"required/> Voli</td>
                </tr>

                <tr>
                    <td> </td>
                    <td> </td>
                    <td> <input type="radio" name="uk" value="Futsal"required/> Futsal</td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> <input type="radio" name="uk" value="Sepak Bola"required/> Sepak Bola</td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> <input type="radio" name="uk" value="Fotografi"required/> Fotografi</td>
                </tr>

                <tr>
                    <td><label for="krs">Upload KRS (PDF):</label></td>
                    <td>:</td>
                    <td><input type="file" name="fileToUpload" required></td>

                    
       
                </tr>

                <tr>
                    <td><input type="Submit" name="Submit" value="Submit"/>  <input type="reset" name ="reset" value="RESET" /></td>
                    <td></td>
                    <td></td>
                </tr>

            </table>


        </form>

    </body>
</html>
<?php 
session_start();
include '../koneksi.php';
$tgl = date('Y-m-d');
//For note, see lockerStatus.php, photoUploadForm.php, photoUploadProcess.php -> 
//Then figure out how to make it able to ulload files at least. Then open camera.
//IT works! -20/03/23. Just figure out how to make it reliable.
?>

    <!doctype html>
    <html>
        <body>
            <div id="logo-container">
                <image id="logo" src="../images/BASE.png"  width="200" height = "120" class="center">
            </div>
            <div id="opening-container">
                <div class="salam">
                    <h3>
                            <div id="nama-user">Hai <?php echo $_SESSION['username'];?></div>
                    </h3>
                </div>  
            </div>

            <form action="../proses/photoUploadProcess.php" method="post" enctype="multipart/form-data">
                <h2>Tolong upload gambar locker untuk laporan</h2>
                <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*" capture="environment">
                <h3>Please specify the location of the incident</h3>
                Kampus:
                <select id="LocKampus" name="LocKampus">
                    <option value="BINUS ASO">BINUS ASO</option>
                </select>
                Ruangan:
                <select id="Ruang" name="Ruang">
                    <option value="Main Hallway">Main Hallway</option>
                </select>
                Locker:
                <select id="Locker" name="Locker">
                    <option value="A">A</option>
                    <option value="C">C</option>
                </select>
                Locker No.:
                <select id="LockerNum" name="LockerNum">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>

                </select>

                <input type="submit" value="Upload Image" name="submit">
            </form>
        </body>
    </html>

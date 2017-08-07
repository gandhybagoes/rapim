<?php
$schema = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
$url = $schema . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
$path = explode("/", $url);

$alamat = $path[0] . '//' . $path[1] . $path[2] . '/' . $path[3] . '/' . $path[4] . '/'; //http://localhost/rapim/camera/
$alamat2 = $path[0] . '//' . $path[1] . $path[2] . '/' . $path[3] . '/'; //http://localhost/rapim/

error_reporting(0);
$token = $_GET['t'];
if ($token == null || $token == "") {
    $token = 0;
    echo "halaman ini tidak bisa di akses";
} else {
    ?>
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
        }

        .img {
            background: #ffffff;
            padding: 12px;
            border: 1px solid #999999;
        }

        .shiva {
            -moz-user-select: none;
            background: #2A49A5;
            border: 1px solid #082783;
            box-shadow: 0 1px #4C6BC7 inset;
            color: white;
            padding: 3px 5px;
            text-decoration: none;
            text-shadow: 0 -1px 0 #082783;
            font: 12px Verdana, sans-serif;
        }
    </style>
    <html>
    <body style="background-color:#dfe3ee;">
    <div id="outer" style="margin:0px; width:100%; height:90px;background-color:#3B5998;">
        <center><h1 style="color: white; font-size: 200%; padding-top: 3px; padding-bottom: 0px">RAPIM TREG-5 SM-1</h1>
        </center>
        <center><p style="color: white; font-size: 150%;">Jawa Timur, Bali & Nusa Tenggara | Mataram, 10-12 Agustus
                2017</p></center>
    </div>
    <div id="main" style="height:800px; width:100%">
        <div id="content" style="float:left; width:500px; margin-left:50px; margin-top:20px;" align="center">
            <script type="text/javascript" src="webcam.js"></script>
            <script language="JavaScript">
                document.write(webcam.get_html(300, 440));
            </script>
            <form>
                <br/>

                <!-- <input type=button value="Ulang" onClick="webcam.reset()" class="shiva"> -->
                <!-- &nbsp;&nbsp; -->
                <center><input type=button value="Ambil Foto Absensi" onClick="take_snapshot()" class="shiva"></center>

            </form>


        </div>

        <script type="text/javascript">
            webcam.set_api_url("<?php echo $alamat?>handleimage.php?t=<?php echo $token?>");
            webcam.set_quality(90); // JPEG quality (1 - 100)
            webcam.set_shutter_sound(true); // play shutter click sound
            webcam.set_hook('onComplete', 'my_completion_handler');

            function take_snapshot() {
                // take snapshot and upload to server
                document.getElementById('img').innerHTML = '<h1>Uploading...</h1>';

                webcam.snap();
            }

            function my_completion_handler(msg) {
                // extract URL out of PHP output
                if (msg.match(/(http\:\/\/\S+)/)) {
                    // show JPEG image in page

                    document.getElementById('img').innerHTML = '<h3>Upload Successfuly done</h3>' + msg;

                    document.getElementById('img').innerHTML = "<img src=" + msg + " class=\"img\">";


                    // reset camera for another shot
                    //webcam.reset();
                    window.location.href = "<?php echo $alamat2?>index.php/proses/thx/1?nik=<?php echo $token?>";
                }
                else {
                    alert("Error occured we are trying to fix now: " + msg);
                }
            }
        </script>

        <div id="img" style=" height:800px; width:500px; float:left; margin-left:40px; margin-top:20px;">
        </div>
    </div>
    </body>
    </html>
<?php } ?>
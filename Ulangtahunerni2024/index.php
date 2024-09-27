<?php date_default_timezone_set('Asia/Jakarta'); if(isset($_POST['pesan'])){ $fp = fopen('p.txt', 'a'); fwrite($fp, '
<div class="cp"><p><span>Pesan :</span><br />'.$_POST['pesan'].'</p><h6>'.date("d-M-Y (H:i)").'</h6></div>'); echo json_encode(array("s"=>200)); fclose($fp); die; } if(isset($_POST['d'])){ $fa = fopen('p.txt', 'a'); fwrite($fa,$_POST['d']); echo json_encode(array("s"=>200)); fclose($fa); die; } if(isset($_GET['d'])){ $fa = fopen('p.txt', 'a'); fclose($fa); $fr = fopen('p.txt', 'r'); echo json_encode(array("d"=>fgets($fr))); fclose($fr); die; } ?> <!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8" /> <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <title>ultah erni 2024</title> <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script> <script src="https://dekatutorial.github.io/crd/s.js"></script> <link rel="stylesheet" type="text/css" href="https://dekatutorial.github.io/crd/s.css" /> </head> <body> <?php if(isset($_GET['pesan'])){ echo "<div id='ccp'>"; $fp = fopen('p.txt', 'r'); fgets($fp); while(!feof($fp)){ echo "".fgets($fp); } fclose($fp); echo "</div></body></html>"; die; } ?> <script>dt()</script>
    <div class="ctnr">
      <div class="lv">
        <img src="https://dekatutorial.github.io/crd/lv.svg" />
        <p>Klik Love-nya</p>
      </div>
      <div class="ctn">
        <button class="btn next">[ Lanjut ]</button>
        <button class="btn send">[ Kirim Pesan ]</button>
      </div>
    </div>
<script>
konten = [
  {
    gambar: "Stiker 3 (SFILE.MOBI).gif",
    ucapan: "Happy birthday Erni triana",
  },
  {
    gambar: "Stiker 16 (SFILE.MOBI).gif",
    ucapan: "semoga panjang umur",
  },
  {
    gambar: "Stiker 7 (SFILE.MOBI).gif",
    ucapan: "semoga sehat selalu yaa",
  },
  {
    gambar: "Stiker 20 (SFILE.MOBI).gif",
    ucapan: "kira kira apa harapan kamu di umur ke 21 tahun ini?",
  },
  {
    ucapan: "harapan ku ...",
  },
  {
    ucapan: "Hari ini, aku panjatkan semua doa terbaik ku untuk mu, semoga hal hal yang membuatmu runtuh turut menjadi alasan kamu untuk tumbuh, semoga dunia senantiasa menjaga mu dimanapun kamu berada, semoga hari harimu selalu di iringi dengan cinta yang tidak pernah ada btasnya, dan semoga senyum kedua orang tua kamu yang selalu kamu usahakan itu kini sudah terlaksana",
  },
    {
      ucapan: "Hmm, apalagi yaa...",
    },
  {
    ucapan: "sekali lagi, selamat ulang tahun yaa",
  },
  {
    ucapan: "udah itu aja",
  },
  {
    ucapan: "....",
  },
  {
    ucapan: "wkwk, masih kepo yaa, yasudah ditunggu pesan balasnya yaa",
  },
  {
    gambar: "Stiker 31 (SFILE.MOBI).gif",
    ucapan: "kalo dikosongin dia gamau lanjut ke link selanjutnya lohh.. coba deh",
  },
];

musik = "music.m4a";
nomorWhatsapp = "6282131411137";

/*=========================*/
</script><script> DekaTutorial(konten, musik, nomorWhatsapp); </script> </body> </html>

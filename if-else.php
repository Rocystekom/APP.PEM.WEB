
    <form action="" method="POST">
      PROGRAM CEK KELULUSAN<br>
      Nilai Ujian : <input type="text" name="nilai">
      <input type="submit" value="Hasil">
    </form>
    <?php
    //form action akan diproses dan mengarah pada file ini sendiri karena menggunakan "" 
      if ($_POST)//POST adalah proses menghidden hasil cara kerja form ini diURL web browser
      {
        $nilai = $_POST['nilai'];
        if ($nilai >= 90)
        {
          $grade = "A+";
          $keterangan = "LULUS";
        }
        elseif ($nilai >= 80)// "nilai" adalah variabel yang dideklarasikan untuk memproses angka 
        {
          $grade = "A";
          $keterangan = "LULUS";
        }
        elseif ($nilai >= 70)
        {
          $grade = "B";
          $keterangan = "LULUS";
        }
        elseif ($nilai >= 60)
        {
          $grade = "C";
          $keterangan = "LULUS";
        }
        else
        {
          $grade = "D";
          $keterangan = "TIDAK LULUS";
        }
        echo "Hasil Kelulusan";
        echo "<br>";
        echo "Nilai : " . $nilai;
        echo "<br>";
        echo "Keterangan : " . $keterangan;
        echo "<br>";
        echo "Indeks Prestasi : " . $grade;
        echo "<hr>";
        echo "Hasanal Kurnia";

      }
    ?>
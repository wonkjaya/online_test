<?php
$subject=$this->m_oltest->select_subject_name($c->get_session('subject'));
$class=strtoupper($c->get_session('class'));
?>
    <div class="banner">
	      <table style="width:100%;text-align:justify;">
		      <tr>
			      <td>
			      <?php
			       echo "Halo ".$c->get_username()."!!!
			       <p>
			        Anda Memutuskan Untuk mencoba mengerjakan soal \" ".$subject." \" Kelas \"".$class."\"
			        dengan jumlah soal <i>".$datas."</i> butir Soal Pilihan Ganda. <p>
			        Setiap halaman terdiri atas 5 soal dan anda harus memilih salah satu pilihan jawaban yang paling benar 
			        dan nilai akan kami tampilkan jika semua soal sudah terjawab.
			       </p> ";
			      ?>
			      <hr>
			      </td>
			      </tr><tr>
			      <td style="text-align:right">
			      <?php
			       echo anchor('','<button type="button" class="btn btn-danger">Tolak</button>').nbs();
			       echo anchor('','<button type="button" class="btn btn-primary">Lanjut</button>');
			      ?>
			      </td>
		      </tr>
	      </table>
    </div>
 
</div>
</div>
<!-- -->

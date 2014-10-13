<style>
.tooltipsy
    {
        padding: 10px;
        max-width: 200px;
        color: #303030;
        background-color: #f5f5b5;
        border: 1px solid #deca7e;
    }
</style>
<script src="<?php echo get_js('tooltip/tooltipsy.min.js'); ?>"></script>
 <?php
  foreach($datas->result() as $row){
	  $subject=$row->subject_code;
	  $class=$row->class_code;
  }
  $ctrl->set_session('mapel',"$subject-$class");
  ?>

<table class="table table-hover">
 <tr>
  <th>No</th>
  <th>Soal</th>
  <th>A</th>
  <th>B</th>
  <th>C</th>
  <th>D</th>
  <th>E</th>
  <th>Jawaban</th>
  <th><?php echo anchor(get_site_url("new_exam"),button("button","New","class='btn btn-warning' style='width:74px;margin-bottom:2px;'")); ?></th>
 </tr>
 <tr>
  <td></td>
  <td colspan="8"></td>
 </tr>
 <?php
  $n=1;
  foreach($datas->result() as $row){
  $ID=$row->exam_ID;
  $subject=$row->subject_code;
  $class=$row->class_code;
  $content=$row->exam_content;
  $a=$row->a;
  $b=$row->b;
  $c=$row->c;
  $d=$row->d;
  $e=$row->e;
  $correct=ucfirst($row->answer);
  if($n%2== 0){$bg="background:#E4E4E4";}else{$bg="";}
 ?>
 <?php 	
	 echo "<tr style=".$bg.">";
 	  echo "<td class='tip' title='Soal No. $n'> $n</td>";
	  echo "<td class='tip' title='$content'>".substr($content,0,20)."...</td>";
	  echo "<td class='tip' title='$a'>".substr($a,0,20)."...</td>";
	  echo "<td class='tip' title='$b'>".substr($b,0,20)."...</td>";
	  echo "<td class='tip' title='$c'>".substr($c,0,20)."...</td>";
	  echo "<td class='tip' title='$d'>".substr($d,0,20)."...</td>";
	  echo "<td class='tip' title='$e'>".substr($e,0,20)."...</td>";
	  echo "<td>$correct</td>";
 ?>
	  <td>
		<?php echo anchor(get_site_url("edit_exam/".$ID),button("button","Edit","class='btn btn-primary' style='width:74px;margin-bottom:2px;'")); ?>
		<?php echo anchor(get_site_url("delete_exam/".$ID),button("button","Hapus","class='btn btn-danger' ")); ?>
	  </td>
	 </tr>
 <?php
 $n++;
 }
 ?>
 <tr>
	  <td colsan=7></td>
 </tr>

</table>
<script>
	$(".tip").tooltipsy();
</script>
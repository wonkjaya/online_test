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
  $ctrl->set_session('mapel',"$subject-$class");
  }
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
  $n=$page;
 if($n == 0)$n=1; else $n += 1;
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
  if (strlen($content) > 20 ){$content=substr($content,0,20).'...';}
  if (strlen($a) > 20 ){$a=substr($a,0,20).'...';}
  if (strlen($b) > 20 ){$b=substr($b,0,20).'...';}
  if (strlen($c) > 20 ){$c=substr($c,0,20).'...';}
  if (strlen($d) > 20 ){$d=substr($d,0,20).'...';}
  if (strlen($e) > 20 ){$e=substr($e,0,20).'...';}
  $correct=ucfirst($row->answer);
  if($n%2== 0){$bg="ba	ckground:#E4E4E4";}else{$bg="";}
 ?>
 <?php 	
	 echo "<tr style=".$bg.">";
 	  echo "<td class='tip' title='Soal No. $n'> $n</td>";
	  echo "<td class='tip' title='$content'>".$content."</td>";
	  echo "<td class='tip' title='$a'>".$a."</td>";
	  echo "<td class='tip' title='$b'>".$b."</td>";
	  echo "<td class='tip' title='$c'>".$c."</td>";
	  echo "<td class='tip' title='$d'>".$d."</td>";
	  echo "<td class='tip' title='$e'>".$e."</td>";
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
	  <td colspan=5 class="pagination" style="text-align:right;">
	  	<ul class="pagination">
		  <li><a href="?p=">&laquo;</a></li>
		  <?php
		 $tot=$record_total/10;
		 $y=$record_total%10;
		 if($y > 0){$actv=($n%10);}else{$actv=1;}
		  $class="";
		  for($a=1;$a<=$tot;$a++){
		  	if($a == $active_page)$class="active";
		  	echo "<li class=".$class.">".anchor($this->uri->uri_string()."?p=$a","$a")."</li>";
		  	$class="";
		  }
		  if($y > 0){
			if($active_page == $a)$class="active";
		  	echo "<li class=$class>".anchor($this->uri->uri_string()."?p=".$a,$a)."</li>";}
		  ?>
		  <li><a href="#">&raquo;</a></li>
		</ul>
	  </td>
 </tr>

</table>
<script>
	$(".tip").tooltipsy();
</script>

<style>
    body { font-size: 62.5%; }
    label, input { display:block; }
    input.text { margin-bottom:12px; width:95%; padding: .4em; }
    fieldset { padding:0; border:0; margin-top:25px; }
    h1 { font-size: 1.2em; margin: .6em 0; }
    div#users-contain { width: 350px; margin: 20px 0; }
    div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
    div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
    .ui-dialog .ui-state-error { padding: .3em; }
    .validateTips { border: 1px solid transparent; padding: 0.3em; }
  </style>
  <script>
  $(function() {
    $( "#dialog-form" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 100
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
 
    $( "#opener" ).click(function() {
      $( "#dialog-form" ).dialog( "open" );
    });
  });
</script>
	<!-- start banner -->
    <div class="banner">
    	 <img src="<?php echo get_image('banner.png');?>" alt="" />
    	 <h2>Ayo Mulai Ujian Sekarang</h2>
    	 <h3>Kerjakan soal...Dapatkan Nilai Terbaikmu!</h3>
    </div>
    <!-- start content -->
	 <div class="main">
	 	 <div class="content">
	 	 	<h2>Pilih Sesi</h2>
	 	 </div>
	 	 <table border=1 style="border:0px solid; width:100%; height:300px;" >
	 	 <tr>
	 	  <td>
	 	   <div class="grid_1_of_4 images_1_of_4" style="width:200px; height:300px;">
			<a href="<?php echo get_site_url();?>">
			<img src="<?php echo get_image('pic2.jpg');?>"" title="Project1" alt=""/></a>
			 <h3><a href="<?php echo get_site_url();?>">Referensi</a></h3>
			 <p style="text-align:center;"></p>
		   </div>
		  </td>
		  <td>
	 	   <div class="grid_1_of_4 images_1_of_4" style="width:200px; height:300px;" id="opener">
			<a href="#<?php echo get_site_url();?>">
			 <img src="<?php echo get_image('pic1.jpg');?>"" title="Project1" alt=""/></a>
			 <h3><a href="<?php echo get_site_url();?>">Start Ujian</a></h3>
			 <p style="text-align:center;"></p>
		   </div>
		  </td>
		  <td>
	 	   <div class="grid_1_of_4 images_1_of_4" style="width:200px; height:300px;">
			<a href="<?php echo get_site_url();?>"><img src="<?php echo get_image('pic3.jpg');?>"" title="Project1" alt=""/></a>
			 <h3><a href="<?php echo get_site_url();?>">Nilai Ujian</a></h3>
			 <p style="text-align:center;"></p>
		   </div>
		  </td>
		  <td>
	 	   <div class="grid_1_of_4 images_1_of_4" style="width:200px; height:300px;">
			<a href="<?php echo get_site_url();?>"><img src="<?php echo get_image('pic4.jpg');?>"" title="Project1" alt=""/></a>
			 <h3><a href="<?php echo get_site_url();?>" style="text-indent:20px;">Forum Diskusi</a></h3>
			 <p style="text-align:center;"></p>
		   </div>
		  </td>
		 </tr>
		 </table>

 	 </div>
</div>
</div>
 <div id="dialog-form" title="Create new user">
  <p class="validateTips">All form fields are required.</p>
 
  <form>
    <fieldset>
      <label for="name">Name</label>
      <input type="text" name="name" id="name" value="Jane Smith" class="text ui-widget-content ui-corner-all">
      <label for="email">Email</label>
      <input type="text" name="email" id="email" value="jane@smith.com" class="text ui-widget-content ui-corner-all">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" value="xxxxxxx" class="text ui-widget-content ui-corner-all">
 
      <!-- Allow form submission with keyboard without duplicating the dialog button -->
      <input type="submit" tabindex="-1" style="">
    </fieldset>
  </form>
 </div>

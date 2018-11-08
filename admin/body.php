<?php
$result1 = $mysqli->query("SELECT * FROM tbl_about ORDER BY SN DESC LIMIT 1");
$row1 = $result1->fetch_assoc();
$sn = $row1['sn'];
if(isset($_POST['subbtn_ok']))
	{

		$title = $_POST['title'];
		$details = $_POST['details'];
		$text_one = $_POST['text_one'];
		$text_two = $_POST['text_two'];
		$text_three = $_POST['text_three'];
		$text_four = $_POST['text_four'];

			$sql ="UPDATE `tbl_about` SET `title`='$title',`detail`='$details',`text_one`='$text_one',`text_two`='$text_two',`text_three`='$text_three',`text_four`='$text_four'
			WHERE `sn` = $sn";

			$res=mysqli_query($mysqli,$sql);
			if($res)
			
				{	
					echo "record inserted successfuly";
				}
				else
				{
					echo "error occure on data inserting";
				}
	}

//-------------------- service-----------------
$result_service = $mysqli->query("SELECT * FROM tbl_service ORDER BY SN DESC LIMIT 1");
$row_service = $result_service->fetch_assoc();
$sn_service = $row_service['sn'];
if(isset($_POST['subbtn_service']))
	{

		$title_service = $_POST['title_service'];
		$text_one_service = $_POST['text_one_service'];
		$text_one_details = $_POST['text_one_details'];
		$text_two_service = $_POST['text_two_service'];
		$text_two_details = $_POST['text_two_details'];
		$text_three_service = $_POST['text_three_service'];
		$text_three_details = $_POST['text_three_details'];

		if($row_service['sn']=="")
		{
			//echo "insert";
			$sql_service="INSERT INTO tbl_service (`title`,`text_one`,`text_one_details`,`text_two`,`text_two_details`,`text_three`,`text_three_details`)
			VALUES ('$title_service','$text_one_service','$text_one_details','$text_two_service','$text_two_details','$text_three_service','$text_three_details')";
			$res_service=mysqli_query($mysqli,$sql_service);
			//$res=mysqli_query($mysqli,$sql);
			if($res_service)
			
				{	
					echo "record inserted successfuly";
				}
				else
				{
					echo "error occure on data inserting";
				}
		}
		else
		{
			//echo "update";
			$sql ="UPDATE `tbl_service` SET `title`='$title_service',`text_one`='$text_one_service',`text_one_details`='$text_one_details',`text_two`='$text_two_service',`text_two_details`='$text_two_details',`text_three`='$text_three_service',`text_three_details`='$text_three_details'
			WHERE `sn` = $sn_service";

			$res=mysqli_query($mysqli,$sql);
			if($res)
			
				{	
					echo "record update successfuly";
				}
				else
				{
					echo "error occure on data updating";
				}

		}
	}




	//-------------------- skills -----------------
$result_skill = $mysqli->query("SELECT * FROM tbl_skill ORDER BY SN DESC LIMIT 1");
$row_skill = $result_skill->fetch_assoc();
$sn_skill = $row_skill['sn'];
if(isset($_POST['subbtn_skill']))
	{

		$title_skill = $_POST['title_skill'];
		$text_details_skill = $_POST['text_details_skill'];

		if($row_skill['sn']=="")
		{
			//echo "insert";
			$sql_skill="INSERT INTO tbl_skill (`title`,`details`)
			VALUES ('$title_skill','$text_details_skill')";
			$res_skill=mysqli_query($mysqli,$sql_skill);
			//$res=mysqli_query($mysqli,$sql);
			if($res_skill)
			
				{	
					echo "record inserted successfuly";
				}
				else
				{
					echo "error occure on data inserting";
				}
		}
		else
		{
			//echo "update";
			$sql_skill_update ="UPDATE `tbl_skill` SET `title`='$title_skill',`details`='$text_details_skill'
			WHERE `sn` = $sn_skill";

			$res_skill_update=mysqli_query($mysqli,$sql_skill_update);
			if($res_skill_update)
			
				{	
					echo "record update successfuly";
				}
				else
				{
					echo "error occure on data updating";
				}

		}
	}




	//-------------------- education -------------------------------
$result_edu = $mysqli->query("SELECT * FROM tbl_education ORDER BY SN DESC LIMIT 1");
$row_edu = $result_edu->fetch_assoc();
$sn_edu = $row_edu['sn'];
if(isset($_POST['subbtn_edu']))
	{

		$title_edu = $_POST['title_skill'];
		$text_details_skill = $_POST['text_details_skill'];
		$title_service = $_POST['title_service'];
		$text_one_service = $_POST['text_one_service'];
		$text_one_details = $_POST['text_one_details'];
		$text_two_service = $_POST['text_two_service'];
		$text_two_details = $_POST['text_two_details'];
		$text_three_service = $_POST['text_three_service'];
		$text_three_details = $_POST['text_three_details'];

		if($row_skill['sn']=="")
		{
			//echo "insert";
			$sql_skill="INSERT INTO tbl_skill (`title`,`details`)
			VALUES ('$title_skill','$text_details_skill')";
			$res_skill=mysqli_query($mysqli,$sql_skill);
			//$res=mysqli_query($mysqli,$sql);
			if($res_skill)
			
				{	
					echo "record inserted successfuly";
				}
				else
				{
					echo "error occure on data inserting";
				}
		}
		else
		{
			//echo "update";
			$sql_skill_update ="UPDATE `tbl_skill` SET `title`='$title_skill',`details`='$text_details_skill'
			WHERE `sn` = $sn_skill";

			$res_skill_update=mysqli_query($mysqli,$sql_skill_update);
			if($res_skill_update)
			
				{	
					echo "record update successfuly";
				}
				else
				{
					echo "error occure on data updating";
				}

		}
	}


?>

	<div id="colorlib-page">
		<div class="container-wrap">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<div class="text-center">
				<div class="author-img" style="background-image: url(./images/me.jpg);"></div>
				<h1 id="colorlib-logo"><a href="index.html">Jackson Ford</a></h1>
				<span class="position"><a href="#">UI/UX/Designer</a> in Philippines</span>
			</div>
			<nav id="colorlib-main-menu" role="navigation" class="navbar">
				<div id="navbar" class="collapse">
					<ul>
						<li class="active"><a href="#" data-nav-section="home">Home</a></li>
						<li><a href="#" data-nav-section="about">About</a></li>
						<li><a href="#" data-nav-section="services">Services</a></li>
						<li><a href="#" data-nav-section="skills">Skills</a></li>
						<li><a href="#" data-nav-section="education">Education</a></li>
						<li><a href="#" data-nav-section="experience">Experience</a></li>
						<li><a href="#" data-nav-section="work">Work</a></li>
						<li><a href="#" data-nav-section="blog">Blog</a></li>
						<li><a href="#" data-nav-section="contact">Contact</a></li>
					</ul>
				</div>
			</nav>

			<div class="colorlib-footer">
				<p><small>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </span> <span>Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash.com</a></span></small></p>
				<ul>
					<li><a href="#"><i class="icon-facebook2"></i></a></li>
					<li><a href="#"><i class="icon-twitter2"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
					<li><a href="#"><i class="icon-linkedin2"></i></a></li>
				</ul>
			</div>

		</aside>

		<div id="colorlib-main">

			<section class="colorlib-home" data-section="home">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-12">
							










							
							this is home page 
						</div>
					</div>
				</div>
			</section>

<!--    ===================== about page ======================    -->
			<section class="colorlib-about" data-section="about" style="padding-top: 3em;padding-bottom: 4em;">
				<div class="colorlib-narrow-content">
				<div class="row">
				<div class="col-md-12">
							
					<div class="box box-primary">
		            <div class="box-header with-border">
				    </div>
				    		<span class="heading-meta">ABOUT</span>
				            <!-- form start -->
				            <form role="form" method="post">
				              <div class="box-body">
				                <div class="form-group">
				                  <label for="exampleInputEmail1">Title</label>
				                 <input type="text" class="form-control" name="title" value="<?php echo $row1['title'];?>" >
				                </div>
				                
				                <div class="form-group">
				                  <label>Details</label>
				                  <textarea class="ckeditor"  rows="6" name="details"><?php echo $row1['detail'];?></textarea>
				                  
				                </div>


				                <div class="form-group">
				                  <label for="exampleInputEmail1">Text One</label>
				                 <input type="text" class="form-control" name="text_one" value="<?php echo $row1['text_one'];?>" >
				                </div>
				                <div class="form-group">
				                  <label for="exampleInputEmail1">Text Two</label>
				                 <input type="text" class="form-control" name="text_two" value="<?php echo $row1['text_two'];?>">
				                </div>
				                <div class="form-group">
				                  <label for="exampleInputEmail1">Text Three</label>
				                 <input type="text" class="form-control" name="text_three" value="<?php echo $row1['text_three'];?>">
				                </div>
				                <div class="form-group">
				                  <label for="exampleInputEmail1">Text Four</label>
				                 <input type="text" class="form-control" name="text_four" value="<?php echo $row1['text_four'];?>">
				                </div>
				                <!-- /.box-body -->

				              <div class="box-footer">
				                <!--<button type="submit" class="btn btn-primary">Submit</button>-->
				                <input type="submit" class="btn btn-primary" name="subbtn_ok" value="save" />
				              </div>
				          </div>
				            </form>
				    </div>

				</div>
				</div>
				</div>
			</section>
<!--    ===================== ./about page ======================    -->


<!--    ===================== SERVICE page ======================    -->
			<section class="colorlib-services" data-section="services" style="padding-top: 3em;padding-bottom:4em;">
				<div class="colorlib-narrow-content">
						<div class="row">
						<div class="col-md-12">

							<span class="heading-meta">SERVICE</span>
							<!-- form start -->
				            <form role="form" method="post">
				              <div class="box-body">
				                <div class="form-group">
				                  <label for="exampleInputEmail1">Title</label>
				                 <input type="text" class="form-control" name="title_service" value="<?php if($row_service['sn']==''){echo 'plz insert value!!!';}else{echo $row_service['title'];}?>" >
				                </div>
				                
				                

				                <div class="form-group">
				                  <label for="exampleInputEmail1">Text One</label>
				                 <input type="text" class="form-control" name="text_one_service" value="<?php if($row_service['sn']==''){echo 'plz insert value!!!';}else{echo $row_service['text_one'];}?>">
				                </div>
				                <div class="form-group">
				                  <label>Details</label>
				                  <textarea class="form-control"  rows="6" name="text_one_details"><?php if($row_service['sn']==''){echo 'plz insert value!!!';}else{echo $row_service['text_one_details'];}?></textarea>
				                </div>



				                <div class="form-group">
				                  <label for="exampleInputEmail1">Text Two</label>
				                 <input type="text" class="form-control" name="text_two_service" value="<?php if($row_service['sn']==''){echo 'plz insert value!!!';}else{echo $row_service['text_two'];}?>" >
				                </div>
				                <div class="form-group">
				                  <label>Details</label>
				                  <textarea class="form-control"  rows="6" name="text_two_details"><?php if($row_service['sn']==''){echo 'plz insert value!!!';}else{echo $row_service['text_two_details'];}?></textarea>
				                </div>



				                <div class="form-group">
				                  <label for="exampleInputEmail1">Text three</label>
				                 <input type="text" class="form-control" name="text_three_service" value="<?php if($row_service['sn']==''){echo 'plz insert value!!!';}else{echo $row_service['text_three'];}?>" >
				                </div>
				                <div class="form-group">
				                  <label>Details</label>
				                  <textarea class="form-control"  rows="6" name="text_three_details"><?php if($row_service['sn']==''){echo 'plz insert value!!!';}else{echo $row_service['text_three_details'];}?></textarea>
				                </div>

				                <!-- /.box-body -->

				              <div class="box-footer">
				                <!--<button type="submit" class="btn btn-primary">Submit</button>-->
				                <input type="submit" class="btn btn-primary" name="subbtn_service" value="<?php if($row_service['sn']==''){echo 'save';}else{echo 'update';}?>" />
				              </div>
				          </div>
				            </form>


						</div>
					</div>	
				</div>
			</section>
<!--    ===================== ./SERVICE page ======================    -->


<!--    ===================== skills page ======================    -->
			<section class="colorlib-skills" data-section="skills" style="padding-top: 3em;padding-bottom:4em;">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-12">
						<span class="heading-meta">My Specialty</span>
								<!-- form start -->
				            <form role="form" method="post">
				              <div class="box-body">
				                <div class="form-group">
				                  <label for="exampleInputEmail1">Title</label>
				                 <input type="text" class="form-control" name="title_skill" value="<?php if($row_skill['sn']==''){echo 'plz insert value!!!';}else{echo $row_skill['title'];}?>" >
				                </div>
				                
				                <div class="form-group">
				                  <label>Details</label>
				                  <textarea class="form-control"  rows="6" name="text_details_skill"><?php if($row_skill['sn']==''){echo 'plz insert value!!!';}else{echo $row_skill['details'];}?></textarea>
				                </div> 

				                <!-- /.box-body -->

				              <div class="box-footer">
				                <!--<button type="submit" class="btn btn-primary">Submit</button>-->
				                <input type="submit" class="btn btn-primary" name="subbtn_skill" value="<?php if($row_skill['sn']==''){echo 'save';}else{echo 'update';}?>" />
				              </div>
				          </div>
				            </form>
						</div>
					</div>	
				</div>
			</section>
<!--    ===================== ./skills page ======================    -->


<!--    ===================== education page ======================    -->
			<section class="colorlib-education" data-section="education">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-12">
						<span class="heading-meta">Education</span>

							<form role="form" method="post">
				              <div class="box-body">
				                <div class="form-group">
				                  <label for="exampleInputEmail1">Title</label>
				                 <input type="text" class="form-control" name="title_skill" value="<?php if($row_skill['sn']==''){echo 'plz insert value!!!';}else{echo $row_skill['title'];}?>" >
				                </div>
				                

				                <div class="form-group">
				                <label for="exampleInputEmail1">Title One</label>
				                 <input type="text" class="form-control" name="title_skill" value="<?php if($row_skill['sn']==''){echo 'plz insert value!!!';}else{echo $row_skill['title'];}?>" >
				                </div>
				                <div class="form-group">
				                  <label>Details</label>
				                  <textarea class="form-control"  rows="6" name="text_details_skill"><?php if($row_skill['sn']==''){echo 'plz insert value!!!';}else{echo $row_skill['details'];}?></textarea>
				                </div> 


				                <div class="form-group">
				                <label for="exampleInputEmail1">Title Two</label>
				                 <input type="text" class="form-control" name="title_skill" value="<?php if($row_skill['sn']==''){echo 'plz insert value!!!';}else{echo $row_skill['title'];}?>" >
				                </div>
				                <div class="form-group">
				                  <label>Details</label>
				                  <textarea class="ckeditor"  rows="6" name="text_details_two_edu"><?php if($row_skill['sn']==''){echo 'plz insert value!!!';}else{echo $row_skill['details'];}?></textarea>
				                </div>


				                <div class="form-group">
				                <label for="exampleInputEmail1">Title Three</label>
				                 <input type="text" class="form-control" name="title_skill" value="<?php if($row_skill['sn']==''){echo 'plz insert value!!!';}else{echo $row_skill['title'];}?>" >
				                </div>
				                <div class="form-group">
				                  <label>Details</label>
				                  <textarea class="form-control"  rows="6" name="text_details_skill"><?php if($row_skill['sn']==''){echo 'plz insert value!!!';}else{echo $row_skill['details'];}?></textarea>
				                </div>


				                <div class="form-group">
				                <label for="exampleInputEmail1">Title Four</label>
				                 <input type="text" class="form-control" name="title_skill" value="<?php if($row_skill['sn']==''){echo 'plz insert value!!!';}else{echo $row_skill['title'];}?>" >
				                </div>
				                <div class="form-group">
				                  <label>Details</label>
				                  <textarea class="form-control"  rows="6" name="text_details_skill"><?php if($row_skill['sn']==''){echo 'plz insert value!!!';}else{echo $row_skill['details'];}?></textarea>
				                </div>



				                <div class="form-group">
				                <label for="exampleInputEmail1">Title Five</label>
				                 <input type="text" class="form-control" name="title_skill" value="<?php if($row_skill['sn']==''){echo 'plz insert value!!!';}else{echo $row_skill['title'];}?>" >
				                </div>
				                <div class="form-group">
				                  <label>Details</label>
				                  <textarea class="form-control"  rows="6" name="text_details_skill"><?php if($row_skill['sn']==''){echo 'plz insert value!!!';}else{echo $row_skill['details'];}?></textarea>
				                </div>





				                <!-- /.box-body -->

				              <div class="box-footer">
				                <!--<button type="submit" class="btn btn-primary">Submit</button>-->
				                <input type="submit" class="btn btn-primary" name="subbtn_edu" value="<?php if($row_skill['sn']==''){echo 'save';}else{echo 'update';}?>" />
				              </div>
				          </div>
				            </form>

						</div>
					</div>		
				</div>
			</section>
<!--    ===================== ./education page ======================    -->



			<section class="colorlib-experience" data-section="experience">
				<div class="colorlib-narrow-content">
						this is experience page		
				</div>
			</section>

			<section class="colorlib-work" data-section="work">
				<div class="colorlib-narrow-content">
						this is work page		
				</div>
			</section>
  	
			
			<section class="colorlib-blog" data-section="blog">
				<div class="colorlib-narrow-content">
						this is blog page		
				</div>
			</section>
			
			
			
			<section class="colorlib-contact" data-section="contact">
				<div class="colorlib-narrow-content">
						this is contact page		
				</div>
			</section>
			


			

			

			
		</div><!-- end:colorlib-main -->
	</div><!-- end:container-wrap -->
	</div><!-- end:colorlib-page -->




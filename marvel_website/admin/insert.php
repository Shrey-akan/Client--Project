<?php 
include('../connection.php');
// Admin
if (!empty($_POST['admin'])) {
			$email = $_POST['email']; 
			$password = $_POST['password'];
			
			// $image = $_FILES['image']['name'];
			// $temp = $_FILES['image']['tmp_name'];
			// $folder="uploads/admin/".$image;

			$insert = "INSERT INTO `admin_login`(`email`, `password`) VALUES ('$email','$password')";
			$res=mysqli_query($con,$insert);

			if ($res == true) {
				// Now let's move the uploaded image into the folder: image
		        // if (move_uploaded_file($temp,$folder))  
		        // {
		            $_SESSION['status'] ="Data Inserted";
					$_SESSION['status_code'] = "success";
					header('location:admin.php');
		        // }
		        // else{
		        //     $_SESSION['status'] ="Image Not Inserted";
				// 	$_SESSION['status_code'] = "error";
				// 	header('location:admin.php');
		      	// }
				
			}
			else
			{
				$_SESSION['status'] ="Data Not Inserted";
				$_SESSION['status_code'] = "error";
				header('location:admin.php');
			}

	}
// // lOGO
// 		if (!empty($_POST['logo'])) {
			
// 			$image = $_FILES['image']['name'];
// 			$temp = $_FILES['image']['tmp_name'];
// 			$folder="uploads/logo/".$image;
// 			$insert = "INSERT INTO `logo`(`image`) VALUES ('$image')";
// 			$res=mysqli_query($con,$insert);

// 			if ($res == true) {
// 				// Now let's move the uploaded image into the folder: image
// 		        if (move_uploaded_file($temp,$folder))  
// 		        {
// 		            $_SESSION['status'] ="Data Inserted";
// 					$_SESSION['status_code'] = "success";
// 					header('location:logo.php');
// 		        }
// 		        else{
// 		            $_SESSION['status'] ="Image Not Inserted";
// 					$_SESSION['status_code'] = "error";
// 					header('location:logo.php');
// 		      	}
// 			}
// 			else
// 			{
// 				$_SESSION['status'] ="Data Not Inserted";
// 				$_SESSION['status_code'] = "error";
// 				header('location:logo.php');
// 			}
// 		}	
// // Silder
// if (!empty($_POST['silder'])) {
// 			$title = $_POST['title']; 
// 			$sub_title = $_POST['sub_title'];
// 			$details = $_POST['details'];
// 			$image = $_FILES['image']['name'];
// 			$temp = $_FILES['image']['tmp_name'];
// 			$folder="uploads/silder/".$image;

// 			$insert = "INSERT INTO `silder`(`title`, `sub_title`,`details`, `image`) VALUES ('$title','$sub_title','$details','$image')";
// 			$res=mysqli_query($con,$insert);

// 			if ($res == true) {
// 				// Now let's move the uploaded image into the folder: image
// 		        if (move_uploaded_file($temp,$folder))  
// 		        {
// 		            $_SESSION['status'] ="Data Inserted";
// 					$_SESSION['status_code'] = "success";
// 					header('location:silder.php');
// 		        }
// 		        else{
// 		            $_SESSION['status'] ="Image Not Inserted";
// 					$_SESSION['status_code'] = "error";
// 					header('location:silder.php');
// 		      	}
				
// 			}
// 			else
// 			{
// 				$_SESSION['status'] ="Data Not Inserted";
// 				$_SESSION['status_code'] = "error";
// 				header('location:silder.php');
// 			}

// 	}

// // Offerr
// if (!empty($_POST['offer'])) {
// 			$title = $_POST['title'];
// 			$details = $_POST['details'];

// 			$insert = "INSERT INTO `offer`( `title`, `details`) VALUES ('$title','$details')";
// 			$res=mysqli_query($con,$insert);

// 			if ($res == true) {
// 				$_SESSION['status'] ="Data Inserted";
// 				$_SESSION['status_code'] = "success";
// 				header('location:offer.php');
// 			}
// 			else
// 			{
// 				$_SESSION['status'] ="Data Not Inserted";
// 				$_SESSION['status_code'] = "error";
// 				header('location:offer.php');
// 			}

// 		}	

// // Silder
// if (!empty($_POST['class'])) {
// 			$class_name = $_POST['class_name']; 
// 			$class_time = $_POST['class_time'];
// 			$week_name = $_POST['week_name'];
// 			$image = $_FILES['image']['name'];
// 			$temp = $_FILES['image']['tmp_name'];
// 			$folder="uploads/class/".$image;

// 			$insert = "INSERT INTO `class`(`class_name`, `class_time`,`week_name`, `image`) VALUES ('$class_name','$class_time','$week_name','$image')";
// 			$res=mysqli_query($con,$insert);

// 			if ($res == true) {
// 				// Now let's move the uploaded image into the folder: image
// 		        if (move_uploaded_file($temp,$folder))  
// 		        {
// 		            $_SESSION['status'] ="Data Inserted";
// 					$_SESSION['status_code'] = "success";
// 					header('location:class.php');
// 		        }
// 		        else{
// 		            $_SESSION['status'] ="Image Not Inserted";
// 					$_SESSION['status_code'] = "error";
// 					header('location:class.php');
// 		      	}
				
// 			}
// 			else
// 			{
// 				$_SESSION['status'] ="Data Not Inserted";
// 				$_SESSION['status_code'] = "error";
// 				header('location:class.php');
// 			}
// 	}	
// // Story
// if (!empty($_POST['story'])) {
// 			$message = $_POST['message'];
// 			$name = $_POST['name'];

// 			$insert = "INSERT INTO `story`( `message`, `name`) VALUES ('$message','$name')";
// 			$res=mysqli_query($con,$insert);

// 			if ($res == true) {
// 				$_SESSION['status'] ="Data Inserted";
// 				$_SESSION['status_code'] = "success";
// 				header('location:story.php');
// 			}
// 			else
// 			{
// 				$_SESSION['status'] ="Data Not Inserted";
// 				$_SESSION['status_code'] = "error";
// 				header('location:story.php');
// 			}


// 		}	

// // gallery
// 		if (!empty($_POST['gallery'])) {
			
// 			$image = $_FILES['image']['name'];
// 			$temp = $_FILES['image']['tmp_name'];
// 			$folder="uploads/gallery/".$image;
// 			$insert = "INSERT INTO `gallery`(`image`) VALUES ('$image')";
// 			$res=mysqli_query($con,$insert);

// 			if ($res == true) {
// 				// Now let's move the uploaded image into the folder: image
// 		        if (move_uploaded_file($temp,$folder))  
// 		        {
// 		            $_SESSION['status'] ="Data Inserted";
// 					$_SESSION['status_code'] = "success";
// 					header('location:gallery.php');
// 		        }
// 		        else{
// 		            $_SESSION['status'] ="Image Not Inserted";
// 					$_SESSION['status_code'] = "error";
// 					header('location:gallery.php');
// 		      	}
// 			}
// 			else
// 			{
// 				$_SESSION['status'] ="Data Not Inserted";
// 				$_SESSION['status_code'] = "error";
// 				header('location:gallery.php');
// 			}
// 		}

// if (!empty($_POST['trainer'])) {
// 			$name = $_POST['name']; 
// 			$designation = $_POST['designation'];
// 			$fb_link = $_POST['fb_link'];
// 			$t_link = $_POST['t_link'];
// 			$insta_link = $_POST['insta_link'];

// 			$image = $_FILES['image']['name'];
// 			$temp = $_FILES['image']['tmp_name'];
// 			$folder="uploads/trainer/".$image;

// 			$insert = "INSERT INTO `trainer`(`name`, `designation`,`fb_link`,`t_link`,`insta_link`, `image`) VALUES ('$name','$designation','$fb_link','$t_link','$insta_link','$image')";
// 			$res=mysqli_query($con,$insert);

// 			if ($res == true) {
// 				// Now let's move the uploaded image into the folder: image
// 		        if (move_uploaded_file($temp,$folder))  
// 		        {
// 		            $_SESSION['status'] ="Data Inserted";
// 					$_SESSION['status_code'] = "success";
// 					header('location:trainer.php');
// 		        }
// 		        else{
// 		            $_SESSION['status'] ="Image Not Inserted";
// 					$_SESSION['status_code'] = "error";
// 					header('location:trainer.php');
// 		      	}	
// 			}
// 			else
// 			{
// 				$_SESSION['status'] ="Data Not Inserted";
// 				$_SESSION['status_code'] = "error";
// 				header('location:trainer.php');
// 			}
// 	}	

// // Offerr
// if (!empty($_POST['footer1'])) {
// 			$email = $_POST['email'];
// 			$contact = $_POST['contact'];
// 			$address = $_POST['address'];
// 			$insert = "INSERT INTO `footer1`( `email`, `contact`, `address`) VALUES ('$email','$contact','$address')";
// 			$res=mysqli_query($con,$insert);

// 			if ($res == true) {
// 				$_SESSION['status'] ="Data Inserted";
// 				$_SESSION['status_code'] = "success";
// 				header('location:footer1.php');
// 			}
// 			else
// 			{
// 				$_SESSION['status'] ="Data Not Inserted";
// 				$_SESSION['status_code'] = "error";
// 				header('location:footer1.php');
// 			}

// 		}

// if (!empty($_POST['footer_about'])) {
// 			$details = $_POST['details'];
// 			$f_link = $_POST['fb_link'];
// 			$t_link = $_POST['t_link'];
// 			$i_link = $_POST['insta_link'];

// 			$image = $_FILES['image']['name'];
// 			$temp = $_FILES['image']['tmp_name'];
// 			$folder="uploads/logo/".$image;

// 			$insert = "INSERT INTO `footer_about`(`details`,`f_link`,`t_link`,`i_link`, `image`) VALUES ('$details','$f_link','$t_link','$i_link','$image')";
// 			$res=mysqli_query($con,$insert);

// 			if ($res == true) {
// 				// Now let's move the uploaded image into the folder: image
// 		        if (move_uploaded_file($temp,$folder))  
// 		        {
// 		            $_SESSION['status'] ="Data Inserted";
// 					$_SESSION['status_code'] = "success";
// 					header('location:footer_about.php');
// 		        }
// 		        else{
// 		            $_SESSION['status'] ="Image Not Inserted";
// 					$_SESSION['status_code'] = "error";
// 					header('location:footer_about.php');
// 		      	}	
// 			}
// 			else
// 			{
// 				$_SESSION['status'] ="Data Not Inserted";
// 				$_SESSION['status_code'] = "error";
// 				header('location:footer_about.php');
// 			}
// 	}
// // Offerr
// if (!empty($_POST['trainer1'])) {
// 			$title = $_POST['title'];
// 			$details = $_POST['details'];

// 			$insert = "INSERT INTO `trainer1`( `title`, `details`) VALUES ('$title','$details')";
// 			$res=mysqli_query($con,$insert);

// 			if ($res == true) {
// 				$_SESSION['status'] ="Data Inserted";
// 				$_SESSION['status_code'] = "success";
// 				header('location:trainer1.php');
// 			}
// 			else
// 			{
// 				$_SESSION['status'] ="Data Not Inserted";
// 				$_SESSION['status_code'] = "error";
// 				header('location:trainer1.php');
// 			}

// 		}
// // Admin
// if (!empty($_POST['about1'])) {
// 			$title = $_POST['title']; 
// 			$details = $_POST['details'];
			
// 			$image = $_FILES['image']['name'];
// 			$temp = $_FILES['image']['tmp_name'];
// 			$folder="uploads/about1/".$image;

// 			$insert = "INSERT INTO `about1`(`title`, `details`, `image`) VALUES ('$title','$details','$image')";
// 			$res=mysqli_query($con,$insert);

// 			if ($res == true) {
// 				// Now let's move the uploaded image into the folder: image
// 		        if (move_uploaded_file($temp,$folder))  
// 		        {
// 		            $_SESSION['status'] ="Data Inserted";
// 					$_SESSION['status_code'] = "success";
// 					header('location:about1.php');
// 		        }
// 		        else{
// 		            $_SESSION['status'] ="Image Not Inserted";
// 					$_SESSION['status_code'] = "error";
// 					header('location:about1.php');
// 		      	}
				
// 			}
// 			else
// 			{
// 				$_SESSION['status'] ="Data Not Inserted";
// 				$_SESSION['status_code'] = "error";
// 				header('location:about1.php');
// 			}

// 	}
// // Offerr
// if (!empty($_POST['whychooseus'])) {
// 			$title = $_POST['title'];
// 			$details = $_POST['details'];

// 			$insert = "INSERT INTO `whychooseus`( `title`, `details`) VALUES ('$title','$details')";
// 			$res=mysqli_query($con,$insert);

// 			if ($res == true) {
// 				$_SESSION['status'] ="Data Inserted";
// 				$_SESSION['status_code'] = "success";
// 				header('location:whychooseus.php');
// 			}
// 			else
// 			{
// 				$_SESSION['status'] ="Data Not Inserted";
// 				$_SESSION['status_code'] = "error";
// 				header('location:whychooseus.php');
// 			}

// 		}	
	
// ?>		
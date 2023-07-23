<?php
include('../connection.php');
// admin	
		if (!empty($_GET['admin'])) {
		    $q = "SELECT * FROM `admin_login` WHERE `sno`=" . $_GET['admin'];
		    $run = mysqli_query($con, $q);
		    $fetchRecords = mysqli_fetch_array($run);
		    $q = "DELETE FROM `admin_login` WHERE `sno`=" . $_GET['admin'];
		    $run = mysqli_query($con, $q);

		    if ($run) {
		        // if (unlink("uploads/admin/" . $fetchRecords['image'])) {
		        // 	$_SESSION['status'] ="Data And Image Deleted";
				// 	$_SESSION['status_code'] = "success";
		            header('location:admin.php');
		        // } else {
		        // 	$_SESSION['status'] ="Data Deleted without Image";
				// 	$_SESSION['status_code'] = "success";
		        //     header('location:admin.php');
		        // }
		    } else {
		    	// $_SESSION['status'] ="Data Not Deleted";
				// $_SESSION['status_code'] = "error";
		        // $_SESSION['status'] = "<div class='alert alert-danger'>Data Not Deleted</div>";
		        header('location:admin.php');
		    }
		}
// // Logo	
// 		if (!empty($_GET['logo'])) {
// 		    $q = "SELECT * FROM `logo` WHERE `sno`=" . $_GET['logo'];
// 		    $run = mysqli_query($con, $q);
// 		    $fetchRecords = mysqli_fetch_array($run);
// 		    $q = "DELETE FROM `logo` WHERE `sno`=" . $_GET['logo'];
// 		    $run = mysqli_query($con, $q);

// 		    if ($run) {
// 		        if (unlink("uploads/logo/" . $fetchRecords['image'])) {
// 		        	$_SESSION['status'] ="Data And Image Deleted";
// 					$_SESSION['status_code'] = "success";
// 		            header('location:logo.php');
// 		        } else {
// 		        	$_SESSION['status'] ="Data Deleted without Image";
// 					$_SESSION['status_code'] = "success";
// 		            header('location:logo.php');
// 		        }
// 		    } else {
// 		    	$_SESSION['status'] ="Data Not Deleted";
// 				$_SESSION['status_code'] = "error";
// 		        // $_SESSION['status'] = "<div class='alert alert-danger'>Data Not Deleted</div>";
// 		        header('location:logo.php');
// 		    }
// 		}
// // silder	
// 		if (!empty($_GET['silder'])) {
// 		    $q = "SELECT * FROM `silder` WHERE `sno`=" . $_GET['silder'];
// 		    $run = mysqli_query($con, $q);
// 		    $fetchRecords = mysqli_fetch_array($run);
// 		    $q = "DELETE FROM `silder` WHERE `sno`=" . $_GET['silder'];
// 		    $run = mysqli_query($con, $q);

// 		    if ($run) {
// 		        if (unlink("uploads/silder/" . $fetchRecords['image'])) {
// 		        	$_SESSION['status'] ="Data And Image Deleted";
// 					$_SESSION['status_code'] = "success";
// 		            header('location:silder.php');
// 		        } else {
// 		        	$_SESSION['status'] ="Data Deleted without Image";
// 					$_SESSION['status_code'] = "success";
// 		            header('location:silder.php');
// 		        }
// 		    } else {
// 		    	$_SESSION['status'] ="Data Not Deleted";
// 				$_SESSION['status_code'] = "error";
// 		        // $_SESSION['status'] = "<div class='alert alert-danger'>Data Not Deleted</div>";
// 		        header('location:silder.php');
// 		    }
// 		}	
// if (!empty($_GET['offer'])) {
// 		   $q = "SELECT * FROM `offer` WHERE `sno`=" . $_GET['offer'];
// 		    $run = mysqli_query($con, $q);
// 		    $fetchRecords = mysqli_fetch_array($run);
// 		    $q = "DELETE FROM `offer` WHERE `sno`=" . $_GET['offer'];
// 		    $run = mysqli_query($con, $q);

// 		    if ($run) {
		    	
// 		        	$_SESSION['status'] ="Data Deleted ";
// 					$_SESSION['status_code'] = "success";
// 		            header('location:offer.php');
		        
// 		    } else {
// 		        $_SESSION['status'] ="Data Not Deleted";
// 				$_SESSION['status_code'] = "error";
// 		        header('location:offer.php');
// 		    }
// 		}
// // class	
// 		if (!empty($_GET['class'])) {
// 		    $q = "SELECT * FROM `class` WHERE `sno`=" . $_GET['class'];
// 		    $run = mysqli_query($con, $q);
// 		    $fetchRecords = mysqli_fetch_array($run);
// 		    $q = "DELETE FROM `class` WHERE `sno`=" . $_GET['class'];
// 		    $run = mysqli_query($con, $q);

// 		    if ($run) {
// 		        if (unlink("uploads/class/" . $fetchRecords['image'])) {
// 		        	$_SESSION['status'] ="Data And Image Deleted";
// 					$_SESSION['status_code'] = "success";
// 		            header('location:class.php');
// 		        } else {
// 		        	$_SESSION['status'] ="Data Deleted without Image";
// 					$_SESSION['status_code'] = "success";
// 		            header('location:class.php');
// 		        }
// 		    } else {
// 		    	$_SESSION['status'] ="Data Not Deleted";
// 				$_SESSION['status_code'] = "error";
// 		        // $_SESSION['status'] = "<div class='alert alert-danger'>Data Not Deleted</div>";
// 		        header('location:class.php');
// 		    }
// 		}

// // sTORY

// if (!empty($_GET['story'])) {
// 		   $q = "SELECT * FROM `story` WHERE `sno`=" . $_GET['story'];
// 		    $run = mysqli_query($con, $q);
// 		    $fetchRecords = mysqli_fetch_array($run);
// 		    $q = "DELETE FROM `story` WHERE `sno`=" . $_GET['story'];
// 		    $run = mysqli_query($con, $q);

// 		    if ($run) {
		    	
// 		        	$_SESSION['status'] ="Data Deleted ";
// 					$_SESSION['status_code'] = "success";
// 		            header('location:story.php');
		        
// 		    } else {
// 		        $_SESSION['status'] ="Data Not Deleted";
// 				$_SESSION['status_code'] = "error";
// 		        header('location:story.php');
// 		    }
// 		}
// // gallery	
// 		if (!empty($_GET['gallery'])) {
// 		    $q = "SELECT * FROM `gallery` WHERE `sno`=" . $_GET['gallery'];
// 		    $run = mysqli_query($con, $q);
// 		    $fetchRecords = mysqli_fetch_array($run);
// 		    $q = "DELETE FROM `gallery` WHERE `sno`=" . $_GET['gallery'];
// 		    $run = mysqli_query($con, $q);

// 		    if ($run) {
// 		        if (unlink("uploads/gallery/" . $fetchRecords['image'])) {
// 		        	$_SESSION['status'] ="Data And Image Deleted";
// 					$_SESSION['status_code'] = "success";
// 		            header('location:gallery.php');
// 		        } else {
// 		        	$_SESSION['status'] ="Data Deleted without Image";
// 					$_SESSION['status_code'] = "success";
// 		            header('location:gallery.php');
// 		        }
// 		    } else {
// 		    	$_SESSION['status'] ="Data Not Deleted";
// 				$_SESSION['status_code'] = "error";
// 		        // $_SESSION['status'] = "<div class='alert alert-danger'>Data Not Deleted</div>";
// 		        header('location:gallery.php');
// 		    }
// 		}

// // trainer	
// 		if (!empty($_GET['trainer'])) {
// 		    $q = "SELECT * FROM `trainer` WHERE `sno`=" . $_GET['trainer'];
// 		    $run = mysqli_query($con, $q);
// 		    $fetchRecords = mysqli_fetch_array($run);
// 		    $q = "DELETE FROM `trainer` WHERE `sno`=" . $_GET['trainer'];
// 		    $run = mysqli_query($con, $q);

// 		    if ($run) {
// 		        if (unlink("uploads/trainer/" . $fetchRecords['image'])) {
// 		        	$_SESSION['status'] ="Data And Image Deleted";
// 					$_SESSION['status_code'] = "success";
// 		            header('location:trainer.php');
// 		        } else {
// 		        	$_SESSION['status'] ="Data Deleted without Image";
// 					$_SESSION['status_code'] = "success";
// 		            header('location:trainer.php');
// 		        }
// 		    } else {
// 		    	$_SESSION['status'] ="Data Not Deleted";
// 				$_SESSION['status_code'] = "error";
// 		        // $_SESSION['status'] = "<div trainer='alert alert-danger'>Data Not Deleted</div>";
// 		        header('location:trainer.php');
// 		    }
// 		}
// // Footer1

// if (!empty($_GET['footer1'])) {
// 		   $q = "SELECT * FROM `footer1` WHERE `sno`=" . $_GET['footer1'];
// 		    $run = mysqli_query($con, $q);
// 		    $fetchRecords = mysqli_fetch_array($run);
// 		    $q = "DELETE FROM `footer1` WHERE `sno`=" . $_GET['footer1'];
// 		    $run = mysqli_query($con, $q);

// 		    if ($run) {
		    	
// 		        	$_SESSION['status'] ="Data Deleted ";
// 					$_SESSION['status_code'] = "success";
// 		            header('location:footer1.php');
		        
// 		    } else {
// 		        $_SESSION['status'] ="Data Not Deleted";
// 				$_SESSION['status_code'] = "error";
// 		        header('location:footer1.php');
// 		    }
// 		}



// // Footer About	
// 		if (!empty($_GET['footer_about'])) {
// 		    $q = "SELECT * FROM `footer_about` WHERE `sno`=" . $_GET['footer_about'];
// 		    $run = mysqli_query($con, $q);
// 		    $fetchRecords = mysqli_fetch_array($run);
// 		    $q = "DELETE FROM `footer_about` WHERE `sno`=" . $_GET['footer_about'];
// 		    $run = mysqli_query($con, $q);

// 		    if ($run) {
// 		        if (unlink("uploads/logo/" . $fetchRecords['image'])) {
// 		        	$_SESSION['status'] ="Data And Image Deleted";
// 					$_SESSION['status_code'] = "success";
// 		            header('location:footer_about.php');
// 		        } else {
// 		        	$_SESSION['status'] ="Data Deleted without Image";
// 					$_SESSION['status_code'] = "success";
// 		            header('location:footer_about.php');
// 		        }
// 		    } else {
// 		    	$_SESSION['status'] ="Data Not Deleted";
// 				$_SESSION['status_code'] = "error";
// 		        // $_SESSION['status'] = "<div footer_about='alert alert-danger'>Data Not Deleted</div>";
// 		        header('location:footer_about.php');
// 		    }
// 		}

// // sTORY

// if (!empty($_GET['trainer1'])) {
// 		   $q = "SELECT * FROM `trainer1` WHERE `sno`=" . $_GET['trainer1'];
// 		    $run = mysqli_query($con, $q);
// 		    $fetchRecords = mysqli_fetch_array($run);
// 		    $q = "DELETE FROM `trainer1` WHERE `sno`=" . $_GET['trainer1'];
// 		    $run = mysqli_query($con, $q);

// 		    if ($run) {
		    	
// 		        	$_SESSION['status'] ="Data Deleted ";
// 					$_SESSION['status_code'] = "success";
// 		            header('location:trainer1.php');
		        
// 		    } else {
// 		        $_SESSION['status'] ="Data Not Deleted";
// 				$_SESSION['status_code'] = "error";
// 		        header('location:trainer1.php');
// 		    }
// 		}
// if (!empty($_GET['trainer1'])) {
// 		   $q = "SELECT * FROM `trainer1` WHERE `sno`=" . $_GET['trainer1'];
// 		    $run = mysqli_query($con, $q);
// 		    $fetchRecords = mysqli_fetch_array($run);
// 		    $q = "DELETE FROM `trainer1` WHERE `sno`=" . $_GET['trainer1'];
// 		    $run = mysqli_query($con, $q);

// 		    if ($run) {
		    	
// 		        	$_SESSION['status'] ="Data Deleted ";
// 					$_SESSION['status_code'] = "success";
// 		            header('location:trainer1.php');
		        
// 		    } else {
// 		        $_SESSION['status'] ="Data Not Deleted";
// 				$_SESSION['status_code'] = "error";
// 		        header('location:trainer1.php');
// 		    }
// 		}
// // About	
// 		if (!empty($_GET['about1'])) {
// 		    $q = "SELECT * FROM `about1` WHERE `sno`=" . $_GET['about1'];
// 		    $run = mysqli_query($con, $q);
// 		    $fetchRecords = mysqli_fetch_array($run);
// 		    $q = "DELETE FROM `about1` WHERE `sno`=" . $_GET['about1'];
// 		    $run = mysqli_query($con, $q);

// 		    if ($run) {
// 		        if (unlink("uploads/about1/" . $fetchRecords['image'])) {
// 		        	$_SESSION['status'] ="Data And Image Deleted";
// 					$_SESSION['status_code'] = "success";
// 		            header('location:about1.php');
// 		        } else {
// 		        	$_SESSION['status'] ="Data Deleted without Image";
// 					$_SESSION['status_code'] = "success";
// 		            header('location:about1.php');
// 		        }
// 		    } else {
// 		    	$_SESSION['status'] ="Data Not Deleted";
// 				$_SESSION['status_code'] = "error";
// 		        // $_SESSION['status'] = "<div class='alert alert-danger'>Data Not Deleted</div>";
// 		        header('location:about1.php');
// 		    }
// 		}		
// ?>
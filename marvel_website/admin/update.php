<?php 
include('../connection.php');
// Update Admin
if (!empty($_POST['update_admin'])) {

        $sno = $_POST['sno'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        
        // $new_image = $_FILES['new_image']['name'];
        // if ($new_image != '') 
        // {    
        //     $temp = $_FILES['new_image']['tmp_name'];
        //     $folder = "uploads/admin/".$new_image;
        //     $a = '';
        //     if (!empty($_POST['old_image'])) 
        //     {
        //         unlink("uploads/admin/".$_POST['old_image']);
        //     }
        // }
        // else
        // {
        //     $new_image = $_POST['old_image'];
        //     $a = 'true';
        // }

        $up = "UPDATE `admin_login` SET `name`='$name',`email`='$email',`password`='$password' WHERE `sno` ='$sno'";
        $run = mysqli_query($con,$up);

        if ($run) {
            // if($a == '')
            // {
            //     move_uploaded_file($temp, $folder);
            // }
            header('location:admin.php');
            
        }
        else
        {
            header('location:admin.php');
        }
    }
// // Logo 
// if (!empty($_POST['update_logo']))
// {
//   $sno = $_POST['sno'];
 
//   $new_image = $_FILES['new_image']['name'];
//   $old_image = $_POST['old_image'];
//   if ($new_image != '')
//   {
//     $tempname = $_FILES['new_image']['tmp_name'];
//     $folder = "uploads/logo/".$new_image;
//     $q = "UPDATE `logo` SET `image`='$new_image' WHERE sno='$sno'";

//     $run = mysqli_query($con,$q);
//     if ($run)
//     {
//       if (move_uploaded_file($tempname,$folder))
//       {
//         unlink("uploads/logo/".$old_image);
//                           // $_SESSION['status']="<div class='alert alert-success'>Image and Text Updated</div>";
//         // $_SESSION['status'] ="Image and Text Updated";
//         // $_SESSION['status_code'] = "success";
//         $_SESSION['status'] = "Service Updated";
//         header('location:logo.php');
//       }
//       else
//       {
//                           // $_SESSION['status']="<div class='alert alert-danger'>Image Not Updated</div>";
//         $_SESSION['error'] = "Service Not Updated";            
//         header('location:logo.php');
//       }
//     }
//     else
//     {
//                       // $_SESSION['status']="<div class='alert alert-success'>Not Updated</div>";
//       $_SESSION['status'] ="Not Updated";
//       $_SESSION['status_code'] = "error";
//       header('location:logo.php');
//     }
//   }
//   else
//   {
//     $new_image = $old_image;
//     $tempname = $_FILES['new_image']['tmp_name'];
//     $folder = "uploads/logo/".$new_image;

//     $q = "UPDATE `logo` SET `image`='$new_image' WHERE sno='$sno'";
    
//     $run = mysqli_query($con,$q);
//     if ($run)
//     {
//       if (move_uploaded_file($tempname,$folder))
//       {
//                          // $_SESSION['status']="<div class='alert alert-success'>Text Updated Without Image</div>";
//        $_SESSION['status'] ="Text Updated Without Image";
//        $_SESSION['status_code'] = "success";
//        header('location:logo.php');
//      }
//      else
//      {
//                           // $_SESSION['status']="<div class='alert alert-danger'>Not Updated Without Image</div>";
//       $_SESSION['status'] ="Only Text Updated";
//       $_SESSION['status_code'] = "success";
//       header('location:logo.php');
//     }
//   }
//   else
//   {
//                       // $_SESSION['status']="<div class='alert alert-success'Data Not Updated</div>";
//     $_SESSION['status'] ="Data Not Updated";
//     $_SESSION['status_code'] = "error";
//     header('location:logo.php');
//   }
// }
// } 
// // Update Admin
// if (!empty($_POST['update_silder'])) {

//         $sno = $_POST['sno'];
//         $title = $_POST['title'];
//         $sub_title = $_POST['sub_title'];
//         $details = $_POST['details'];
        
//         $new_image = $_FILES['new_image']['name'];
//         if ($new_image != '') 
//         {
//             $temp = $_FILES['new_image']['tmp_name'];
//             $folder = "uploads/silder/".$new_image;
//             $a = '';
//             if (!empty($_POST['old_image'])) 
//             {
//                 unlink("uploads/silder/".$_POST['old_image']);
//             }
//         }
//         else
//         {
//             $new_image = $_POST['old_image'];
//             $a = 'true';
//         }

//         $up = "UPDATE `silder` SET `title`='$title',`sub_title`='$sub_title',`details`='$details',`image`='$new_image' WHERE `sno` ='$sno'";
//         $run = mysqli_query($con,$up);

//         if ($run) {
//             if($a == '')
//             {
//                 move_uploaded_file($temp, $folder);
//             }
//             header('location:silder.php');
            
//         }
//         else
//         {
//             header('location:silder.php');

//         }
//     }  
// // Offer
// if (!empty($_POST['update_offer']))
//     {
//       $sno = $_POST['sno'];
//       $title = $_POST['title'];
//       $details = $_POST['details'];
    

//       $q = "UPDATE `offer` SET `title`='$title',`details`='$details'WHERE sno='$sno'";
//       $run = mysqli_query($con,$q);
              
//       if ($run)
//       {
//         $_SESSION['status'] ="Data Update Successfully";
//         $_SESSION['status_code'] = "success";
//         header('location:offer.php');
//       }
//       else
//       {
//         $_SESSION['status'] ="Data Not Updated";
//         $_SESSION['status_code'] = "error";
//         header('location:offer.php');
//       }
//     }
// // Update Class
// if (!empty($_POST['update_class'])) {

//         $sno = $_POST['sno'];
//         $class_name = $_POST['class_name'];
//         $class_time = $_POST['class_time'];
//         $week_name = $_POST['week_name'];
        
//         $new_image = $_FILES['new_image']['name'];
//         if ($new_image != '') 
//         {
//             $temp = $_FILES['new_image']['tmp_name'];
//             $folder = "uploads/class/".$new_image;
//             $a = '';
//             if (!empty($_POST['old_image'])) 
//             {
//                 unlink("uploads/class/".$_POST['old_image']);
//             }
//         }
//         else
//         {
//             $new_image = $_POST['old_image'];
//             $a = 'true';
//         }

//         $up = "UPDATE `class` SET `class_name`='$class_name',`class_time`='$class_time',`week_name`='$week_name',`image`='$new_image' WHERE `sno` ='$sno'";
//         $run = mysqli_query($con,$up);

//         if ($run) {
//             if($a == '')
//             {
//                 move_uploaded_file($temp, $folder);
//             }
//             header('location:class.php');
            
//         }
//         else
//         {
//             header('location:class.php');

//         }
//     } 

// // Story

// if (!empty($_POST['update_story']))
//     {
//       $sno = $_POST['sno'];
//       $message = $_POST['message'];
//       $name = $_POST['name'];
    

//       $q = "UPDATE `story` SET `message`='$message',`name`='$name'WHERE sno='$sno'";
//       $run = mysqli_query($con,$q);
              
//       if ($run)
//       {
//         $_SESSION['status'] ="Data Update Successfully";
//         $_SESSION['status_code'] = "success";
//         header('location:story.php');
//       }
//       else
//       {
//         $_SESSION['status'] ="Data Not Updated";
//         $_SESSION['status_code'] = "error";
//         header('location:story.php');
//       }
//     }

// // gallery 
// if (!empty($_POST['update_gallery']))
// {
//   $sno = $_POST['sno'];
 
//   $new_image = $_FILES['new_image']['name'];
//   $old_image = $_POST['old_image'];
//   if ($new_image != '')
//   {
//     $tempname = $_FILES['new_image']['tmp_name'];
//     $folder = "uploads/gallery/".$new_image;
//     $q = "UPDATE `gallery` SET `image`='$new_image' WHERE sno='$sno'";

//     $run = mysqli_query($con,$q);
//     if ($run)
//     {
//       if (move_uploaded_file($tempname,$folder))
//       {
//         unlink("uploads/gallery/".$old_image);
//                           // $_SESSION['status']="<div class='alert alert-success'>Image and Text Updated</div>";
//         // $_SESSION['status'] ="Image and Text Updated";
//         // $_SESSION['status_code'] = "success";
//         $_SESSION['status'] = "Service Updated";
//         header('location:gallery.php');
//       }
//       else
//       {
//                           // $_SESSION['status']="<div class='alert alert-danger'>Image Not Updated</div>";
//         $_SESSION['error'] = "Service Not Updated";            
//         header('location:gallery.php');
//       }
//     }
//     else
//     {
//                       // $_SESSION['status']="<div class='alert alert-success'>Not Updated</div>";
//       $_SESSION['status'] ="Not Updated";
//       $_SESSION['status_code'] = "error";
//       header('location:gallery.php');
//     }
//   }
//   else
//   {
//     $new_image = $old_image;
//     $tempname = $_FILES['new_image']['tmp_name'];
//     $folder = "uploads/gallery/".$new_image;

//     $q = "UPDATE `gallery` SET `image`='$new_image' WHERE sno='$sno'";
    
//     $run = mysqli_query($con,$q);
//     if ($run)
//     {
//       if (move_uploaded_file($tempname,$folder))
//       {
//                          // $_SESSION['status']="<div class='alert alert-success'>Text Updated Without Image</div>";
//        $_SESSION['status'] ="Text Updated Without Image";
//        $_SESSION['status_code'] = "success";
//        header('location:gallery.php');
//      }
//      else
//      {
//                           // $_SESSION['status']="<div class='alert alert-danger'>Not Updated Without Image</div>";
//       $_SESSION['status'] ="Only Text Updated";
//       $_SESSION['status_code'] = "success";
//       header('location:gallery.php');
//     }
//   }
//   else
//   {
//                       // $_SESSION['status']="<div class='alert alert-success'Data Not Updated</div>";
//     $_SESSION['status'] ="Data Not Updated";
//     $_SESSION['status_code'] = "error";
//     header('location:gallery.php');
//   }
// }
// } 

// // Update Class
// if (!empty($_POST['update_trainer'])) {

//         $sno = $_POST['sno'];
//         $name = $_POST['name'];
//         $designation = $_POST['designation'];
//         $fb_link = $_POST['fb_link'];
//         $t_link = $_POST['t_link'];
//         $insta_link = $_POST['insta_link'];
//         $new_image = $_FILES['new_image']['name'];
//         if ($new_image != '') 
//         {
//             $temp = $_FILES['new_image']['tmp_name'];
//             $folder = "uploads/trainer/".$new_image;
//             $a = '';
//             if (!empty($_POST['old_image'])) 
//             {
//                 unlink("uploads/trainer/".$_POST['old_image']);
//             }
//         }
//         else
//         {
//             $new_image = $_POST['old_image'];
//             $a = 'true';
//         }

//         $up = "UPDATE `trainer` SET `name`='$name',`designation`='$designation',`fb_link`='$fb_link',`t_link`='$t_link',`insta_link`='$insta_link',`image`='$new_image' WHERE `sno` ='$sno'";
//         $run = mysqli_query($con,$up);

//         if ($run) {
//             if($a == '')
//             {
//                 move_uploaded_file($temp, $folder);
//             }
//             header('location:trainer.php');
            
//         }
//         else
//         {
//             header('location:trainer.php');

//         }
//     }

// // Footer1

// if (!empty($_POST['update_footer1']))
//     {
//       $sno = $_POST['sno'];
//       $email = $_POST['email'];
//       $contact = $_POST['contact'];
//       $address = $_POST['address'];
    

//       $q = "UPDATE `footer1` SET `email`='$email',`contact`='$contact',`address`='$address'WHERE sno='$sno'";
//       $run = mysqli_query($con,$q);
              
//       if ($run)
//       {
//         $_SESSION['status'] ="Data Update Successfully";
//         $_SESSION['status_code'] = "success";
//         header('location:footer1.php');
//       }
//       else
//       {
//         $_SESSION['status'] ="Data Not Updated";
//         $_SESSION['status_code'] = "error";
//         header('location:footer1.php');
//       }
// }

// // Update Footer About
// if (!empty($_POST['update_footer_about'])) {

//         $sno = $_POST['sno'];
//         $details = $_POST['details'];
//         $f_link = $_POST['f_link'];
//         $t_link = $_POST['t_link'];
//         $i_link = $_POST['i_link'];
//         $new_image = $_FILES['new_image']['name'];
//         if ($new_image != '') 
//         {
//             $temp = $_FILES['new_image']['tmp_name'];
//             $folder = "uploads/logo/".$new_image;
//             $a = '';
//             if (!empty($_POST['old_image'])) 
//             {
//                 unlink("uploads/logo/".$_POST['old_image']);
//             }
//         }
//         else
//         {
//             $new_image = $_POST['old_image'];
//             $a = 'true';
//         }

//         $up = "UPDATE `footer_about` SET `details`='$details',`f_link`='$f_link',`t_link`='$t_link',`i_link`='$i_link',`image`='$new_image' WHERE `sno` ='$sno'";
//         $run = mysqli_query($con,$up);

//         if ($run) {
//             if($a == '')
//             {
//                 move_uploaded_file($temp, $folder);
//             }
//             header('location:footer_about.php');
            
//         }
//         else
//         {
//             header('location:footer_about.php');

//         }
//     }














?>    
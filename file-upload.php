<?php
include 'config.php';
if(isset($_POST['submit']))
{
    $l_id=$_POST['l_id'];
    
    $extension=array('jpeg','jpg','png','gif');
    // header("Location: welcome.php");

    foreach ($_FILES['image']['tmp_name'] as $key => $value) {
        $filename=$_FILES['image']['name'][$key];
        $filename_tmp=$_FILES['image']['tmp_name'][$key];
        $filename1=$_FILES['image1']['name'][$key];
        $filename_tmp1=$_FILES['image1']['tmp_name'][$key];
        $filename2=$_FILES['image2']['name'][$key];
        $filename_tmp2=$_FILES['image2']['tmp_name'][$key];
        echo '<br>';

        // $ext=pathinfo($filename,PATHINFO_EXTENSION);
        // $ext1=pathinfo($filename1,PATHINFO_EXTENSION);
        // $ext2=pathinfo($filename2,PATHINFO_EXTENSION);

        $temp           = explode(".", $filename);
        $temp1          = explode(".", $filename1);
        $temp2          = explode(".", $filename2);
        $new            = round(microtime(true)) . '.' . end($temp);
        $new1           = round(microtime(true)) . '.' . end($temp1);
        $new2           = round(microtime(true)) . '.' . end($temp2);
        $path           = "images/".$new;
        $path1          = "images/".$new1;
        $path2          = "images/".$new2;

        move_uploaded_file($filename_tmp, $path);
        move_uploaded_file($filename_tmp1, $path1);
        move_uploaded_file($filename_tmp2, $path2);
        

        $qry="INSERT INTO `multiple-images`( `image`,`image1`,`image2`,`l_id`, `image_createtime`) VALUES ('$new','$new1','$new2','$l_id','$creattime')";
		$query=mysqli_query($conn,$qry);


        if($query)
         { 
            $_SESSION['status'] = "Images Updated Successfully";
            header("Location: Post_property.php");
        }
        else
        {
            // $_SESSION['status'] = "welcome.php";
            header("Location: welcome.php");
        }
    }
    }
?>





 <?php
// include 'database.php';
// if(isset($_POST['submit']))
// {
// 	$l_id=$_POST['l_id'];
	
// 	$extension=array('jpeg','jpg','png','gif');
// 	foreach ($_FILES['image']['tmp_name'] as $key => $value) {
// 		$filename=$_FILES['image']['name'][$key];
// 		$filename_tmp=$_FILES['image']['tmp_name'][$key];
// 		echo '<br>';
// 		$ext=pathinfo($filename,PATHINFO_EXTENSION);

// 		$finalimg='';
// 		if(in_array($ext,$extension))
// 		{
// 			if(!file_exists('images/'.$filename))
// 			{
// 			move_uploaded_file($filename_tmp, 'images/'.$filename);
// 			$finalimg=$filename;
// 			}else
// 			{
// 				 $filename=str_replace('.','-',basename($filename,$ext));
// 				 $newfilename=$filename.time().".".$ext;
// 				 move_uploaded_file($filename_tmp, 'images/'.$newfilename);
// 				 $finalimg=$newfilename;
// 			}
// 			$creattime=date('Y-m-d h:i:s');
// 			//insert
// 			$insertqry="INSERT INTO `multiple-images`( `image_name`,`l_id`, `image_createtime`) VALUES ('$finalimg','$l_id','$creattime')";
// 			mysqli_query($con,$insertqry);

// 			header('Location: Post_property.php');
// 		}else
// 		{
// 			//display error
// 		}
// 	}
//}
?>
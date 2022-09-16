<?php
include ('config.php');

  if(isset($_POST['add_product_btn']))
    {
      $Filename=$_FILES["fileToupload"]["name"];
      $File=$_FILES["fileToupload"]["tmp_name"];
      move_uploaded_file($File,"../images/$Filename");
      $Pname=$_POST["pname"];
      $Details=$_POST["details"];
      $sql="INSERT INTO `tb_add_product`(`filename`, `pname`, `details`) VALUES ('$File','$Pname','$Details')";
          $res=mysqli_query($conn,$sql);
        if ($res==1)
          {
            echo "<script>
                    alert('Added successfully');
                    window.location.href='../product_view.html'
                  </script>";
          }
        else
          {
            echo "Sorry,there is an error: " .$sql . "<br>" . mysqli_error($conn);
          }  
    }
?>
<?php
include ('config.php');

  if(isset($_POST['register_btn']))
    {
        
      $Name=$_POST["name"];
      $Mobno=$_POST["mobno"];
      $Email=$_POST["email"];
      $Username=$_POST["username"];
      $Password=$_POST["password"];
      $Cpassword=$_POST["cpassword"];
      $sql="INSERT INTO `tb_registrtion`(`name`, `mobno`, `email`, `username`, `password`,`cpassword`) VALUES ('$Name','$Mobno','$Email','$Username','$Password','$Cpassword')";
          $res=mysqli_query($conn,$sql);
        if ($res==1)
          {
            echo "<script>
                    alert('Added successfully');
                    window.location.href='../login.html'
                  </script>";
          }
        else
          {
            echo "Sorry,there is an error: " .$sql . "<br>" . mysqli_error($conn);
          }
       
    }
?>
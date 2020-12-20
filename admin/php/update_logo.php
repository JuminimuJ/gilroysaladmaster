<?php
if(isset($_POST['btnuploadlogo']))
    {
        require_once('../../db/conn.php'); 

        $logoid = $_POST['logoid'];
        $actualImg=PATHINFO($_FILES["upd_logo"]["name"]);
        $newActualImg=$actualImg['filename'] ."_". time() . "." . $actualImg['extension'];

        if(move_uploaded_file($_FILES["upd_logo"]["tmp_name"],"../../uploads/logo/" . $newActualImg))
        {
            $sql = "UPDATE `acc_logo` SET `logo_img`='$newActualImg' WHERE `id`=1";
            $query = $conn->query($sql) or die(mysqli_error($conn));

            if($query)
            {
                echo "<script type='text/javascript'>
                        alert('New logo has been Updated!');
                        window.location='../dashboard.php';
                      </script>";
            }else{
                echo "<script type='text/javascript'>
                        alert('Unexpected Error1!');
                        window.location='../dashboard.php';
                      </script>";
            }
        }else{
            echo "<script type='text/javascript'>
                    alert('Unexpected Error2!');
                    window.location='../dashboard.php';
                  </script>";
        }

    }
?>
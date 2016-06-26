<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Home</title>
    <meta name="autor" content="Jozell M. Rili">
    <meta name="description" content="simple document sharing portal">

    <link rel="stylesheet" type="text/css" href="css/members-tbl.css">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
              </button>
                 <a class="navbar-brand topnav" href="#">
                    <img src="img/abc-logo.png" alt="" class="img-responsive" style="width:180px; height: 30px";>
                </a>

            </div>
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="home.php"  class="active">HOME</a>
                    </li>
                    <li>
                        <a href="members.php">USERS</a>
                    </li>
                    <li>
                        <a href="upload-form.php">DOCUMENTS</a>
                    </li>

                    <li>
                        <a href="logout.php">LOGOUT</a>
                    </li>                    
                   
                </ul>
            </div>
           <!-- navigation  -->

            </div>
        <!-- /.container -->
       
    </nav>  


<body>
 <div id="wrapper">
  <h3>USER LIST</h3>
  
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>Name</span></th>
        <th><span>username</span></th>
        <th><span>Admin Privilege</span></th>
        <th><span>Action</span></th>
      </tr>
    </thead>
    <tbody>
        <?php

        include('./database/db_connection.php');

        $sql="SELECT * FROM sec_users";
        $result=mysqli_query($con, $sql);

        while($row=mysqli_fetch_array($result,MYSQLI_NUM)) {
        
            echo '

              <tr>
                <td class="lalign">'.$row[1].'</td>
                <td>'.$row[2].'</td>
                <td>'.$row[4].'</td>
                <td>
                    <a href="edit-users.php?username='.$row[2].'">edit</a>
                    <a href="delete-record.php?username='.$row[2].'">delete</a>

                </td>
              </tr>
              ';
        }
          ?>
    </tbody>
  </table>
 </div>

 <script type="text/javascript">
    $(function(){
      $('#keywords').tablesorter(); 
    });
 </script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<?php session_start();?>    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial scale=1">
    <title>Manager Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <title>Manager Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    body   
    
    {
        background:url(index_image.jpg);
        background-size:cover;
    }
    
    h1
    {
        color: red;
        text-transform: capitalize;
        font-weight: bold;
    }
    
    h5
    {
        text-align: right;
    }
    
    .our-team
    {
        padding:30px 0 40px;
        background: orange;
        text-align: center;
        overflow: hidden;
        position: relative;
    }
    .our-team .pic
    {
        display: inline-block;
        width: 130px;
        height: 100px;
        margin-bottom: 50px;
        position: relative;
        z-index: l; 
    }
    
    .our-team .pic:before
    {
        content: "";
        width: 100%;
        background: #eb1768;
        position: absolute;
        bottom: 135%;
        right: 0;
        left: 0;
        transform: scale(3);
        transition: all 0.3s linear 0s;
    }
    
    .our-team:hover .pic:before
    {
        height: 100%;
    }
    
    .our-team .pic:after
    {
        content: "";
        width: 100%;
        height: 100%
        border-radius: 50%;
        background: #ee4266;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -l;
    }
    
    .our-team .pic img
    {
        width: 100%;
        height: auto;
        border-radius: 50%;
        transform: scale(1);
        transition: all 0.9s ease 0s;
    }
    
    .our-team:hover .pic img
    
    {
        box-shadow: 0 0 0 14px #f7f5ec;
        transform: scale(0.7);
    }
    
    .our-team .team-content
    {
        margin-bottom: 30px;
    }
    
    .our-team .title
    {
        font-size: 22px;
        font-weight: 700;
        color: #4e5052;
        letter-spacing: 1px;
        text-transform: capitalize;
    }
    
    .our-team .social
    {
        width: 100%;
        padding: 0;
        margin: 0;
        background: #eb1768;
        position: absolute;
        bottom: -100px;
        left: 0;
        transform: all 0.5s ease 0s;
    }
    
    .our-team:hover .social
    {
        bottom: 0;
    }
    
    .our-team .social li
    {
        display: inline-block;
    }
    
    .out-team .social li a
    {
        display: block;
        padding: 10px;
        font-size: 17px;
        color: white;
        transition: all 0.5s ease 0s;
    }
    
    .out-team .social li a:hover
    {
        color: #eb1768;
        background: #f7f5ec;
        text-decoration: none;
    }
    
     button
    {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: black;
        text-align: center;
        width: 100%;
        font-size: 18px;
        cursor: pointer;
        margin-bottom: 20px;
    }
    
    button:hover
    {
        opacity: 0.7;
    }
    #a{
        margin-right: 50px;
        font-size: 25px;
        padding: 10px;
    }
    shift
    {
        margin-right: auto;
    }
</style>
 </head>   
    
    
<body>
<nav style="height:2cm" class="navbar navbar-inverse navbar-fixed-top">
    <ul class="nav navbar-nav navbar-right" id="a">
        
        
         <li class=""><a href="#" style="color:white;"><h5>Home</h5></a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white;"><h5></h5>List<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Shipment</a></li>
          <li><a href="manager_branch_report/manager_cust_list.php">Customer</a></li>
          <!--li><a href="#">Branch</a></li-->
          <li><a href="manager_branch_report/manager_emp_list.php">Employee</a></li>
        </ul>
      </li>
        <li class=""><a href="manager_branch_report/manager_branch_report.php" style="color:white"><h5>Report</h5></a></li>
        <li class=""><a href="admin_list/branch_contact_list.php" style="color:white"><h5>Contact</h5></a></li>
        
        
      <li ><div class="shift"><a href="index.html"style="color:white;"><span class="glyphicon glyphicon-log-out"></span>Logout</a></div></li>
    </ul>
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:white;"><h2 align="center"><b>A&N COURIER SERVICES</b></h2></a>
        <a class="navbar-brand" href="#"><h3 align="center">Welcome To Manager Previlige</h3></a>
      </div>
  </div>
</nav>
    
    
 <br><br><br><br><br>    
     <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic">
                <img src="emp_image.jpg">
                </div>
                <div class="team-content">
                    <h3 class="title">Add Employee</h3><br>
                    
                </div>
                <ul class="social">
                   <a href="Add_employee.html" target="_blank"><button>Click Here</button></a>
                </ul>
                </div>
            </div>
    
   
            <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic">
                <img src="emp_image.jpg">
                </div>
                <div class="team-content">
                    <h3 class="title">Edit/Details Employee</h3><br>
                    
                </div>
                <ul class="social">
                   <a href="detail_edit_employe/employee_details.php" target="_blank"><button>Click Here</button></a>
                </ul>
                </div>
            </div>
            
            
            
      <!--         <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic">
                <img src="emp_image.jpg">
                </div>
                <div class="team-content">
                    <h3 class="title">Consignment Details</h3><br>
                </div>
                <ul class="social">
                    <a href="consignment_details.php" target="_blank"><button>Click Here</button></a>
                </ul>
                </div>
            </div>
              </div>
    </div>-->
                    
  <!--   <div class="container"> 
             <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic">
                <img src="emp_image.jpg">
                </div>
                <div class="team-content">
                    <h3 class="title">Employee Details/Update</h3><br>
                </div>
                <ul class="social">
                    <a href="detail_edit_employe/employee_details.php"><button>Click Here</button></a>
                </ul>
                </div>
            </div>                       
      

     <!--   
            <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic">
                <img src="emp_image.jpg">
                </div>
                <div class="team-content">
                    <h4 class="title">Add Shipment</h4><br>
                </div>  
                <ul class="social">
                    <a href="Add_shipments.html"><button>Click Here</button></a>
                </ul>
                </div>
            </div>
        -->   
    <!--     
            <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic">
                <img src="emp_image.jpg">
                </div>
                <div class="team-content">
                    <h4 class="title">Consignment status update</h4><br>
                </div>  
                <ul class="social">
                    <a href="#"><button>Click Here</button></a>
                </ul>
                </div>
            </div>
            
   -->         
             <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic">
                <img src="emp_image.jpg">
                </div>
                <div class="team-content">
                    <h3 class="title">Delete Employee</h3><br>
                </div>
                <ul class="social">
                   <a href="#"><button>Click Here</button></a>
                </ul>
                </div>
            </div>
            
            </div></div>         
    
      <?php
    
   $bid=$_SESSION['bid'] ;
    echo $bid;
?>
</body>
</html>
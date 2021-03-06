
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Lancers redirect</title>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>

    <!-- Google imported font for pacifico & open sans -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <!-- Font awesome icon -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
*{
    font-family: "Open Sans", sans-serif;
    box-sizing: border-box;
}
ul,li{
    margin-left: 0;
    padding-left: 0;
    list-style: none;
}
body {
    overflow-x: hidden;
}
#sidebar-wrapper {
    min-height: 100vh;
    margin-left: -15rem;
    -webkit-transition: margin 0.25s ease-out;
    -moz-transition: margin 0.25s ease-out;
    -o-transition: margin 0.25s ease-out;
    transition: margin 0.25s ease-out;
    background-color: #091429 !important;
}

i {
    margin-right: 14px !important;
}
.nav-fa{
    color: #000;
    font-size:26px;
    margin-top: 10px;
}
#sidebar-wrapper .sidebar-heading {
    padding: 0.875rem 1.25rem;
}
.sidebar-heading {
    font-size: 36px;
    font-family: "Pacifico", cursive;
    color: azure;
    font-size: normal;
    font-weight: normal;
    line-height: 63px;
}
#sidebar-wrapper .sideMenu {
    width: 15rem;
}

#page-content-wrapper {
    min-width: 100vw;
}

#wrapper.toggled #sidebar-wrapper {
    margin-left: 0;
}

.sideMenu a{
    margin-top: 1rem;
    background-color: #091429 !important;
    color: azure;
    font-style: normal;
    font-size: 18px;
    line-height: 25px;
    font-family: "Open Sans", sans-serif;
}

@media (min-width: 768px) {
    #sidebar-wrapper {
        margin-left: 0;
    }

    #page-content-wrapper {
        min-width: 0;
        width: 100%;
    }

    #wrapper.toggled #sidebar-wrapper {
        margin-left: -15rem;
    }
}

nav{
    background-color:#ffffff;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.br{
    border-right: 1px solid #B1B1B1;
}
.page_nav{
    display: flex;
}
.searchDiv input{
    width: 100%;
    border-radius: 4px;
    border: 1px solid #b1b1b1;
    height: 40px;
    margin-top: 30px;
    margin-bottom: 30px;
    font-size: 16px;
    outline: none;
    text-indent: 32px;
}

.searchDiv{
    position: relative;
    left: 150px;
}
.fa-search{
    position: absolute;
    top: 40px;
    left: 10px;
}
.circle {
    height: 100%;
    width: 100%;
    padding: 10px;
    display: table-cell;
    text-align: center;
    vertical-align: middle;
    border-radius: 50%;
    border: 1px solid #000;
}
@media only screen and (max-width: 991px) {
    .searchDiv{
        left: 0 !important;
    }
    .fa-search{
        top: 10px !important;
        left: 10px;
    }
    .br{
        border-right: none !important;
    }
}
a.dropdown-item:hover{
    border-bottom: 1px solid #fff;
    transition: 1s;
}

.content-nav{
    /* Primary Blue */
    background: #009FFF;
    padding: 15px;
    width: 100%;
}
.content-nav a {
    font-weight: 60;
    font-size: 14px;
    line-height: 19px;
    /* identical to box height */
    color: #FFFFFF;

    text-decoration: none;
}
@media only screen and (max-width: 580px) {
    .content-nav{
        display: none !important;
    }
}
.in-circle{
    border: 1px solid black;
    border-radius: 50%;
    text-align: center;
    line-height: 0;
    padding: 10px;
}
.vert-dots:after {
    content: '\2807';
}
tbody tr{
    border: 1px solid #dee2e6;
}

.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    color:#fff;
    padding: 6px 0;
    font-size: 20px;
    line-height: 1.428571429;
    border-radius: 15px;
    font-style: normal;
    background-color: #009FFF;
    cursor: pointer;
}
.btn-circle.btn-lg {
    width: 50px;
    height: 50px;
    padding: 10px 16px;
    font-size: 18px;
    line-height:1.33;
    border-radius: 25px;
}
.plus-btn{
    position: relative;
    left: 50px;
}
table{
    width: 100%;
}

td{
    border:1px solid #dee2e6;
    padding:20px;
}
.bo-r-none{
    border-right: none;
}
.bo-l-none{
    border-left: none;
}
.table{
    border-collapse:separate;
    border-spacing:0 15px;
}
.table thead th{
    border-bottom: none;
}
.mt-20{
    text-align: center;
    margin-top: 10%;
    padding: 30px 0px 150px 0px;
    background: #ffffff;

}
#continue{
    background-color: #20B2AA;
    padding: 20px 10px 20px 10px;
    height: 80px;
    width: 250px;
    font-size: 1.5em;
    color: white;
    text-align: center;
}
.fa-check-circle{
    color: #00FA9A;

}

.bodying{
    background: #ccc;
}
    </style>
  </head>
    <!-- Custom styles for lancer -->
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-dark border-right bar" id="sidebar-wrapper">
          <div class="sidebar-heading">Lan<span style="color:#00F9FF">c</span>ers</div>
          <ul class="sideMenu">
            <li><a href="#" class="list-group-item list-group-item-action bg-light"> <i class="fa fa-home" aria-hidden="true"></i> Dashboard</a></li>
            <li><a href="#" class="list-group-item list-group-item-action bg-light"> <i class="fa fa-users" aria-hidden="true"> </i> Clients</a></li>
            <li><a href="#" class="list-group-item list-group-item-action bg-light"> <i class="fa fa-calculator" aria-hidden="true"> </i> Estimates</a></li>

            <li>
                <a href="#subMenu" data-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action bg-light dropdown-toggle"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Projects</a>
                <ul class="collapse list-unstyled" id="subMenu">
                    <li>
                        <a class="dropdown-item" style="color: azure;" href="#">Status</a>
                    </li>
                    <li>
                        <a class="dropdown-item" style="color: azure;" href="#">Overview</a>
                    </li>
                    <li>
                        <a class="dropdown-item" style="color: azure;" href="#">Collaborators</a>
                    </li>
                    <li>
                        <a class="dropdown-item" style="color: azure;" href="#">Task</a>
                    </li>
                    <li>
                        <a class="dropdown-item" style="color: azure;" href="#">Documents</a>
                    </li>
                </ul>
            </li>

            <li><a href="#invoice-toggle" class="list-group-item list-group-item-action bg-light"><i class="fa fa-file-text-o" aria-hidden="true"></i></i> Invoice</a></li>
            <li><a href="#" class="list-group-item list-group-item-action bg-light"><i class="fa fa-handshake-o"></i> Contract</a></li>
            <li><a href="#" class="list-group-item list-group-item-action bg-light"> <i class="fa fa-area-chart" aria-hidden="true"></i> Proposals</a></li>
          </ul>
        </div>
        <!-- end of sidebar-wrapper -->
        <div id="page-content-wrapper" class="mb-5">
            <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top border-bottom">
                <button class="navbar-toggler"type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <div class="searchDiv">
                        <i class="fa fa-search"></i>
                        <input class="form-control" type="search" placeholder="Search">
                    </div>

                    <ul class="nav navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item nav br" ><a class="nav-link" href="#"> <i class="fa fa-comments nav-fa" aria-hidden="true"></i></a></li>
                        <li class="nav-item nav br" ><img class="nav-link img-responsive" src="https://res.cloudinary.com/laplace/image/upload/v1570738202/s1zgdvui4w4h6dnfeyk9.svg"></li>
                        <li class="nav-item nav br" ><a class="nav-link" href="#"> <i class="fa fa-bell nav-fa" aria-hidden="true"></i></a></li>
                        <li class="nav-item nav" ><a class="nav-link" href="#"><i class="circle"><strong style="color: #000; font-style: normal;">AU</strong></i></a></li>
                    </ul>
                </div>
            </nav>
            <body class = "bodying">
            <!-- <div class="jumbotron jumbotron-fluid"> -->
            <div class ="container mt-20">
                    <i class="fa fa-check-circle fa-2x" aria-hidden="true"></i>
                    <!-- <input id = "tick" type="button" value="✓" /> -->
                <p><strong>Account Created</strong></p>

                <p>Your account has been successfully, Created</p>

                <input id = "continue" type = "continue"name = ""value = "Continue">

            </div>
            <!-- </div> -->
            </body>
</html>

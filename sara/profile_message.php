<?php
include('connection.php');
session_start();
$userid_sesstion =2;
$query_select_mes_cust = "SELECT messageid FROM `coustomer_mes` WHERE customerid =  $userid_sesstion";
    $stmt_select_mes_cust = $pdo->prepare($query_select_mes_cust);
    // $stmt_select_mes->bindParam(1, $userid_session);
    $stmt_select_mes_cust->execute();
   $row_mes_cust = $stmt_select_mes_cust->fetch(PDO::FETCH_ASSOC);
   echo "hi";
   var_dump( $row_mes_cust);
   $messageid = $row_mes_cust;

   $query_select_messeges = "SELECT messageid FROM `coustomer_mes` WHERE customerid =  $userid_sesstion";
    $stmt_select_messeges = $pdo->prepare($query_select_messeges);
    // $stmt_select_mes->bindParam(1, $userid_session);
    $stmt_select_messeges->execute();
   $row_messeges = $stmt_select_messeges->fetch(PDO::FETCH_ASSOC);
?>


<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Profile</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="../favicon.ico" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../node_modules/ionicons/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="../node_modules/icon-kit/dist/css/iconkit.min.css">
    <link rel="stylesheet" href="../node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="../node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../dist/css/theme.min.css">
    <script src="../src/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <div class="wrapper">
        <header class="header-top" header-theme="light">
            <div class="container-fluid">
                <div class="d-flex justify-content-between">
                    <div class="top-menu d-flex align-items-center">
                        <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                        <div class="header-search">
                            <div class="input-group">
                                <span class="input-group-addon search-close"><i class="ik ik-x"></i></span>
                                <input type="text" class="form-control">
                                <span class="input-group-addon search-btn"><i class="ik ik-search"></i></span>
                            </div>
                        </div>
                        <button type="button" id="navbar-fullscreen" class="nav-link"><i
                                class="ik ik-maximize"></i></button>
                    </div>
                    <div class="top-menu d-flex align-items-center">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="notiDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="ik ik-bell"></i><span class="badge bg-danger">3</span></a>
                            <div class="dropdown-menu dropdown-menu-right notification-dropdown"
                                aria-labelledby="notiDropdown">
                                <h4 class="header">Notifications</h4>
                                <div class="notifications-wrap">
                                    <a href="#" class="media">
                                        <span class="d-flex">
                                            <i class="ik ik-check"></i>
                                        </span>
                                        <span class="media-body">
                                            <span class="heading-font-family media-heading">Invitation accepted</span>
                                            <span class="media-content">Your have been Invited ...</span>
                                        </span>
                                    </a>
                                    <a href="#" class="media">
                                        <span class="d-flex">
                                            <img src="../img/users/1.jpg" class="rounded-circle" alt="">
                                        </span>
                                        <span class="media-body">
                                            <span class="heading-font-family media-heading">Steve Smith</span>
                                            <span class="media-content">I slowly updated projects</span>
                                        </span>
                                    </a>
                                    <a href="#" class="media">
                                        <span class="d-flex">
                                            <i class="ik ik-calendar"></i>
                                        </span>
                                        <span class="media-body">
                                            <span class="heading-font-family media-heading">To Do</span>
                                            <span class="media-content">Meeting with Nathan on Friday 8 AM ...</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="footer"><a href="javascript:void(0);">See all activity</a></div>
                            </div>
                        </div>
                        <button type="button" class="nav-link ml-10 right-sidebar-toggle"><i
                                class="ik ik-message-square"></i><span class="badge bg-success">3</span></button>
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="ik ik-plus"></i></a>
                            <div class="dropdown-menu dropdown-menu-right menu-grid" aria-labelledby="menuDropdown">
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Dashboard"><i class="ik ik-bar-chart-2"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Message"><i class="ik ik-mail"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Accounts"><i class="ik ik-users"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Sales"><i class="ik ik-shopping-cart"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Purchase"><i class="ik ik-briefcase"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Pages"><i class="ik ik-clipboard"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Chats"><i class="ik ik-message-square"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Contacts"><i class="ik ik-map-pin"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Blocks"><i class="ik ik-inbox"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Events"><i class="ik ik-calendar"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Notifications"><i class="ik ik-bell"></i></a>
                                <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="More"><i class="ik ik-more-horizontal"></i></a>
                            </div>
                        </div>
                        <button type="button" class="nav-link ml-10" id="apps_modal_btn" data-toggle="modal"
                            data-target="#appsModal"><i class="ik ik-grid"></i></button>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><img class="avatar" src="../img/user.jpg"
                                    alt=""></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile.html"><i class="ik ik-user dropdown-icon"></i>
                                    Profile</a>
                                <a class="dropdown-item" href="#"><i class="ik ik-settings dropdown-icon"></i>
                                    Settings</a>
                                <a class="dropdown-item" href="#"><span class="float-right"><span
                                            class="badge badge-primary">6</span></span><i
                                        class="ik ik-mail dropdown-icon"></i> Inbox</a>
                                <a class="dropdown-item" href="#"><i class="ik ik-navigation dropdown-icon"></i>
                                    Message</a>
                                <a class="dropdown-item" href="login.html"><i class="ik ik-power dropdown-icon"></i>
                                    Logout</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>

        <div class="page-wrap">
            <div class="app-sidebar colored">
                <div class="sidebar-header">

                    <button type="button" class="nav-toggle"><i data-toggle="expanded"
                            class="ik ik-toggle-right toggle-icon"></i></button>
                    <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                </div>

                <div class="sidebar-content ps ps--active-y">
                    <div class="nav-container">
                        <nav id="main-menu-navigation" class="navigation-main">

                            <div class="nav-item">
                                <a href="home.php"><span>Dashboard</span></a>
                            </div>
                            <div class="nav-item">
                                <a href="profile_info.php"><span>Account</span></a>
                            </div>

                            <div class="nav-lavel">Orders</div>
                            <div class="nav-item">
                                <a href="profile_order.php"><span>Order</span></a>
                                
                            </div>
                           
                            <div class="nav-item">
                                <a href="profile_wishlist.php"><span> Wishlist</span> </a>
                                
                            </div>
                            <div class="nav-item">

                                <div class="submenu-content">
                                    <a href="ui/session-timeout.html" class="menu-item">Session Timeout</a>
                                </div>
                            </div>
                            <div class="nav-item">

                            </div>
                            <div class="nav-lavel">Adress</div>
                           
                            <div class="nav-item">
                                <a href="profile_shipment.php"><span>shipment Adress</span>
                                </a>
                            </div>


                            <div class="nav-item">
                                <a href="calendar.html"><span>Calendar</span></a>
                            </div>


                            <div class="nav-lavel">Support</div>

                            <div class="nav-item">
                                <a href="javascript:void(0)"><span>Submit
                                        Issue</span></a>
                            </div>
                        </nav>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 687px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 329px;"></div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 820px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 481px;"></div>
                    </div>
                </div>
            </div>
            <div class="main-content">
                <div class="container-fluid">



                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                            <div class="card-header">
                                    <h3> Message Info</h3>
                                </div>
                                
                                <div class="card-body">
                                    <div id="data_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div id="data_table_wrapper"
                                                    class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div id="data_table_wrapper"
                                                                class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                                
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <table id="data_table"
                                                                            class="table dataTable no-footer"
                                                                            role="grid"
                                                                            aria-describedby="data_table_info">
                                                                            <thead>
                                                                                <tr role="row">
                                                                                    <th class="sorting_asc" tabindex="0"
                                                                                        aria-controls="data_table"
                                                                                        rowspan="1" colspan="1"
                                                                                        aria-label="Id: activate to sort column descending"
                                                                                        style="width: 38.575px;"
                                                                                        aria-sort="ascending">
                                                                                        Fullname</th>
                                                                                    <th class="nosort sorting_disabled"
                                                                                        rowspan="1" colspan="1"
                                                                                        aria-label="Avatar"
                                                                                        style="width: 75.1125px;">Email
                                                                                    </th>
                                                                                    <th class="sorting" tabindex="0"
                                                                                        aria-controls="data_table"
                                                                                        rowspan="1" colspan="1"
                                                                                        aria-label="Name: activate to sort column ascending"
                                                                                        style="width: 150px;">Message
                                                                                    </th>
                                                                                    <th class="sorting" tabindex="0"
                                                                                        aria-controls="data_table"
                                                                                        rowspan="1" colspan="1"
                                                                                        aria-label="Name: activate to sort column ascending"
                                                                                        style="width: 150px;">Message_Date
                                                                                    </th>
                                                                                    <th class="nosort sorting_disabled"
                                                                                        rowspan="1" colspan="1"
                                                                                        aria-label="&amp;nbsp;"
                                                                                        style="width: 95.9875px;">&nbsp;
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>

         
                                                                              
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12">








                            <!-- Language - Comma Decimal Place table end -->
                        </div>
                    </div>
                </div>
            </div>
            <aside class="right-sidebar ps">
                <div class="sidebar-chat" data-plugin="chat-sidebar">
                    <div class="sidebar-chat-info">
                        <h6>Chat List</h6>
                        <form class="mr-t-10">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search for friends ...">
                                <i class="ik ik-search"></i>
                            </div>
                        </form>
                    </div>
                    <!-- <div class="chat-list">
                        <div class="list-group row">
                            <a href="javascript:void(0)" class="list-group-item" data-chat-user="Gene Newman">
                                <figure class="user--online">
                                    <img src="../img/users/1.jpg" class="rounded-circle" alt="">
                                </figure><span><span class="name">Gene Newman</span> <span
                                        class="username">@gene_newman</span> </span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item" data-chat-user="Billy Black">
                                <figure class="user--online">
                                    <img src="../img/users/2.jpg" class="rounded-circle" alt="">
                                </figure><span><span class="name">Billy Black</span> <span
                                        class="username">@billyblack</span> </span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item" data-chat-user="Herbert Diaz">
                                <figure class="user--online">
                                    <img src="../img/users/3.jpg" class="rounded-circle" alt="">
                                </figure><span><span class="name">Herbert Diaz</span> <span
                                        class="username">@herbert</span> </span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item" data-chat-user="Sylvia Harvey">
                                <figure class="user--busy">
                                    <img src="../img/users/4.jpg" class="rounded-circle" alt="">
                                </figure><span><span class="name">Sylvia Harvey</span> <span
                                        class="username">@sylvia</span> </span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item active" data-chat-user="Marsha Hoffman">
                                <figure class="user--busy">
                                    <img src="../img/users/5.jpg" class="rounded-circle" alt="">
                                </figure><span><span class="name">Marsha Hoffman</span> <span
                                        class="username">@m_hoffman</span> </span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item" data-chat-user="Mason Grant">
                                <figure class="user--offline">
                                    <img src="../img/users/1.jpg" class="rounded-circle" alt="">
                                </figure><span><span class="name">Mason Grant</span> <span
                                        class="username">@masongrant</span> </span>
                            </a>
                            <a href="javascript:void(0)" class="list-group-item" data-chat-user="Shelly Sullivan">
                                <figure class="user--offline">
                                    <img src="../img/users/2.jpg" class="rounded-circle" alt="">
                                </figure><span><span class="name">Shelly Sullivan</span> <span
                                        class="username">@shelly</span></span>
                            </a>
                        </div>
                    </div> -->
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                </div>
            </aside>

            <div class="chat-panel" hidden="">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <a href="javascript:void(0);"><i class="ik ik-message-square text-success"></i></a>
                        <span class="user-name">John Doe</span>
                        <button type="button" class="close" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="card-body">
                        <div class="widget-chat-activity flex-1">
                            <div class="messages ps">
                                <div class="message media reply">
                                    <figure class="user--online">
                                        <a href="#">
                                            <img src="../img/users/3.jpg" class="rounded-circle" alt="">
                                        </a>
                                    </figure>
                                    <div class="message-body media-body">
                                        <p>Epic Cheeseburgers come in all kind of styles.</p>
                                    </div>
                                </div>
                                <div class="message media">
                                    <figure class="user--online">
                                        <a href="#">
                                            <img src="../img/users/1.jpg" class="rounded-circle" alt="">
                                        </a>
                                    </figure>
                                    <div class="message-body media-body">
                                        <p>Cheeseburgers make your knees weak.</p>
                                    </div>
                                </div>
                                <div class="message media reply">
                                    <figure class="user--offline">
                                        <a href="#">
                                            <img src="../img/users/5.jpg" class="rounded-circle" alt="">
                                        </a>
                                    </figure>
                                    <div class="message-body media-body">
                                        <p>Cheeseburgers will never let you down.</p>
                                        <p>They'll also never run around or desert you.</p>
                                    </div>
                                </div>
                                <div class="message media">
                                    <figure class="user--online">
                                        <a href="#">
                                            <img src="../img/users/1.jpg" class="rounded-circle" alt="">
                                        </a>
                                    </figure>
                                    <div class="message-body media-body">
                                        <p>A great cheeseburger is a gastronomical event.</p>
                                    </div>
                                </div>
                                <div class="message media reply">
                                    <figure class="user--busy">
                                        <a href="#">
                                            <img src="../img/users/5.jpg" class="rounded-circle" alt="">
                                        </a>
                                    </figure>
                                    <div class="message-body media-body">
                                        <p>There's a cheesy incarnation waiting for you no matter what you palete
                                            preferences are.</p>
                                    </div>
                                </div>
                                <div class="message media">
                                    <figure class="user--online">
                                        <a href="#">
                                            <img src="../img/users/1.jpg" class="rounded-circle" alt="">
                                        </a>
                                    </figure>
                                    <div class="message-body media-body">
                                        <p>If you are a vegan, we are sorry for you loss.</p>
                                    </div>
                                </div>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                </div>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="javascript:void(0)" class="card-footer" method="post">
                        <div class="d-flex justify-content-end">
                            <textarea class="border-0 flex-1" rows="1" placeholder="Type your message here"></textarea>
                            <button class="btn btn-icon" type="submit"><i
                                    class="ik ik-arrow-right text-success"></i></button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>




    <div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog" aria-labelledby="appsModalLabel"
        aria-hidden="true" data-backdrop="false">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                class="ik ik-x-circle"></i></button>
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="quick-search">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 ml-auto mr-auto">
                                <div class="input-wrap">
                                    <input type="text" id="quick-search" class="form-control" placeholder="Search...">
                                    <i class="ik ik-search"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="container">
                        <div class="apps-wrap">
                            <div class="app-item">
                                <a href="#"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-mail"></i><span>Message</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-users"></i><span>Accounts</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-shopping-cart"></i><span>Sales</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-briefcase"></i><span>Purchase</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-server"></i><span>Menus</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-clipboard"></i><span>Pages</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-message-square"></i><span>Chats</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-map-pin"></i><span>Contacts</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-box"></i><span>Blocks</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-calendar"></i><span>Events</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-bell"></i><span>Notifications</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-pie-chart"></i><span>Reports</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-layers"></i><span>Tasks</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-edit"></i><span>Blogs</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-settings"></i><span>Settings</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-more-horizontal"></i><span>More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="../src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
    <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="../node_modules/screenfull/dist/screenfull.js"></script>
    <script src="../node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../dist/js/theme.min.js"></script>
    <script src="../js/datatables.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
            (function (b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l; b[l] || (b[l] =
                    function () { (b[l].q = b[l].q || []).push(arguments) }); b[l].l = +new Date;
                e = o.createElement(i); r = o.getElementsByTagName(i)[0];
                e.src = 'https://www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e, r)
            }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X', 'auto'); ga('send', 'pageview');
    </script>




</body>

</html>
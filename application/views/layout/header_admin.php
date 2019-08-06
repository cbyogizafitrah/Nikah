
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/css/local.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/css/main.css" />

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <link id="gridcss" rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/dark-bootstrap/all.min.css" />

    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
</head>
<body>
    <div id="wrapper">
          <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin Panel</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul id="active" class="nav navbar-nav side-nav">
                    <li><a href="<?php echo site_url("admin/home")?>"><i class="fa fa-bullseye"></i> Admin</a></li>
                    <li><a href="<?php echo site_url("user/home")?>"><i class="fa fa-tasks"></i> Users</a></li>
                    <li><a href="<?php echo site_url("tahap/home")?>"><i class="fa fa-globe"></i> Content</a></li>
                    <li><a href="<?php echo site_url("komentar/home")?>"><i class="fa fa-list-ol"></i> Komentar</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                        <a class="navbar-brand">Hai, <?php echo $this->session->userdata("email"); ?></a>
                        <a class="navbar-brand" href="<?php echo site_url("admin/logout")?>">Logout<b class="caret"></b></a>

                    <li class="divider-vertical"></li>
                    <li>
                    </li>
                </ul>
            </div>
        </nav>
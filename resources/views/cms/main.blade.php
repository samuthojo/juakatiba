@extends('layouts.app4')
@section('content')
<body class="hold-transition skin-blue sidebar-mini" style="font-family: 'Roboto', 'Helvetica Neue Light'">
    <div class="wrapper">

        <header class="main-header">
            <style>
                .ipf-preloader{
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    padding-top: 1%;
                    height: 40px;
                    z-index: 9999;
                    text-align: center;
                    align-content: center;
                    display: none;
                }

            </style>
            <!-- Logo -->
            <a href="#" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>J</b>K</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Jua</b>Katiba</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
                <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li style="cursor: pointer;"><a id="btnLogout" href="{{ url('api/logout') }}" title="logout">logout</a></li>
                </ul>
            </div>
            </nav>
        </header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form" style="display: none;">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Menu</span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="javascript:menu_links('katiba77');"><i class="fa fa-circle-o"></i>Katiba</a></li>
                    <li><a href="javascript:menu_links('yaliyomo');"><i class="fa fa-circle-o"></i>Yaliyomo</a></li>
                    <li><a href="javascript:menu_links('midahalo');"><i class="fa fa-circle-o"></i>Midahalo</a></li>
                    <li><a href="javascript:menu_links('habari');"><i class="fa fa-circle-o"></i>Habari</a></li>
                    <li><a href="javascript:menu_links('machapisho');"><i class="fa fa-circle-o"></i>Machapisho</a></li>
                    <li><a href="javascript:menu_links('history');"><i class="fa fa-circle-o"></i>History</a></li>
                    <li><a href="javascript:menu_links('change_password');"><i class="fa fa-circle-o"></i>Change password</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<section class="content" id="main_content">
    <div class="row">
        <p class="login-box-msg" style="font-size: large; color: #000000;">KATIBA 1977</p>
        <div class="col-lg-12 col-xs-12">
            <button type="button" style="float: left;" class="btn btn-small btn-success" onclick="add_form('katiba77')">ongeza ibara</button>
            <table id="katibaTable" class="table table-striped table-hover">
                <thead>
                <tr>
                    <th scope="col">s/n. <span class="column-sorter"></span></th>
                    <th scope="col">Lugha <span class="column-sorter"></span></th>
                    <th scope="col">Katiba <span class="column-sorter"></span></th>
                    <th scope="col">Ibara <span class="column-sorter"></span></th>
                    <th scope="col">Action<span class="column-sorter"></span></th>
                </tr>
                </thead>
                <tbody>

                @if(count($katiba)>0)

                    @foreach($katiba as $details)
                    <tr>
                    <td> {{ $loop->iteration }} </td>
                    <td> {{ $details['type'] }}</td>
                    <td> {{ $details['katiba'] }}</td>
                    <td> {{ $details['ibara'] }}</td>

                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-yellow" onclick="form_edit('katiba77', {{ $details['id'] }})" style="border: none; background-color: #ffffff; color: darkred;"><i class="fa fa-edit"></i></button>
                                <button type="button" class="btn btn-yellow" onclick="form_delete('katiba77', {{ $details['id'] }})" style="border: none; background-color: #ffffff;"><i class="fa fa-trash"></i></button>
                                <button type="button" class="btn btn-yellow" onclick="read_description({{ $details['id'] }})" style="border: none; background-color: #ffffff;">Soma maelezo</button>
                            </div>
                        </td>
                        </tr>
                    @endforeach
                @endif

                </tbody>
            </table>
        </div>

    </div>

</section><!-- /.content -->
</div><!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 0.0.1
    </div>
    <strong>Copyright &copy; 2016-2017 <a href="http://ipfsoftwares.com">Designed & developed by IPF</a>.</strong> All rights reserved.
</footer>

</div><!-- ./wrapper -->

<div class="ipf-preloader">
    <span><i class="fa fa-circle-o-notch fa-spin fa-2x" style="color: white;"></i></span><br/><br/><br/>
</div>
</body>
</html>
<script>
    $(document).ready(function () {
        $('#katibaTable')
            .dataTable({
                iDisplayLength: 8,
                oLanguage: {
                    sSearch: 'search:',
                    sZeroRecords: 'No  results found ',
                    oPaginate: {
                        sNext: '<i class="fa fa-arrow-right"></i>',
                        sPrevious: '<i class="fa fa-arrow-left"></i>'
                    }
                },
                bLengthChange: false,
                sDom: "<'row-fluid' <'span4'l> <'span8'f> > rt <'row-fluid' <'span12'p> >"
            });
        $('#exampleDT_length select').select2({
            minimumResultsForSearch: 6,
            width: "off"
        });

    });
</script>
@endsection

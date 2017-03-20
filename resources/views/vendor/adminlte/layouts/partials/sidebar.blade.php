<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">

         <?php if(Auth::user()->job_title == 'admin'){ ?>  

            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>Dash board</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>Messages</span></a></li>


             <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Client</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Add New Client</a></li>
                    <li><a href="#">Our Client</a></li>
                    <li><a href="#">Client New Services</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Staff</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Add New Staff</a></li>
                    <li><a href="#">Our Staff</a></li>
                    <li><a href="#">Staffs Requests</a></li>
                </ul>
            </li>

             <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Services</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Add Services Category</a></li>
                    <li><a href="#">Add Services</a></li>
                </ul>
            </li>

        <?php } ?>

        <?php if(Auth::user()->job_title == 'client'){ ?>  

            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>Dash board</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>Messages</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>My Documents</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>Services Task's</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>Request Call</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>My Payments</span></a></li>

        <?php } ?>


         <?php if(Auth::user()->job_title == 'staff'){ ?>  

            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>Dash board</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>Messages</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>My Tasks</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>Client Call Requests</span></a></li>
            
        <?php } ?>



           
 </ul>
           
       <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

<aside class="main-sidebar hidden-print ">
 <section class="sidebar" id="sidebar-scroll">
    <!-- Sidebar Menu-->
    <ul class="sidebar-menu">
        <li class="nav-level">&nbsp;&nbsp; Menu Panel</li>
        <li class="active treeview">
            <a class="waves-effect waves-dark" href="<?php echo base_url('admin/dashboard'); ?>">
                <i class="icon-speedometer"></i><span> Admin Dashboard</span>
            </a>                
        </li>
    
        <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span> Add Category</span><i class="icon-arrow-down"></i></a>
            <ul class="treeview-menu">
                <li><a class="waves-effect waves-dark" href="<?php echo base_url('admin/Category/add'); ?>"><i class="icon-arrow-right"></i> Add</a></li>
                 <li><a class="waves-effect waves-dark" href="<?php echo base_url('admin/Category/view');?>"><i class="icon-arrow-right"></i> Manage Category</a></li>
                
            </ul>
        </li>


        <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-book-open"></i><span> Sub Category</span><i class="icon-arrow-down"></i></a>
            <ul class="treeview-menu">
                <li><a class="waves-effect waves-dark" href="<?php echo base_url('admin/Category/subcategory');?>"><i class="icon-arrow-right"></i> Add </a></li>
                
                <li><a class="waves-effect waves-dark" href="<?php echo base_url('admin/Category/managesubcategory'); ?>"><i class="icon-arrow-right"></i> Manage Sub Category</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-docs"></i><span>Add Post</span><i class="icon-arrow-down"></i></a>
            <ul class="treeview-menu">
                <li class="treeview"><a href="<?php echo base_url('admin/News/add'); ?>"><i class="icon-arrow-right"></i><span> Add Post</span><i class="icon-arrow-down"></i></a>
                 </li>
                
                <li><a class="waves-effect waves-dark" href="<?php echo base_url('admin/News/managenews'); ?>" target="_blank"><i class="icon-arrow-right"></i> Manage Post</a></li>
              
            </ul>
        </li>


        <li class="nav-level">&nbsp;&nbsp; Comment Section</li>
        <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icofont icofont-company"></i><span>Comments</span><i class="icon-arrow-down"></i></a>
            <ul class="treeview-menu">
                <li>
                    <a class="waves-effect waves-dark" href="<?php echo base_url('admin/Usercomment'); ?>">
                        <i class="icon-arrow-right"></i>
                       Manage Comments 
                    </a>
                </li>
               
            </ul>
        </li>

        <li class="nav-level">&nbsp;&nbsp; Admin Navigations</li>
        <li class="treeview"><a class="waves-effect waves-dark" href="<?=base_url()?>Lecturer"><i class="icofont icofont-company"></i><span>Lecturer</span></a>
        </li>

        <li class="treeview"><a class="waves-effect waves-dark" href="<?=base_url()?>assetManage"><i class="icofont icofont-company"></i><span>Manage Assets</span></a>
        </li>

        <li class="treeview"><a class="waves-effect waves-dark" href="<?=base_url()?>RequestManage"><i class="icofont icofont-company"></i><span>Manage Request</span></a>
        </li>

        <li class="treeview"><a class="waves-effect waves-dark" href="<?=base_url()?>ManageCourse"><i class="icofont icofont-company"></i><span>Manage Course</span></a>
        </li>


    </ul>

 </section>
</aside>
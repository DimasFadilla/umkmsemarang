 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
   <!-- sidebar: style can be found in sidebar.less -->
   <section class="sidebar">

     <!-- /.search form -->
     <!-- sidebar menu: : style can be found in sidebar.less -->
     <ul class="sidebar-menu">
       <li class="header">Menu Utama</li>

       <!--<li class="treeview">
          <a href="#">
            <i class="fa  fa-tasks"></i>
            <span>Menampilkan Event </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">-->
       <!-- <li><a href="<?php echo base_url() . 'user/tulisan/add_tulisan' ?>"><i class="fa fa-thumb-tack"></i> Post Berita</a></li>
           <li><a href="<?php echo base_url() . 'user/tulisan' ?>"><i class="fa fa-list"></i> List Event </a></li>

          </ul>
        </li>-->

       <li>
         <a href="<?php echo base_url() . 'user/mahasiswa' ?>">
           <i class="fa fa-user"></i> <span>Data Pribadi</span>
           <span class="pull-right-container">
             <small class="label pull-right"></small>
           </span>
         </a>
       </li>
       <li>
         <a href="<?php echo base_url() . 'user/pesan' ?>">
           <i class="fa fa-envelope"></i> <span></span>Pengaduan
           <span class="pull-right-container">
             <small class="label pull-right"></small>
           </span>
         </a>
       </li>

       <li>
         <a href="<?php echo base_url() . 'user/chat' ?>">
           <i class="fa fa-envelope"></i> <span></span>Chat UMKM
           <span class="pull-right-container">
             <small class="label pull-right"></small>
           </span>
         </a>
       </li>

       <li>
         <a href="<?php echo base_url() . 'user/user/logout' ?>">
           <i class="fa fa-sign-out"></i> <span>Sign Out</span>
           <span class="pull-right-container">
             <small class="label pull-right"></small>
           </span>
         </a>
       </li>


     </ul>
   </section>
   <!-- /.sidebar -->
 </aside>
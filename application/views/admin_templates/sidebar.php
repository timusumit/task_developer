    <div class="sidebar" data-color="orange" data-background-color="white" data-image="<?php echo base_url('admin_assets'); ?>/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->

    <?php
$classvalue=$this->uri->segment(2);

     ?>
      <div class="logo">
        <a href="<?php echo base_url(); ?>" class="simple-text logo-normal" target="_blank">
          View Site
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?php if (empty($classvalue)) echo "active" ?> ">
            <a class="nav-link" href="<?php echo base_url('admin'); ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
             

       
       
            <li class="nav-item   <?php if ($classvalue=='create_page') echo "active" ?>  ">
            <a class="nav-link" href="<?php echo base_url('admin/create_page') ?>">
              <i class="material-icons">file_copy</i>
              <p>Create Page</p>
            </a>
          </li>
        
        <li class="nav-item ">
            <a class="nav-link collapsed" data-toggle="collapse" href="#pagesExamples" aria-expanded="false">
              <i class="material-icons">settings</i>
              <p> General Setup
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse <?php if ($classvalue=='slider_setup' or $classvalue=='contact_setup' or $classvalue=='menu_setup' or $classvalue=='submenu_setup')   echo "show"?>" id="pagesExamples" style="">
              <ul class="nav">
                <li class="nav-item <?php if ($classvalue=='menu_setup') echo "active" ?> ">
                  <a class="nav-link" href="<?php echo base_url('admin/menu_setup'); ?>">
                    <i class="material-icons">menu</i>
                    <p>Menu Setup</p>
                  </a>
                  </li> 

                   <li class="nav-item <?php if ($classvalue=='submenu_setup') echo "active" ?> ">
                  <a class="nav-link" href="<?php echo base_url('admin/submenu_setup'); ?>">
                    <i class="material-icons">menu</i>
                    <p>Sub Menu Setup</p>
                  </a>
                  </li> 
               
               
                 
                                 
              </ul>
            </div>
          </li>

         





        
        </ul>
      </div>
    </div>
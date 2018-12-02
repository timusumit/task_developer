<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url(); ?>">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       <!--  <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li> -->

        <?php foreach($menu_setup as $data): ?>
      <li class="menu-item <?php if($data['ms_has_sub']==1)echo 'dropdown' ?> "><a data-toggle="<?php  if($data['ms_has_sub']==1) echo 'dropdown'   ?>" class="<?php  if($data['ms_has_sub']==1) echo 'dropdown-toggle'   ?>" href="<?php echo base_url('site/page/'.$data['slug']); ?>"><?php echo $data['ms_title'] ?><span class="<?php  if($data['ms_has_sub']==1) echo 'caret'   ?>"></span></a>
<?php if($data['ms_has_sub']==1){ ?>
        <ul class="dropdown-menu">

        <?php foreach($submenu as $key=>$sm):?>
          
        <?php if($data['ms_id']==$sm['sms_ms_id']){ ?>
          <li class="menu-item ">
            <a href="<?php echo base_url('site/page/'.$sm['slug']); ?>"><?php echo $sm['sms_title'] ?>
            </a>
          </li> 
        <?php } ?>


        <?php endforeach; ?>

        </ul>

      <?php }?>


      </li>
      
<?php endforeach;?> 
      </ul>
      
    
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
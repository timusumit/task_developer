
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">help_outline</i>
                  </div>
                  <p class="card-category">Inquiries</p>
                  <h3 class="card-title"><?php $inquiryc=0; foreach ($inquiry as $key=>$data): 
             $inquiryc++;  endforeach; echo $inquiryc; ?>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-warning">help_outline</i>
                   Inquiries From Contact Page
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">person</i>
                  </div>
                  <p class="card-category">Confirmed</p>
                  <h3 class="card-title"><?php $count=0; foreach ($add_appointment as $key=>$data):{  $test_status=$data['app_status'];

                      if($test_status=='confirmed'){

                        $count++;
                      }                     
                      
                    }  endforeach; echo $count; ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Appointments
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">person</i>
                  </div>
                  <p class="card-category">Cancelled</p>
                  <h3 class="card-title">
                    <?php $holdcount=0; foreach ($add_appointment as $key=>$data):{  $test_status=$data['app_status'];

                      if($test_status=='cancelled'){

                        $holdcount++;
                      }                     
                      
                    }  endforeach; echo $holdcount; ?>

                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Appointments
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">person</i>
                  </div>
                  <p class="card-category">Unseen</p>
                  <h3 class="card-title"><?php $holdcount=0; foreach ($add_appointment as $key=>$data):{  $test_status=$data['app_status'];

                      if($test_status=='unseen'){

                        $holdcount++;
                      }                     
                      
                    }  endforeach; echo $holdcount; ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">date_range</i> Appointments
                  </div>
                </div>
              </div>
            </div>
          </div>
       
        </div>
      </div>

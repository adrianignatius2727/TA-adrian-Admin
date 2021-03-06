
    <!-- Start Page Content -->

    <div class="row">
        <div class="col-lg-12">

            
           <div class="panel panel-info">
                <div class="panel-heading"> 
                     <i class="fa fa-plus"></i> &nbsp;Tambah Kepala Keamanan 

                </div>
                <div class="panel-body table-responsive">
                
                <?php $msg = $this->session->flashdata('msg'); ?>
            <?php if (isset($msg)): ?>
                <div class="alert alert-success delete_msg pull" style="width: 100%"> <i class="fa fa-check-circle"></i> <?php echo $msg; ?> &nbsp;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
            <?php endif ?>

				 <?php $error_msg = $this->session->flashdata('error_msg'); ?>
            <?php if (isset($error_msg)): ?>
                <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i> <?php echo $error_msg; ?> &nbsp;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
            <?php endif ?>
			
			
                    <form method="post" action="<?php echo base_url('admin/kepala_keamanan/add') ?>" class="form-horizontal" novalidate>
                       <div class="form-group">
                 	<label class="col-md-12" for="example-text">Nama Lengkap</label>
                    <div class="col-sm-12">
                                            <input type="text" name="nama_user" class="form-control" required data-validation-required-message="Nama Lengkap is required">
                                        </div>
                                    </div>
                              

                           <div class="form-group">
                 	<label class="col-md-12" for="example-text">No. Handphone</label>
                    <div class="col-sm-12">
                                            <input type="text" onkeypress="validate(event)" name="telpon_user" class="form-control" required data-validation-required-message="No. Handphone is required">
                                        </div>
                                    </div>
                              

                          <div class="form-group">
                 	<label class="col-md-12" for="example-text">Password</label>
                    <div class="col-sm-12">
                                            <input type="password" name="password_user" class="form-control" required data-validation-required-message="Password is required">
                                        </div>
                                    </div>
												
                          <div class="form-group">
                 	<label class="col-md-12" for="example-text">Kecamatan</label>
                    <div class="col-sm-12">
                                                <select class="form-control custom-select" name="kecamatan_user" aria-invalid="false">
                                                    <?php foreach ($kecamatan as $kn): ?>   
                                                        <option value="<?php echo $kn['id_kecamatan']; ?>"><?php echo $kn['nama_kecamatan']; ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                            <div class="col-sm-offset-3 col-sm-5">
                                  <button type="submit" class="btn btn-info btn-rounded btn-sm"> <i class="fa fa-plus"></i>&nbsp;&nbsp;Save</button>
                            </div>
                        </div>
                           
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
<script>
function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
</script>

    <!-- End Page Content -->
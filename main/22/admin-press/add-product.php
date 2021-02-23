<?php include('header.php');
$ob->add_pro();
?>
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Form Layout</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Forms</li>
                        <li class="breadcrumb-item active">Form Layout</li>
                    </ol>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                     <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Other Sample form</h4>
                            </div>
                            <div class="card-body">
                                <form  method="post" enctype="multipart/form-data">
                                    <div class="form-body">
                                        <h3 class="card-title">Person Info</h3>
                                        <hr>
                                        
  
        <div class="row">
            
            <div class="col-md-12"><div class="form-group">
                <label for="">Product Name</label>
                <input type="text" class="form-control" name="p_name" id="" aria-describedby="helpId" placeholder="">
            </div>
            </div>
 </div>
        </div>  
        <div class="row">
        <div class="col-md-4">
        <div class="form-group">
            <label for="">Buy Price</label>
            <input type="text" class="form-control" name="b_price" id="" aria-describedby="helpId" placeholder="">
        </div>
        </div>
        <div class="col-md-4">
        <div class="form-group">
            <label for="">Sale Price</label>
            <input type="text" class="form-control" name="s_price" id="" aria-describedby="helpId" placeholder="">
        </div>
</div><div class="col-md-4">
        <div class="form-group">
            <label for="">Product Stock</label>
            <input type="text" class="form-control" name="p_stock" id="" aria-describedby="helpId" placeholder="">
        </div>
        </div>
        </div>
        <div class="row">
            <div class="col-md-6">
        <div class="form-group">
            <label for="">Product Images</label>
            <input type="file" class="form-control" name="img[]" multiple="true">
        </div>
        </div>
      
            <div class="col-md-6">
        <div class="form-group">
            <label for="">Catalog</label>
            <select class="form-control" name="c_name" id=""> 
                <option value="">Select One</option>
                    <?php  
                    
                    foreach($ob->sel_catlog() as $c){
                    echo('<option value="'.$c['c_id'].'">'.$c['c_name'].'</option>');
                }
                    ?>                 


            </select>
        </div>
         </div>
           </div>

           <div class="col-md-12">
             <label for="">Product Dec</label>
            <textarea class="form-control" name="p_dec" rows="5"></textarea>
           </div>
      <div class="col-md-12">
        <button type="submit" name="btn_pro" class="btn btn-primary btn-block">
            Add
        </button>
    </div>
    </form>
    </div>
    </div></div></div></div></div></div></div></div></div></div></div></div>

    <!-- Optional JavaScript -->
     
 

<?php include('footer.php') ?>
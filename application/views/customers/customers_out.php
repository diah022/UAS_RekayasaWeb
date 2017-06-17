<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('header');
//$this->load->view('sidebar');
?>
<!--<div id="content">-->
<div class="container">
   
            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <h1>CUSTOMERS<hr /></h1>
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <th>No.</th><th>ID</th><th>Company Name</th><th>City</th><th>Country</th>
                        </thead>
                        <?php
                                $no=1;
                                foreach($Customers as $u){
                                        echo "<tr><td align=center>$no.</td><td>$u->CustomerID</td><td>$u->CompanyName</td><td>$u->City</td><td>$u->Country</td></tr>";
                                        $no++;	}
                        ?>
                        </table>
                    </div>
                </div>
            </div>
    <!-- /.container -->
</div>
<?php
$this->load->view('footer');
?>
<div style="clear: both;"></div>
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
                        <h1>SHIPPERS<hr /></h1>
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <th>No.</th><th>Company Name</th><th>Phone</th>
                        </thead>
                        <?php
                                $no=1;
                                foreach($Shippers as $ship){
                                        echo "<tr><td align=center>$no.</td><td>$ship->CompanyName</td><td>$ship->Phone</td></tr>";
                                        $no++;
                                }
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
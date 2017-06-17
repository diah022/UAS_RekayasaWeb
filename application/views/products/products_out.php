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
                        <h1>ALL PRODUCTS<hr /></h1>
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <th>No.</th><th>Product Name</th><th>Category Product</th><th>Quantity Unit</th><th>Unit Price</th><th>Product Detail</th>
                        </thead>
                                <?php
                                        $no=1;
                                        foreach($Products as $barang){
                                                echo "<tr><td align=center>$no.</td><td>$barang->NABAR</td><td><a href=".base_url('products/category_detail')."/$barang->KATID>$barang->KATEGORI</a></td><td>$barang->QPU</td><td>$barang->REGO</td><td><a href=".base_url('products/detail_product')."/$barang->IDPro>Detail</a></td></tr>";
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
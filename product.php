<!-- Based on Tugas 1 Pemrograman Web -->
<!-- Raihan Sultan Pasha Basuki | 2210130006
Computer Science 2022
Tugas 2 Pemrograman Web -->
<?php
include 'header.php';
$SWPrc = 27.50;
$SplunkPrc = 173;
$SOPrc = 36;
$TenablePrc = 3590;
$NetScoutPrc = 20450;

$SWQty = 3;
$SplunkQty = 4;
$TenableQty = 6;
$NetScoutQty = 7;
$SOQty = 8;

$Total = (($SWPrc*$SWQty)+($SplunkPrc*$SplunkQty)+($SOPrc*$SOQty)+($TenablePrc*$TenableQty)+($NetScoutPrc*$NetScoutQty));

?>
<div class="container-fluid" style="margin-top:30px; margin-bottom: 30px; align-content:center; text-align:center;">
<style>
        table, tr, td, th{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
        </style>
<h3>Our Product</h3>
<h5>These are Security Platforms we provide:</h5>
<table style="margin-left: auto; margin-right:auto;">
    <tr>
        <th style="text-align: left;">No</th>
        <th style="text-align: left;">Product Name</th>
        <th style="text-align: left;">Type of Platform</th>
        <th style="text-align: center;">Price (Month/Year)</th>
        <th style="text-align: center;">Stock</th>
        <th style="text-align: center;">Sub Total</th>
    </tr>
        <?php
        $Product = array(
            array("No"=>'1', "Product"=>'SolarWind', "Type"=>'IT Monitoring and Observability Platform',"Harga"=>"$".number_format($SWPrc),"Jumlah"=>$SWQty,"Subtotal"=>"$".number_format($SWPrc*$SWQty)),
            
            array("No"=>'2', "Product"=>'Splunk', "Type"=>'SIEM (Security Information and Event Management) Platform',"Harga"=>"$".number_format($SplunkPrc),"Jumlah"=>$SplunkQty,"Subtotal"=>"$".number_format($SplunkPrc*$SplunkQty)),
            
            array("No"=>'3', "Product"=>'NetScout', "Type"=>'Network Performance Monitoring and Security Platform',"Harga"=>"$".number_format($NetScoutPrc),"Jumlah"=>$NetScoutQty,"Subtotal"=>"$".number_format($NetScoutPrc*$NetScoutQty)),
            
            array("No"=>'4', "Product"=>'SentinelOne', "Type"=>'Endpoint Security Platform',"Harga"=>"$".number_format($SOPrc),"Jumlah"=>$SOQty,"Subtotal"=>"$".number_format($SOPrc*$SOQty)),
            
            array("No"=>'5', "Product"=>'Tenable', "Type"=>'Vulnerability Management Platform',"Harga"=>"$".number_format($TenablePrc),"Jumlah"=>$TenableQty,"Subtotal"=>"$".number_format($TenablePrc*$TenableQty)),
            
        );
        foreach ($Product as $subArray) {
            ?>
        <tr style="text-align: center;">
            <td><?php echo $subArray['No']; ?>    </td>
            <td><?php echo $subArray['Product']; ?>    </td>
            <td><?php echo $subArray['Type']; ?>    </td>
            <td><?php echo $subArray['Harga']; ?>    </td>
            <td><?php echo $subArray['Jumlah']; ?>    </td>
            <td><?php echo $subArray['Subtotal']; ?>    </td>
        </tr>
        <?php }
        
        ?>
        <tr>
            <td style="text-align: right; font-weight: bold" colspan="5">
            Total
        </td>
        <td style="text-align: right;">$<?php echo number_format($Total); ?>
    </td>
        </tr>
</table>
        </div>

<?php

include 'footer.php';
?>
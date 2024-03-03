<!-- Raihan Sultan Pasha Basuki | 2210130006
Computer Science 2022
Tugas 2 Pemrograman Web -->
<?php
    include "header.php";
?>

<h2 style="margin-top: 40px; text-align:center;">Reports</h2>
<style>
    table, tr, td, th {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 15px;}
    </style>

<?php
    $Date1=date_create('01-03-2023');
    $Date2=date_create('01-03-2023');
    $Date3=date_create('08-03-2023');
    $Date4=date_create('09-03-2023');
    $Date5=date_create('09-03-2023');
    $Date6=date_create('16-03-2023');
    $Date7=date_create('16-03-2023');
    $Date8=date_create('15-03-2023');
    $Date9=date_create('16-02-2023');
    $Date10=date_create('24-03-2023');

    function Total($Array) {
        $Total=0;
        foreach ($Array as $Numb) {
            $Total += $Numb;
        }
        return $Total;
    }

    $PMSKArray = [1000000, 100000, 200000, 89000, 0, 165000, 330000, 100000, 100000, 24032023];
    $Pemasukkan=array_map(function($Numb){
        return number_format($Numb);
    },$PMSKArray);

    $PengeluaranArr = [0, 0, 0, 0, 21000, 0, 0, 0, 0, 0];
    $Pengeluaran=array_map(function($Numb){
        return number_format($Numb);
    }, $PengeluaranArr);

    $PemasukkanTotal = Total($PMSKArray);
    $PengeluaranTotal = Total($PengeluaranArr);
    $Saldo = $PemasukkanTotal - $PengeluaranTotal;
?>
<div class="container">
    <br>
    <table style="margin-left: auto; margin-right:auto;">
        <tr>
            <th colspan="4"></th>
            <th colspan="2" style="text-align:center;">JENIS</th>
        </tr>
        <tr><strong>
            <th>NO</th>
            <th>TANGGAL</th>
            <th>KATEGORI</th>
            <th>KETERANGAN</th>
            <th style="padding-right:20px;padding-left:20px;">PEMASUKAN</th>
            <th>PENGELUARAN</th>
</strong></tr>
        <?php
            $Report = array(
                array("Nomor" => 1, "Tgl" => $Date1, "Kategori" => "Pembayaran Pesanan", "keterangan" =>"","Pemasukkan" => "Rp. ".$Pemasukkan[0], "Pengeluaran" => "-"),
                
                array("Nomor" => 2, "Tgl" => $Date2, "Kategori" => "Pembayaran Pesanan", "keterangan" =>"gaada","Pemasukkan" => "Rp. ".$Pemasukkan[1], "Pengeluaran" => "-"),
                
                array("Nomor" => 3, "Tgl" => $Date3, "Kategori" => "Pembayaran Pesanan", "keterangan" =>"","Pemasukkan" => "Rp. ".$Pemasukkan[2], "Pengeluaran" => "-"),
                
                array("Nomor" => 4, "Tgl" => $Date4, "Kategori" => "Pembayaran Pesanan", "keterangan" =>"test Pemasukkan 090323","Pemasukkan" => "Rp. ".$Pemasukkan[3], "Pengeluaran" => "-"),
                
                array("Nomor" => 5, "Tgl" => $Date5, "Kategori" => "Pembayaran Pesanan", "keterangan" =>"test Pengeluaran 090323","Pemasukkan" => "-", "Pengeluaran" => "Rp. ".$Pengeluaran[4]),
                
                array("Nomor" => 6, "Tgl" => $Date6, "Kategori" => "Pembayaran Pesanan", "keterangan" =>"lunas yak","Pemasukkan" => "Rp. ".$Pemasukkan[5], "Pengeluaran" => "-"),
                
                array("Nomor" => 7, "Tgl" => $Date7, "Kategori" => "Pembayaran Pesanan", "keterangan" =>"lunas yak","Pemasukkan" => "Rp. ".$Pemasukkan[6], "Pengeluaran" => "-"),
                
                array("Nomor" => 8, "Tgl" => $Date8, "Kategori" => "Pinjaman Ulang", "keterangan" =>"tes","Pemasukkan" => "Rp. ".$Pemasukkan[7], "Pengeluaran" => "-"),
                
                array("Nomor" => 9, "Tgl" => $Date9, "Kategori" => "Belanja Modal", "keterangan" =>"tes card tahun","Pemasukkan" => "Rp. ".$Pemasukkan[8], "Pengeluaran" => "-"),
                
                array("Nomor" => 10, "Tgl" => $Date10, "Kategori" => "Pembayaran Pesanan", "keterangan" =>"","Pemasukkan" => "Rp. ".$Pemasukkan[9], "Pengeluaran" => "-"),
            );
            foreach($Report as $subArray)
            {
        ?>
        <tr>
            <td><?php echo $subArray['Nomor']; ?>.</td>
            <td><?php echo $subArray['Tgl']->format('d-m-Y'); ?></td>
            <td><?php echo $subArray['Kategori']; ?></td>
            <td style="text-align: left;"><?php echo $subArray['keterangan']; ?></td>
            <td style='text-align: left;'><?php echo $subArray['Pemasukkan']; ?></td>
            <td style="text-align: left;"><?php echo $subArray['Pengeluaran']; ?></td>
        </tr>
        <?php
            }
        ?>
        <tr>
            <td style="border-right: none;" colspan="3"></td>
            <th style="text-align: right; border-right:none; border-left: none;">TOTAL</th>
            <td style="text-align: center;">Rp.  <?php echo number_format($PemasukkanTotal) ?>,-</td>
            <td style="text-align: center;">Rp.  <?php echo number_format($PengeluaranTotal) ?>,-</td>
        </tr>
        <tr>
            <td style="border-right: none;" colspan="3"></td>
            <th style="text-align: right; border-right:none; border-left: none;">SALDO</th>
            <td style="text-align: center;" colspan="2">Rp.  <?php echo number_format($Saldo) ?>,-</td>
        </tr>
    </table>
</div>  

<?php
    include "footer.php";
?>
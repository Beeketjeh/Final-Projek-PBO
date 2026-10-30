<?php

require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

//object
$produk = new Produk('P0001','Laptop',15000000,15);

// hasil
echo "Produk: ". $produk->nama;
echo "<br/>";

echo "Harga: ". $produk->harga;
echo "<br/>";

echo "Stok: ". $produk->stok;
echo "<br/>";

echo "Pajak: ". $produk->pajak() . "%";
echo "<br/>";

echo "Total Pembayaran Akhir:  Rp.". $produk->total(); 
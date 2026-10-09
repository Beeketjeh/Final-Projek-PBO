<?php

class Produk{
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    public const PAJAK = 0.11;

}

//object
$produk = new Produk();
$produk->kode = 'P0001';
$produk->nama = 'Laptop';
$produk->harga = 15000000;
$produk->stok = 15;

//hitung pajak
$pajak = Produk::PAJAK * 100; //11
$JumlahPajak = $produk->harga * Produk::PAJAK;

$total = $produk->harga + $JumlahPajak;

echo "Produk: ". $produk->nama;
echo "<br/>";

echo "Harga: ". $produk->harga;
echo "<br/>";

echo "Stok: ". $produk->stok;
echo "<br/>";

echo "Pajak: ". $pajak . "&";
echo "<br/>";

echo "Total Pembayaran Akhir:  Rp.". $total;
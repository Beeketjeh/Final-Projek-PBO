<?php

class Produk{
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    public const PAJAK = 0.11;

    public function pajak() {
        return self::PAJAK * 100; //11
    }

    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }
}

//object
$produk = new Produk();
$produk->kode = 'P0001';
$produk->nama = 'Laptop';
$produk->harga = 15000000;
$produk->stok = 15;

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
<?php
class ModelHarga extends CI_Model
{
    public $merek, $biaya_harga;

    public function getBiaya($merek = null)
    {
        $this->merek = $merek;
        if ($this->merek == "Nike") {
            $this->biaya_harga = 375000;
        } elseif ($this->merek == "Adidas") {
            $this->biaya_harga = 300000;
        } elseif ($this->merek == "Kickers") {
            $this->biaya_harga = 250000;
        } elseif ($this->merek == "Eiger") {
            $this->biaya_harga = 275000;
        } elseif ($this->merek == "Bucherri") {
            $this->biaya_harga = 400000;
        }

        return $this->biaya_harga;
    }
}
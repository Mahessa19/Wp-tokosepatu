<?php
class Tokosepatu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('tampilan/view-toko/view_input');
    }

    public function proses()
    {
        $this->load->model(['ModelHarga']);

        $data = [
            'nama' => $this->input->post('nama'),
            'nohp' => $this->input->post('nohp'),
            'ukuran' => $this->input->post('ukuran'),
            'merek' => $this->input->post('merek'),
            'biaya_harga' => $this->ModelHarga->getBiaya($this->input->post('merek'))
        ];

        $this->load->view('tampilan/view-toko/view_output', $data);
    }
}

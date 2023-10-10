<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_code extends CI_Model
{
    function create_no_peserta()
    {
        $this->db->select('RIGHT(tbl_pendaftaran.no_peserta,5) as kode', FALSE);
        $this->db->order_by('no_peserta', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tbl_pendaftaran');   
        if ($query->num_rows() <> 0) {

            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }
        $kodemax = str_pad($kode, 5, "0", STR_PAD_LEFT);
        $kodejadi = rand(1,100) . $kodemax;
        return $kodejadi;
    }

   
}
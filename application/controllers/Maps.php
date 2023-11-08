<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Maps extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Models', 'm');
        cekuser();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $table = 'user';
        $where = array(
            'id_user'      =>   $this->session->userdata('id_user')
        );

        $data['user'] = $this->m->Get_Where($where, $table);
        $data['title'] = 'Reminder | Maps';

        $select = $this->db->select('*');
        $select = $this->db->join('kelurahan', 'pasien.id_kelurahan = kelurahan.id_kelurahan');
        $data['pasien'] = $this->m->Get_All('pasien', $select);

        $dataPasien = [
            'kgb' => [
                'jml' => 0,
                'color' => ''
            ],
            'kgt' => [
                'jml' => 0,
                'color' => ''
            ],
            'pd' => [
                'jml' => 0,
                'color' => ''
            ]
        ];

        foreach ($data['pasien'] as $pasien) {
            if ($pasien->id_kelurahan == 1) {
                $dataPasien['kgb']['jml'] += 1;
            } elseif ($pasien->id_kelurahan == 2) {
                $dataPasien['kgt']['jml'] += 1;
            } else {
                $dataPasien['pd']['jml'] += 1;
            }
        }

        $maxJumlah = max($dataPasien['kgb']['jml'], $dataPasien['kgt']['jml'], $dataPasien['pd']['jml']);

        foreach ($dataPasien as $key => $val) {
            if ($dataPasien[$key]['jml'] == $maxJumlah) {
                $dataPasien[$key]['color'] = 'red';
            } elseif ($dataPasien[$key]['jml'] == $maxJumlah - 1) {
                $dataPasien[$key]['color'] = 'purple';
            } elseif ($dataPasien[$key]['jml'] == $maxJumlah - 2) {
                $dataPasien[$key]['color'] = 'blue';
            } else {
                $dataPasien[$key]['color'] = 'green';
            }
        }

        $data['pasien'] = $dataPasien;

        $this->load->view('templates/head', $data);
        $this->load->view('templates/navigation', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pages/maps/maps', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/script', $data);
    }

}
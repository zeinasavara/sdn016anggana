<?php

class Fungsi
{
    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    function user_login()
    {
        $this->ci->load->model('user_m');
        $id_user = $this->ci->session->userdata('id_user');
        $user = $this->ci->user_m->get('id_user', $id_user)->row();
        return $user;
    }

    function setting()
    {
        $this->ci->load->model('setting_m');
        $setting = $this->ci->setting_m->get('id_setting', 1)->row();
        return $setting;
    }

    function inbox()
    {
        $this->ci->load->model('inbox_m');
        $inbox = $this->ci->inbox_m->get('status', 1)->result();
        return $inbox;
    }

    function visitors()
    {
        $ip    = $this->ci->input->ip_address(); // Mendapatkan IP user
        $date  = date("Y-m-d"); // Mendapatkan tanggal sekarang
        $waktu = time(); //
        $timeinsert = date("Y-m-d H:i:s");

        // Cek berdasarkan IP, apakah user sudah pernah mengakses hari ini
        $s = $this->ci->db->query("SELECT * FROM tb_pengunjung WHERE ip='" . $ip . "' AND date='" . $date . "'")->num_rows();
        $ss = isset($s) ? ($s) : 0;


        // Kalau belum ada, simpan data user tersebut ke database
        if ($ss == 0) {
            $this->ci->db->query("INSERT INTO tb_pengunjung(ip, date, hits, online, time) VALUES('" . $ip . "','" . $date . "','1','" . $waktu . "','" . $timeinsert . "')");
        }

        // Jika sudah ada, update
        else {
            $this->ci->db->query("UPDATE tb_pengunjung SET hits=hits+1, online='" . $waktu . "' WHERE ip='" . $ip . "' AND date='" . $date . "'");
        }


        $visitors['pengunjunghariini']  = $this->ci->db->query("SELECT * FROM tb_pengunjung WHERE date='" . $date . "' GROUP BY ip")->num_rows(); // Hitung jumlah pengunjung

        $dbpengunjung = $this->ci->db->query("SELECT COUNT(hits) as hits FROM tb_pengunjung")->row();

        $visitors['totalpengunjung'] = isset($dbpengunjung->hits) ? ($dbpengunjung->hits) : 0; // hitung total pengunjung

        $bataswaktu = time() - 300;

        $visitors['pengunjungonline']  = $this->ci->db->query("SELECT * FROM tb_pengunjung WHERE online > '" . $bataswaktu . "'")->num_rows(); // hitung pengunjung online

        return $visitors;
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        sudah_login();

        $this->load->library('form_validation');
        // Rules
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        // Messages
        $this->form_validation->set_message('required', 'Kolom {field} tidak boleh kosong!');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/login');
        } else {
            $this->process();
        }
    }

    function process()
    {
        $this->load->model('user_m');
        $post = $this->input->post(null, TRUE);
        $user = $this->user_m->get('username', $post['username'])->row();

        if ($user != NULL) {
            if (md5($post['password']) == $user->password) {
                $data = [
                    'id_user' => $user->id_user,
                    'role' => $user->role
                ];
                $this->session->set_userdata($data);
                // Jika tidak melalui Login
                if (!isset($post['login'])) {
                    $this->session->set_flashdata('fail', 'Anda belum login dengan benar!');
                    redirect('auth');
                } else {
                    $this->session->set_flashdata('success', 'Login berhasil, Selamat datang Administrator.');
                    redirect('dashboard');
                }
            } else {
                $this->session->set_flashdata('fail', 'Username / password salah!');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('fail', 'Username / password salah!');
            redirect('auth');
        }
    }

    public function logout()
    {
        $params = ['id_user', 'level'];
        $this->session->unset_userdata($params);
        $this->session->set_flashdata('success', 'Berhasil keluar dari aplikasi.');
        redirect('auth');
    }
}

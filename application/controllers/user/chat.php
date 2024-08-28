<?php

class chat extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['logged_in'])) {
            $url = base_url('user/chat');
            redirect($url);
        };

        // Load model dan library yang dibutuhkan
        $this->load->model('chat_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        // Mengambil data chat dari database
        $data['chats'] = $this->chat_model->get_all_chats();

        // Menampilkan halaman chat dengan data chat
        $this->load->view('user/chat_view', $data);
    }

    public function send_message()
    {
        // Validasi inputan
        $this->form_validation->set_rules('sender', 'Sender', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, kembali ke halaman chat dengan pesan error
            $data['error'] = 'Harap isi semua field.';
            $data['chats'] = $this->chat_model->get_all_chats(); // Mendapatkan chat
            $this->load->view('user/chat_view', $data);
        } else {
            // Jika validasi sukses, simpan pesan ke database
            $sender = $this->input->post('sender');
            $message = $this->input->post('message');

            $this->chat_model->save_message($sender, $message);

            // Alihkan ke halaman chat dengan memperbarui daftar chat
            redirect('user/chat_view');
        }
    }
}

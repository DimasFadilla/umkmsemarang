<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chat_model extends CI_Model
{

    public function get_all_chats()
    {
        // Ambil semua chat dari tabel "chats"
        $query = $this->db->get('chats');
        return $query->result();
    }

    public function save_message($sender, $message)
    {
        // Simpan pesan ke tabel "chats"
        $data = array(
            'sender' => $sender,
            'message' => $message
        );

        $this->db->insert('chats', $data);
    }
}

<?php

class Entry_Model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    function tambah()
    {
        $data = array(
            'judul' => $_POST['judul'],
            'isi' => $_POST['isi'],
            'waktu' => date('Y-m-d h:i:s')
        );
        $this->db->insert('entries', $data);
    }
    function get_all()
    {
        $query = $this->db->get('entries');
        return $query->result();
    }
    function get_entry($id)
    {
        $query = $this->db->get_where('entries', array('id' => $id));
        return $query->row();
    }
}
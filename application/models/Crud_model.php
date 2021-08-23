<?php
class Crud_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    // Wyświetlanie rekordów
    function m_select() {

        $this->db->select('indeks, imie, nazwisko, klub, numerNaKoszulce, narodowosc');
        $this->db->from('pilkarz');
        $this->db->order_by('klub');
        $query = $this->db->get();

        // Jeśli pobrano przynajmniej jeden rekord.
        if ($query->num_rows() > 0)
            $crud = $query->result_array();

        return $crud;
    }

    // Pobieramy jeden rekord.
    function m_select_by_id($id) {
        $this->db->where('indeks', $id);
        $query = $this->db->get('pilkarz');
        $row = $query->row();
        return $row;
    }

    // Wstawiamy jeden rekord.
    function m_insert() {
        $this->load->helper('url');
        $data = array(
            'imie' => $this->input->post('imie'),
            'nazwisko' => $this->input->post('nazwisko'),
            'klub' => $this->input->post('klub'),
            'numerNaKoszulce' => $this->input->post('numerNaKoszulce'),
            'narodowosc' => $this->input->post('narodowosc')
        );
        return $this->db->insert('pilkarz', $data);
    }

    // Modyfikujemy jeden rekord.
    function m_update() {
        $data = array(
            'indeks' => $this->input->post('indeks'),
            'imie' => $this->input->post('imie'),
            'nazwisko' => $this->input->post('nazwisko'),
            'klub' => $this->input->post('klub'),
            'numerNaKoszulce' => $this->input->post('numerNaKoszulce'),
            'narodowosc' => $this->input->post('narodowosc'),
        );
        $this->db->where('indeks', $data['indeks']);
        return $this->db->update('pilkarz', $data);
    }

    // Kasujemy jeden rekord.
    function m_delete($id) {
        $this->db->where('indeks', $id);
        return $this->db->delete('pilkarz');
    }

}


<?php
class Crud_controller extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Crud_model');
    }

    // Wyświetlanie danych z tabeli.
    function c_select() {
        $view_data['crud_list'] = $this->Crud_model->m_select();
        $this->load->view('Crud_view_header');
        $this->load->view('Crud_view_select', $view_data);
        $this->load->view('Crud_view_footer');
    }

    // Wyświetlanie rekordu o wskazanym ID.
    function c_select_by_id($id) {
        $view_data['crud_list'] = $this->Crud_model->m_select_by_id($id);
        $this->load->view('Crud_view_select_by_id', $view_data);
    }

    // Dodawanie nowego rekordu.
    function c_insert() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('imie', 'imie', 'required');
        $this->form_validation->set_rules('nazwisko', 'nazwisko', 'required');
        $this->form_validation->set_rules('klub', 'klub', 'required');
        $this->form_validation->set_rules('numerNaKoszulce', 'numerNaKoszulce', 'required');
        $this->form_validation->set_rules('narodowosc', 'narodowosc', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('Crud_view_header');
            $this->load->view('Crud_view_insert');
            $this->load->view('Crud_view_footer');
        }
        else {
            $this->Crud_model->m_insert();
            $this->c_select();
        }
    }

    // Formularz do edycji rekordów.
    function c_update_form($id) {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('imie', 'imie', 'required');
        $view_data['crud_list'] = $this->Crud_model->m_select_by_id($id);
        $this->load->view('Crud_view_header');
        $this->load->view('Crud_view_update', $view_data);
        $this->load->view('Crud_view_footer');
    }

    // Edycja rekordu. Dane przekazane z widoku 'Crud_view_update'.
    function c_update() {
        $this->Crud_model->m_update();
        $this->c_select();
    }

    // Kasowanie rekordu o wskazanym ID.
    function c_delete($id) {
        $this->Crud_model->m_delete($id);
        if ($this->db->affected_rows() == 1) {
            $this->load->view('Crud_view_header');
            $this->load->view('Crud_view_success');
            $this->load->view('Crud_view_link');
            $this->load->view('Crud_view_footer');
        } else {
            $this->load->view('Crud_view_header');
            $this->load->view('Crud_view_failure');
            $this->load->view('Crud_view_link');
            $this->load->view('Crud_view_footer');
        }
    }
}




<?php

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(["Books/Report_Model" => 'report_m']);

    }

    public function index()
    {
        $this->load->view('admin/index');
    }


    public function reportTable()
    {
        header('Content-Type: application/json');
        $borrowed_dataTables = $this->input->post(NULL, TRUE);

        if(!empty($borrowed_dataTables))
        {
            $draw = $borrowed_dataTables['draw'];
            $offset = (empty($borrowed_dataTables['start'])) ? 0 : $borrowed_dataTables['start'];
            $limit = (empty($borrowed_dataTables['length'])) ? 10 : $borrowed_dataTables['length'];
            $filter_value = (empty($borrowed_dataTables['search']['value'])) ? "" : trim($borrowed_dataTables['search']['value']);
            $sort_col_num = (int)(!isset($borrowed_dataTables['order']) && empty($borrowed_dataTables['order'][0]['column'])) ? 0 : $borrowed_dataTables['order'][0]['column'];
            $sort_col	= '';
            $sort_dir = (!isset($borrowed_dataTables['order']) && empty($borrowed_dataTables['order'][0]['dir'])) ? 'ASC' : $borrowed_dataTables['order'][0]['dir'];
            $columns = array();

            foreach($borrowed_dataTables['columns'] as $key => $val)
            {
                switch ($val['data']) {
                    case 'id':
                    case 'title':
                    case 'fullname':
                    case 'address':
                    case 'contact':
                    case 'date_borrowed':
                    case 'due_date':
                    $columns[$key] = 'bb.'.$val['data'];
                    break;
                    default:
                    $columns[$key] = $val['data'];
                    break;
            }
        }

            $sort_col = $columns[$sort_col_num];

            
            $borrowedBooks = $this->report_m->getBorrowedBooksDatatable( $limit, $offset, $sort_col, $sort_dir, $filter_value);

            $result = array(
                "data" => $borrowedBooks,
                "recordsTotal" => $this->report_m->datatable_count_all('bb.borrowedBooks', 'ASC', ""),
                "recordsFiltered" => $this->report_m->datatable_count_filtered($sort_col, $sort_dir, $filter_value),
                "draw" => (integer) $borrowed_dataTables['draw'],
                // 'form_token_name' => $new_form_token_name,
                // 'form_token_hash' => $new_form_token_val,
                'sorted_col' => $sort_col,
                'columns' => $columns
            );

            echo json_encode($result);
        }
        else
        {
            $result = array(
            "data" => array(),
            "recordsTotal" => 0,
            "recordsFiltered" => 0,
            "draw" => (integer) $this->input->post('draw')
            );

            echo json_encode($result);
        }
    }
}
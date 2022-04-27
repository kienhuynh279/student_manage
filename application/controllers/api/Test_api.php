<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test_api extends CI_Controller
{

    function index()
    {
        $data['template'] = 'admin/student/index';
        $this->load->view('admin/home', $data);
    }

    public function fetch_all()
    {
        $api_url = "http://localhost/StudentManage/api/api";

        $client = curl_init($api_url);

        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($client);

        curl_close($client);

        $result = json_decode($response);

        $output = '';

        if (count($result) > 0) {
            foreach ($result as $row) {
                $output .= '
                    <tr>
                        <td>' . $row->name . '</td>
                        <td>' . $row->major . '</td>
                        <td>' . $row->course . '</td>
                        <td>' . $row->phone . '</td>
                        <td><butto type="button" name="edit" class="btn btn-warning btn-xs edit" id="' . $row->id . '">Edit</button></td>
                        <td><button type="button" name="delete" class="btn btn-danger btn-xs delete" id="' . $row->id . '">Delete</button></td>
                    </tr>';
            }
        } else {
            $output .= '
                <tr>
                <td colspan="6" align="center">No Data Found</td>
                </tr>';
        }

        echo $output;
    }

    function action()
    {
        if ($this->input->post('data_action')) {
            $data_action = $this->input->post('data_action');


            if ($data_action == "Insert") {
                $api_url = "http://localhost/StudentManage/api/api/insert";


                $form_data = array(
                    'name' => $this->input->post('name'),
                    'major' => $this->input->post('major'),
                    'course' => $this->input->post('course'),
                    'phone' => $this->input->post('phone'),
                );

                $client = curl_init($api_url);

                curl_setopt($client, CURLOPT_POST, true);

                curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

                curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

                $response = curl_exec($client);

                curl_close($client);

                echo $response;
            }

            if ($data_action == "fetch_all") {
            }
        }
    }
}
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
                        <td><a type="button" name="edit" class="button-edit btn" href="">Edit</a></td>
                        <td><button type="button" name="delete" class="button-edit btn" id="' . $row->id . '">Delete</button></td>
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

    public function create()
    {
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



        // echo $response;
    }

    public function fetch_single()
    {
        $api_url = "http://localhost/StudentManage/api/api/fetch_single";

        $form_data = array(
            'id' => $this->input->post('ids-')
        );

        $client = curl_init($api_url);

        curl_setopt($client, CURLOPT_POST, true);

        curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($client);

        curl_close($client);

        // $data['template'] = 'admin/student/edit';
        // $this->load->view('admin/home', $data);

        echo $response;

        print_r($form_data);
    }

    public function update()
    {
        $api_url = "http://localhost/StudentManage/api/api/update";


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

        // echo $response;
    }
}
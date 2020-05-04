<?php

function TemplateData($uri_content,$data='') {
    $ci =& get_instance();
    $ci->load->view('header');
    $ci->load->view($uri_content,$data);
}
?>
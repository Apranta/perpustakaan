<?php

    $this->load->view('page/component/header');
    $this->load->view('page/component/jumbotron');
    $this->load->view('page/component/search');
    $this->load->view($content);
    $this->load->view('page/component/footer');
?>
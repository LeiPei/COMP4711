<?php
/**
 * Created by PhpStorm.
 * User: PeiLei
 * Date: 11/01/2017
 * Time: 1:18 PM
 */

class Student {

    function __construct()
    {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    function add_grade($grade) {
        $this->grades[] = $grade;
    }
}
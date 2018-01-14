<?php
/**
 * Created by PhpStorm.
 * User: Robbie
 * Date: 14-Jan-2018
 * Time: 3:28 PM
 */

class Student
{
    function __construct()
    {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }

    function add_grade($grade) {
        $this->grades[] = $grade;
    }
}
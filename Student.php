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

    //Add an email, with an index
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }

    //Add a grade
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    //Calculate student average
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }

    //Text representation of student
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
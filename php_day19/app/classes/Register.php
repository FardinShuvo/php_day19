<?php


namespace App\classes;


class Register
{

    protected $name;
    protected $email;
    protected $mobile;
    protected $result;

    public function __construct($post=null)
    {
        if (isset($post['full_name']))
        {
            $this->name =$post['full_name'];
            $this->mobile=$post['mobile'];
            $this->email=$post['email'];
        }

    }
    public function add()
    {
        //session_start();
        $_SESSION['name']=$this->name;
        $_SESSION['mobile']=$this->mobile;
        $_SESSION['email']=$this->email;

        return 'Data store successfully';

    }
    public function allData()
    {
        $this->result=[
            'name' => $_SESSION['name'],
            'mobile'=>$_SESSION['mobile'],
            'email'=>$_SESSION['email']
        ];
    }
}
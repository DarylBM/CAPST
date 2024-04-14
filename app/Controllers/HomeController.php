<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
  
class HomeController extends Controller
{
    public function index()
    {   

        echo view('user/usertest');
    
    }
    public function ecom()
    {   

        echo view('user/ecom');
    
    }
    public function cars()
    {   

        echo view('user/cars');
    
    }
    public function rent()
    {   

        echo view('user/renting');
    
    }
    public function start()
    {   

        echo view('layout/getstarted');
    
    }



}
<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class DashboardController extends Controller
{
 public function index()
 {
 return view('Bienvenido al dashboard'); // O solo texto: return 'Bienvenido al panel de Admin.';
 }
}
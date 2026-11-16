<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $users = [
            ['id' => 1, 'name' => 'Ashton Chy', 'email' => 'ashton.chy@example.com', 'role' => 'Administrator', 'status' => 'Active'],
            ['id' => 2, 'name' => 'Rainier Espino', 'email' => 'rainier.espino@example.com', 'role' => 'Cashier', 'status' => 'Active'],
            ['id' => 3, 'name' => 'Jared Mangaoang', 'email' => 'jared.mangaoang@example.com', 'role' => 'Cashier', 'status' => 'Active'],
            ['id' => 4, 'name' => 'Rashid Adlus', 'email' => 'rashid.adlus@example.com', 'role' => 'Manager', 'status' => 'Active'],
            ['id' => 5, 'name' => 'Chloe Navarro', 'email' => 'chloe.navarro@example.com', 'role' => 'Inventory Clerk', 'status' => 'Inactive'],
        ];

        return view('users.index', compact('users'));
    }
}

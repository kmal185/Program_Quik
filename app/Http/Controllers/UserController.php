<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    //
    public function exportAllUsers()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}

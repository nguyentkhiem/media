<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Manager;

class ManagerController extends Controller
{
    public function getManager()
    {
        $data['manager'] = Manager::all();
        return view('backend.listAdmin', $data);
    }

    public function getEditAdmin($id)
    {
        $data['update'] = Manager::find($id);
        return view('backend.updateAdmin', $data);
    }
    public function postEditAdmin(Request $request, $id)
    {
        $manager = Manager::find($id);
        $manager->user_name = $request->name;
        $manager->email = $request->mail;
        $manager->password = bcrypt($request->pass);
        $manager->save();
        return redirect()->intended('admin/manager');
    }
}

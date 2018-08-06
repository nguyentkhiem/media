<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AddUsersRequest;
use App\Http\Requests\EditUsersRequest;
use App\Http\Controllers\Controller;
use App\Models\Client;
use DB;

class UserController extends Controller
{
    public function getUser()
    {
        $data['users'] = DB::table('user_client')->orderBy('client_id', 'DESC')->paginate(2);
        return view('backend.listClient', $data);
    }

    public function getAddUser()
    {
        return view('backend.addClient');
    }

    public function postAddUser(AddUsersRequest $request)
    {
        $filename = $request->img->getClientOriginalName();
        $client = new Client;
        $client->client_name = $request->name;
        $client->email = $request->email;
        $client->password = bcrypt($request->password);
        $client->client_img = $filename;
        $client->client_level = $request->level;
        $client->save();
        $request->img->move('local/storage/app/avatar', $filename);
        return redirect()->intended('admin/user');
    }

    public function getEditUser($id)
    {
        $data['list'] = Client::find($id);
        return view('backend.editClient', $data);
    }

    public function postEditUser(EditUsersRequest $request, $id)
    {
        $client = new Client;
        $arr['client_name'] = $request->name;
        $arr['email'] = $request->email;
        $arr['password'] = bcrypt($request->password);
        if ($request->hasFile('img')) {
            $img = $request->img->getClientOriginalName();
            $arr['client_img'] = $img;
            $request->img->move('local/storage/app/avatar', $img);
        }
        $arr['client_level'] = $request->level;

        $client::where('client_id', $id)->update($arr);
            return redirect()->intended('admin/user');
    }

    public function getDeleteUser($id)
    {
        Client::destroy($id);
        return back();
    }
}

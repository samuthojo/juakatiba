<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Content;
use App\Midahalo;
use App\Habari;
use App\Machapisho;
use App\Katiba77;
use App\Katiba;
use App\History;

class Cms extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except(['index', 'login', ]);
    }

    public function index() {
      return view('cms.login');
    }

    public function adminstart() {
      $katiba = Katiba77::orderBy('id', 'desc')->get();
      return view('cms.main')->with('katiba', $katiba);
    }

    public function logout(Request $request) {
      Auth::logout();
      $request->session()->invalidate();
      return redirect()->route('login');
    }

    public function login(Request $request) {
      $credentials = $request->only('username', 'password');
      if(Auth::attempt($credentials)) {
        $request->session()->regenerate();
        $feedback = ['success' => 'success', ];
      } else {
        $feedback = ['success' => 'failure', ];
      }
      return response()->json($feedback);
    }

    public function yaliyomo_details($id) {
      $yaliyomo = Content::find($id);
      return view('cms.yaliyomo_details')->with('yaliyomo', $yaliyomo);
    }

    public function midahalo_details($id) {
      $midahalo = Midahalo::find($id);
      return view('cms.midahalo_details')->with('midahalo', $midahalo);
    }

    public function news_details($id) {
      $news =  Habari::find($id);
      return view('cms.news_details')->with('news', $news);
    }

    public function cms_history() {
      $history = History::orderBy('id', 'asc')->get();
      return view('cms.history')->with('history', $history);
    }

    public function yaliyomo() {
      $yaliyomo = Content::orderBy('id', 'desc')->get();
      return view('cms.yaliyomo')->with('yaliyomo', $yaliyomo);
    }

    public function midahalo() {
      $midahalo = Midahalo::orderBy('id', 'desc')->get();
      return view('cms.midahalo')->with('midahalo', $midahalo);
    }

    public function habari() {
      $news = Habari::orderBy('id', 'desc')->get();
      return view('cms.news')->with('news', $news);
    }

    public function api_machapisho() {
      $machapisho = Machapisho::orderBy('id', 'desc')->get();
      return view('cms.machapisho')->with('machapisho', $machapisho);
    }

    public function soma_ibara($id) {
      $ibara = Katiba77::find($id);
      return view('cms.ibara_details')->with('ibara', $ibara);
    }

    public function katiba77() {
      $katiba = Katiba77::orderBy('id', 'desc')->get();
      return view('cms.katiba77')->with('katiba', $katiba);
    }

    public function form_delete($form_name, $id) {
      if($form_name == "katiba77") {
          Katiba77::find($id)->delete(); //Softly deleted
          return $this->katiba77();
      } else if($form_name == "machapisho") {
          Machapisho::find($id)->delete(); //Softly deleted
          return $this->api_machapisho();
      } else if($form_name == "news") {
          Habari::find($id)->delete(); //Softly deleted
          return $this->habari();
      } else if($form_name == "midahalo") {
          Midahalo::find($id)->delete(); //Softly deleted
          return $this->midahalo();
      } else if($form_name == "yaliyomo") {
          Content::find($id)->delete(); //Softly deleted
          return $this->yaliyomo();
      } else if($form_name == "history") {
          History::find($id)->delete(); //Softly deleted
          return $this->cms_history();
      }
    }

    //render edit-modes
    public function form_edit($form_name, $id) {
      if($form_name == "katiba77") {
          $katiba = Katiba77::find($id);
          return view('cms.katiba77_edit')->with('katiba', $katiba);
      } else if($form_name == "machapisho") {
          $machapisho = Machapisho::find($id);
          return view('cms.machapisho_edit')
                                  ->with('machapisho', $machapisho);
      } else if($form_name == "news") {
          $news =  Habari::find($id);
          return view('cms.news_edit')->with('news', $news);
      } else if($form_name == "midahalo") {
          $midahalo = Midahalo::find($id);
          return view('cms.midahalo_edit')->with('midahalo', $midahalo);
      } else if($form_name == "yaliyomo") {
          $yaliyomo = Content::find($id);
          return view('cms.yaliyomo_edit')->with('yaliyomo', $yaliyomo);
      } else if($form_name == "history") {
          $history = History::find($id);
          return view('cms.history_edit')->with('history', $history);
      }
    }

    public function save_form_changes(Request $request, $form_name) {
      $id = $request->input('edit_id');
      if($form_name == "katiba77") {
          $params = $request->only('type', 'katiba',
                                    'ibara', 'description');
          Katiba77::where('id', $id)->update($params);
          return $this->katiba77();
      } else if($form_name == "machapisho") {
          $params = $request->only('title', 'author',
                                    'type', 'date');
          Machapisho::where('id', $id)->update($params);
          return $this->api_machapisho();
      } else if($form_name == "news") {
          $params = $request->only('title', 'link',
                                    'type', 'description');
          Habari::where('id', $id)->update($params);
          return $this->habari();
      } else if($form_name == "midahalo") {
          $params = $request->only('type', 'date', 'description');
          Midahalo::where('id', $id)->update($params);
          return $this->midahalo();
      } else if($form_name == "yaliyomo") {
          $params = $request->only('type', 'context',
                                    'katiba', 'description');
          Content::where('id', $id)->update($params);
          return $this->yaliyomo();
      } else if($form_name == "history") {
          $params = $request->only('title', 'date', 'description');
          History::where('id', $id)->update($params);
          return $this->cms_history();
      }
    }

    public function save_data(Request $request, $form_name) {
      if($form_name == "katiba77") {
          $params = $request->only('type', 'katiba',
                                    'ibara', 'description');
          Katiba77::create($params);
          return $this->katiba77();
      } else if($form_name == "machapisho") {
          $file_name = "";
          if($request->hasFile('file')) {
            $file = $request->file('file');//get UploadedFile instance
            if($file->isValid()) {
              //there was no error during upload
              $path = $file->path();
              $file_name = $file->getClientOriginalName();
              $destination = 'uploads/' . $file_name;
              move_uploaded_file($path, $destination);
            }
          }
          $params = $request->only('title', 'author',
                                    'type', 'date');
          $params = array_add($params, 'pdf', $file_name);
          Machapisho::create($params);
          return $this->api_machapisho();
      } else if($form_name == "news") {
          $file_name = "";
          if($request->hasFile('file')) {
            $file = $request->file('file');//get UploadedFile instance
            if($file->isValid()) {
              //there was no error during upload
              $path = $file->path();
              $file_name = $file->getClientOriginalName();
              $destination = 'uploads/' . $file_name;
              move_uploaded_file($path, $destination);
            }
          }
          $params = $request->only('title', 'link',
                                    'type', 'description');
          $params = array_add($params, 'image', $file_name);
          Habari::create($params);
          return $this->habari();
      } else if($form_name == "midahalo") {
          $params = $request->only('type', 'date', 'description');
          Midahalo::create($params);
          return $this->midahalo();
      } else if($form_name == "yaliyomo") {
          $params = $request->only('type', 'context',
                                    'katiba', 'description');
          Content::create($params);
          return $this->yaliyomo();
      } else if($form_name == "history") {
          $params = $request->only('title', 'date', 'description');
          History::create($params);
          return $this->cms_history();
      }
    }

    public function add_form($form_name) {
      if($form_name == "katiba77"){
          return view('cms.katiba77_add');
      }else if($form_name == "machapisho"){
          return view('cms.machapisho_add');
      }else if($form_name == "news"){
          return view('cms.news_add');
      }else if($form_name == "midahalo"){
          return view('cms.midahalo_add');
      }else if($form_name == "yaliyomo"){
          return view('cms.yaliyomo_add');
      }else if($form_name == "history"){
          return view('cms.history_add');
      }
    }

    public function replace_image(Request $request, $form_name, $id) {
      $file_name = "";
      if($request->hasFile('file')) {
        $file = $request->file('file');
        if($file->isValid()) {
          $old_file = Habari::find($id)->image;
          $old_location = 'uploads/' . $old_file;
          unlink($old_location); //delete the old_file
          $path = $file->path();
          $file_name = $file->getClientOriginalName();
          $destination = 'uploads/' . $file_name;
          move_uploaded_file($path, $destination);
        }
        if(form_name == "news") {
          Habari::where('id', $id)->update(['image' => $file_name, ]);
          return $this->news_details($id);
        }
      }
    }

    public function change_password_form() {
      return view('cms.change_password')->with('status', '');
    }

    public function change_password(Request $request) {
      $params = $request->only('old_password', 'new_password',
                                    'confirm_password');
      extract($params, EXTR_PREFIX_ALL, 'from_post');
      $user = Auth::user();
      $password = $from_post_old_password;
      if(Hash::check($password, $user->password)) {
        if(strcmp($from_post_new_password,
                        $from_post_confirm_password) == 0) {
          $user->password = Hash::make($from_post_new_password);
          $user->save();
          $status = "Password changed successfully";
        } else {
          $status = "Passwords do not match";
        }
      } else {
        $status = "Please enter the right old password";
      }
      $feedback = compact('status');
      return response()->json($feedback);
    }

    public function download_chapisho($file_name) {
      $path = 'uploads/' . $file_name;
      return $this->download($path);
    }

    private function download($path) {
      if(file_exists($path)) {

        $headers = [
          'Content-Description' => 'File Transfer',
          'Content-Type' => 'application/pdf',
          'Content-Disposition' => 'attachment; filename="'.basename($path).'"',
          'Expires' => '0',
          'Cache-Control' => 'must-revalidate',
          'Pragma' =>  'public',
          'Content-Length' => filesize($path),
        ];

        return response()->download($path, basename($path), $headers);
      }
    }
}

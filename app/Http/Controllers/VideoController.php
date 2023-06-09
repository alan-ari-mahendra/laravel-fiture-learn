<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Imports\VideoImport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('video', ['videos' => $videos]);
    }

    public function show($id)
    {
        $videos = Video::findOrFail($id);
        return view('video-detail', ['videos' => $videos]);
    }

    public function import_excel(Request $request) 
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('file_video',$nama_file);
 
		// import data
		Excel::import(new VideoImport, public_path('/file_video/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data Siswa Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect('/videos');
	}
}

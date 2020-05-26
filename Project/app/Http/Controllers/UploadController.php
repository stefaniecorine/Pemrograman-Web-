<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Gambar;
use File;
 
class UploadController extends Controller
{
	public function upload(){
		$gambar = Gambar::get();
		return view('upload',['gambar' => $gambar]);
	}
 
	public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'keterangan' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'public/resources/assets/img';
		$file->move($tujuan_upload,$nama_file);
 
		Gambar::create([
			'file' => $nama_file,
			'keterangan' => $request->keterangan,
		]);
 
		return view('read-pemeriksaan');
    }

    public function hapus($id){
        // hapus file
        $gambar = Gambar::where('id_gambar',$id)->first();
        File::delete('public/resources/assets/img'.$gambar->file);
     
        // hapus data
        Gambar::where('id_gambar',$id)->delete();
     
        return redirect('/pemeriksaan');
    }

    public function downloadImage($id){
        $gambar = Gambar::where('id_gambar', $id)->firstOrFail();
        $path = public_path(). '/public/resources/assets/img/'. $gambar->file;
        return response()->download($path, $gambar
                 ->original_filename, ['Content-Type' => $gambar->mime]);
    }
}
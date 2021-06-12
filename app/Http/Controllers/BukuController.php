<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Buku;

use App\Exports\bukuExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class bukuController extends Controller
{
	public function index()
	{
		$buku = Buku::all();
		return view('buku0254',['buku'=>$buku]);
	}

	public function export_excel()
	{
		return Excel::download(new buku, 'DATA_1461900254.xlsx');
	}
}
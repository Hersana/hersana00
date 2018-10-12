<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Perencanaan;
use App\PerencanaanDetail;
use App\Komposisi;
use App\KomposisiDetail;

use App\Http\Requests;
use Session;
use DB;
use PDF;

class ReportsController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {           
        return view('reports.export');
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create(Request $request)
    {
        //
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        //
    }


    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        //
    }

    /**
    * remove the specified resource from storage
    * 
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        if(!Perencanaan::destroy($id))
            return redirect()->back();

        Session::flash("flash_notification", [
            "level"     =>"success",
            "message"   =>"Perencanaan telah dihapus"
        ]);

        return redirect()->route('perencanaans.index');
    }

    /**
    * Menampilkan data pada form perencanaan dari tabel komposisi menggunakan javascript
    *
    * @return \Illuminate\Http\Response
    */
    public function findDataPerencanaan(Request $request)
    {
        $Perencanaan = Perencanaan::all()->where('id',$request->id)->first();        
        return response()->json(['perencanaan'=>$Perencanaan]);
    }



    public function exportPost(Request $request) 
    {
        $this->validate($request, [
            'kode'      =>'required',
            'type'      =>'required|in:pdf,xls'
        ], [
            'kode.required'=>'Anda belum memilih kode.'
        ]);

        $perencanaan = Perencanaan::with('perencanaandetails')->findOrFail($request->kode);
        $perencanaandetails = Perencanaan::with('perencanaandetails')->findOrFail($request->kode)->perencanaandetails;

        $sums = DB::select("
                    SELECT ROUND(SUM(data.need),2) as jumlah, data.nama AS nama, data.id, s.jumlah AS stok FROM(
                    SELECT SUM(p.need_com1) AS need, b.nama AS nama, b.id AS id
                    FROM perencanaans m, perencanaan_details p, bahans b
                    WHERE p.mat_com1 = b.id
                    AND p.perencanaan_id =  $request->kode
                    GROUP BY nama, id
                    UNION ALL
                    SELECT SUM(p.need_com2) AS need, b.nama AS nama, b.id AS id
                    FROM perencanaans m, perencanaan_details p, bahans b
                    WHERE p.mat_com2 = b.id
                    AND p.perencanaan_id =  $request->kode
                    GROUP BY nama, id
                    UNION ALL
                    SELECT SUM(p.need_com3) AS need, b.nama AS nama, b.id AS id
                    FROM perencanaans m, perencanaan_details p, bahans b
                    WHERE p.mat_com3 = b.id
                    AND p.perencanaan_id =  $request->kode
                    GROUP BY nama, id
                    UNION ALL
                    SELECT SUM(p.need_com4) AS need, b.nama AS nama, b.id AS id
                    FROM perencanaans m, perencanaan_details p, bahans b
                    WHERE p.mat_com4 = b.id
                    AND p.perencanaan_id =  $request->kode
                    GROUP BY nama, id
                    UNION ALL
                    SELECT SUM(p.need_com5) AS need, b.nama AS nama, b.id AS id
                    FROM perencanaans m, perencanaan_details p, bahans b
                    WHERE p.mat_com5 = b.id
                    AND p.perencanaan_id =  $request->kode
                    GROUP BY nama, id
                    UNION ALL
                    SELECT SUM(p.need_com6) AS need, b.nama AS nama, b.id AS id
                    FROM perencanaans m, perencanaan_details p, bahans b
                    WHERE p.mat_com6 = b.id
                    AND p.perencanaan_id =  $request->kode
                    GROUP BY nama, id
                    ) AS data, stoks s WHERE data.id = s.bahan_id
                    GROUP BY nama, id, stok
                ");    

        // dd($sums);

        // return view ('pdf.report2')->with(compact('perencanaan', 'perencanaandetails','sums'));
         
        // $view = View('pdf.report2')->with(compact('perencanaan', 'perencanaandetails','sums'));
        // $pdf = \App::make('dompdf.wrapper');
        // $pdf->loadHTML($view->render());
        // return $pdf->stream();

        // $pdf = PDF::loadview('pdf.report2')->with(compact('perencanaan', 'perencanaandetails','sums'));
        // return $pdf->download('report.pdf');
        // 

        $pdf = PDF::loadView('pdf.report2',compact('perencanaan'));
        return $pdf->download('report.pdf');

        // $handler = 'export' . ucfirst($request->get('type'));
        // return $this->$handler($perencanaan, $sums);
    }

    // private function exportPdf($perencanaan)
    // {
    //     $pdf = PDF::loadview('pdf.report2', compact('perencanaan','sums'));
    //     return $pdf->download('report.pdf');
    // }


}
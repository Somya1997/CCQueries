<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;
use App\StudentMnnit;
use App\ComplaintMnnit;
use App\User;

class PdfController extends Controller
{
    public function pdfview(Request $request)
    {
        $complaints = ComplaintMnnit::join('student_mnnits', 'id', '=', 'student_id')
                    ->whereIn('status', ['-2', '3'])
                    ->orderBy('updated_at','desc')
                    ->get();
        view()->share('complaints',$complaints);
            $pdf = PDF::loadView('pages.pdfview');
            return $pdf->download('pdfview.pdf');
    }
}

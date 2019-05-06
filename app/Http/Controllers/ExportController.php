<?php

namespace App\Http\Controllers;

use App\Exports\SubmissionExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller {

    public function all() {
        return Excel::download(new SubmissionExport(), 'participations.xlsx');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;


class ReportController extends Controller
{
    public function report1($pid)
    {
        $payment = Payment::find($pid);
        $pdf = App::make('dompdf.wrapper');

        $print = "<div style='margin:20px; padding:20px;'>";
        $print .= "<h1> Payment Receipt </h1>";
        $print .= "<hr/>";
        $print .= "<p> Receipt No : <b>" . $pid . "</b> </p>";
        $print .= "<p> Date : <b>" . $payment->paid_date . "</b> </p>";
        $print .= "<p> Enrollment No : <b>" . $payment->enrollment->enroll_no . "</b> </p>";
        $print .= "<p> Student Name : <b>" . $payment->enrollment->student->name . "</b> </p>";

        $print .= "<hr/>";

        //table creation
        $print .= "<table style='width:100%'>";

        $print . "<tr>";
        $print . "<th>Batch</th>";
        $print . "<th>Amount</th>";
        $print .= "</tr>";

        $print .= "<tr>";
        $print .= "<td>" . $payment->enrollment->batch->name . "</td>";
        $print .= "<td>" . $payment->amount . "</td>";
        $print .= "</tr>";

        $print .= "</table>";

        $print .= "<hr/>";

        $print .= "<span> Printed Date : <b>" . date('Y-m-d') . "</b> </span>";

        $print .= "</div>";

        $pdf->loadHTML($print);
        return $pdf->stream();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function index()
    {
        $data = Application::latest()->paginate(10);
        return view('index',compact('data'));
    }

    public function generateCsv(request $request)
    {
            $data = Application::latest()->get();
            $filename = "application.csv";
            $handle = fopen($filename, 'w+');
            fputcsv($handle, array(
                            'Name',
                            'Email',
                            'Address',
                           ));

            foreach($data as $row) {
                fputcsv($handle, array( $row['name'],
                                        $row['email'],
                                        $row['address'],
                                        ));
            }
            fclose($handle);
            $headers = array('Content-Type' => 'text/csv');
            return response()->download($filename, 'application.csv', $headers);
    }
}

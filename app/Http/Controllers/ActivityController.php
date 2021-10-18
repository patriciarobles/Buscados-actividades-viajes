<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ActivityController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();
        $validator = $this->validator($request->all());
        
        if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        }

        $date = Carbon::parse($data['date'])->format('Y-m-d');

        $activities = Activity::where('start_date', '<=',$date)->where('end_date', '>=', $date)->orderBy('popularity')->get();
        return view('resultados',['activities' => $activities, 'date' => $data['date'], 'num' => $data['num']]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'date' => ['required','date_format:d-m-Y'],
            'num' => 'required|integer|gt:0|lt:10',
        ]);
    }
}

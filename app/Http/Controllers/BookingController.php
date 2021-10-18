<?php

namespace App\Http\Controllers;

use Throwable;
use Carbon\Carbon;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->all();
        
        $validator = $this->validator($request->all());
        
        if ($validator->fails()) {
            return Response::json(array(
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray()
            ), 400);
        }

       
        
            $booking_date = Carbon::parse($data['date'])->format('Y-m-d');
            $now = Carbon::now();
            try{
                $booking = Booking::create([
                    'activity_id' => $data['id'],
                    'number' => $data['num'],
                    'price' => $data['price'],
                    'date_booked' => $now,
                    'date_activity' => $booking_date,
                ]);
    
                return response()->json(['success' => true, 'url' => route('reserva-ok')]);

            }catch (Throwable $e){

                return response()->json(['success' => false, 'url' => route('reserva-ko')]);
            }
           
            
        
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'id' => 'required|integer|exists:activity,id',
            'num' => 'required|integer|gt:0|lt:10',
            'price' => 'required|numeric',
            'date' => ['required','date_format:d-m-Y'],
        ]);
    }
}

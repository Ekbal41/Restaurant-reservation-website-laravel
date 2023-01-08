<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Menu;
use App\Models\Category;
use App\Models\Table;
use App\Enums\TableStatus;
use App\Models\Reservation;
use Carbon\Carbon;
use App\Http\Requests\ReservationStoreRequest;






class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function home(Reservation $reservation)
    {
        $menus = Menu::all();
        $cats = Category::all();
        $tables = Table::where('status', TableStatus::Avalaiable)->get();
        
        return view('home', ['menus' => $menus, 'cats' => $cats, 'tables' => $tables, 'reservation' => $reservation]);
    }

    public function reserve(ReservationStoreRequest $request)
    {
        $table = Table::findOrFail($request->table_id);
        if ($request->guest_number > $table->guest_number) {
            return back()->with('msg', 'Please choose the table base on guests.');
        }
        $request_date = Carbon::parse($request->res_date);
        foreach ($table->reservations as $res) {
            if ($res->res_date->format('Y-m-d') == $request_date->format('Y-m-d')) {
                return back()->with('msg', 'This table is reserved for this date.');
            }
        }
        Reservation::create($request->validated());

        return to_route('home')->with('msg', 'Reservation created successfully.');

        
        
    }
    public function logout() {
        return to_route('home')->with(Auth::logout());
      }

    public function dashboard()
    {
        $reservation_of_user = Reservation::where('email', Auth::user()->email)->get();
        return view('dashboard', ['reservations' => $reservation_of_user]);
    }
}

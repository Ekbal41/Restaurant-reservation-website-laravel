<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Table;
use App\Models\Menu;
use App\Models\Category;
use App\Models\User;

class AdminController extends Controller
{
    public function admin(Request $request)

    {
        $reservation_count = Reservation::count();
        $table_count = Table::count();
        $menu_count = Menu::count();
        $category_count = Category::count();
        $user_count = User::count();
        return view('admindash', compact('reservation_count', 'table_count', 'menu_count', 'category_count', 'user_count'));
    }
}

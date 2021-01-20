<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Member;
use App\Models\Reservation;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function dashboard() {

        $estimated_income_last_30 = DB::select(DB::raw('
            SELECT (sum(guests_total) * 27) as total
            FROM laravel_restaurant.reservations
            WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()
        '))[0]->total;

        $total_customers_last_30 = DB::select(DB::raw('
            SELECT sum(guests_total) as total
            FROM laravel_restaurant.reservations
            WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()
        '))[0]->total;

        $total_reservations_last_30 = DB::select(DB::raw('
            SELECT count(*) as total
            FROM laravel_restaurant.reservations
            WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()
        '))[0]->total;

        $total_employees = DB::select(DB::raw('
            SELECT count(*) as total
            FROM users
            INNER JOIN role_user on role_user.user_id = users.id
            INNER JOIN roles on role_id = role_user.role_id
            WHERE role_id = 2
        '))[0]->total;

        $latestReservations = Reservation::where('guests_total', '>', 0)->limit(5)->orderBy('created_at', 'desc')->get();

        return view('admin/dashboard', [
            'estimated_income_last_30' => '$'.$estimated_income_last_30,
            'total_customers_last_30' => $total_customers_last_30,
            'total_reservations_last_30' => $total_reservations_last_30,
            'total_employees' => $total_employees,
            'latest_reservations' => $latestReservations
        ]);
    }

    public function dailyRevenueLast30() {

        // return $estimated_income_daily_data = DB::select(DB::raw('
        //     SELECT
        //         DATE_FORMAT(created_at, "%y-%m-%d") as reserved_day,
        //         (sum(guests_total) * 27) as estimated_earnings,
        //         count(*) as total_reservations,
        //         sum(guests_total) as total_guests
        //     FROM laravel_restaurant.reservations
        //     GROUP BY reserved_day DESC;
        // '));

        return $estimated_income_daily_data = DB::select(DB::raw('
            SELECT
                DATE_FORMAT(created_at, "%y-%m-%d") as x,
                (sum(guests_total) * 27) as y
            FROM laravel_restaurant.reservations
            GROUP BY x DESC;
        '));
    }
}

?>
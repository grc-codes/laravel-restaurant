<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Reservation;
use App\Models\GeneralSetting;
use App\Models\SeoSetting;
use App\Models\SocialSetting;

class StaticPagesController extends Controller
{
    public function home() {
        $general_settings = GeneralSetting::find(1);
        $seo_settings = SeoSetting::find(1);
        $social_settings = SocialSetting::find(1);

        return view('home', [
            'general_settings' => $general_settings,
            'seo_settings' => $seo_settings,
            'social_settings' => $social_settings
        ]);
    }

    public function about() {
        return view('pages/about');
    }

    public function reservations() {
        return view('pages/reservations');
    }

    public function contact() {
        return view('pages/contact');
    }

    public function offers() {
        return view('pages/offers');
    }

    public function registerMember() {
        request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string']
        ]);

        $member = new Member();
        $member->fname = request('fname');
        $member->lname = request('lname');
        $member->email = request('email');
        $member->phone_number = request('phone_number');
        $member->save();
        return redirect('/offers/thank-you');
    }

    public function saveReservation() {
        request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'guests_total' => ['required', 'string'],
            'time' => ['required']
        ]);

        $reservation = new Reservation();
        $reservation->fname = request('fname');
        $reservation->lname = request('lname');
        $reservation->email = request('email');
        $reservation->phone_number = request('phone_number');
        $reservation->guests_total = request('guests_total');
        $reservation->time = request('time');
        $reservation->save();
        return redirect('/reservations/thank-you');
    }

    public function thankYou() {
        return view('pages/thank-you');
    }

    public function menu() {
        return view('menu/index');
    }

    public function singleMenu() {
        return view('menu/single-menu');
    }
}

?>
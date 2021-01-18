<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\GeneralSetting;
use App\Models\SeoSetting;
use App\Models\SocialSetting;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function general() {
        $id = 1;
        $general_settings = GeneralSetting::find($id);

        return view('admin/settings/general', [
            'general_settings' => $general_settings
        ]);
    }

    public function saveGeneral() {
        $id = 1;
        request()->validate([
            'site_title' => ['required', 'string', 'max:255'],
            'logo_image_url' => ['required', 'string'],
            'address_1' => ['required', 'string'],
            'city' => ['required', 'string'],
            'state' => ['required', 'string'],
            'zipcode' => ['required', 'string'],
            'phone_number' => ['required', 'string']
        ]);

        $general_settings = GeneralSetting::find($id);
        $general_settings->site_title = request('site_title');
        $general_settings->logo_image_url = request('logo_image_url');
        $general_settings->address_1 = request('address_1');
        $general_settings->address_2 = request('address_2');
        $general_settings->city = request('city');
        $general_settings->state = request('state');
        $general_settings->zipcode = request('zipcode');
        $general_settings->phone_number = request('phone_number');
        $general_settings->save();
        return redirect('/admin/settings/general');
    }

    public function seo() {
        $id = 1;
        $seo_settings = SeoSetting::find($id);

        return view('admin/settings/seo', [
            'seo_settings' => $seo_settings
        ]);
    }

    public function saveSeo() {
        $id = 1;
        request()->validate([
            'description' => ['required', 'string'],
            'keywords' => ['required', 'string']
        ]);

        $seo_settings = SeoSetting::find($id);
        $seo_settings->description = request('description');
        $seo_settings->keywords = request('keywords');
        $seo_settings->save();
        return redirect('/admin/settings/seo');
    }

    public function social() {
        $id = 1;
        $social_settings = SocialSetting::find($id);

        return view('admin/settings/social', [
            'social_settings' => $social_settings
        ]);
    }

    public function saveSocial() {
        $id = 1;
        request()->validate([
            'facebook_url' => ['string'],
            'twitter_url' => ['string'],
            'instagram_url' => ['string']
        ]);

        $social_settings = SocialSetting::find($id);
        $social_settings->facebook_url = request('facebook_url');
        $social_settings->twitter_url = request('twitter_url');
        $social_settings->instagram_url = request('instagram_url');
        $social_settings->save();
        return redirect('/admin/settings/social');
    }
}

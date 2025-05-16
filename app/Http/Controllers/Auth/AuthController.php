<?php

namespace App\Http\Controllers\Auth;

use App\Charts\UsersByRoleChart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Role;
use App\Models\Country;
use App\Models\Province;
use App\Models\City;
use App\Models\Subdistrict;
use App\Models\School;
use App\Models\TypeSchool;
use App\Models\Major;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Validator;

class AuthController extends Controller
{
    public function index(): View
    {
        return view('auth.login');
    }

    public function registration(): View
    {
        $countries = Country::all();
        $provinces = Province::all();
        $cities = City::all();
        $subdistricts = Subdistrict::all();
        $schools = School::all();
        return view('auth.registration',compact('countries','provinces','cities','subdistricts','schools'));
    }

    public function chooseregistration(): View
    {
        return view('auth.chooseregist');
    }

    public function postLogin(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            
            $user = User::where("email", $request->email)->first();
            $token = $user->createToken("API_TOKEN");

            session(['accessToken' => $token->plainTextToken]);

            return redirect()->intended('dream')
                        ->withSuccess('You have Successfully loggedin with token');
        }
  
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function logout(): RedirectResponse
    {
        Session::flush();
        Auth::logout();
  
        return Redirect('dashboard');
    }

    public function getProvinces(Request $request)
    {
        if ($request->ajax()) {
            $countryId = $request->country_id;

            // Query provinces berdasarkan country
            $provinces = Province::where('country', $countryId)->get(['id', 'province']);

            if ($provinces->isEmpty()) {
                return response()->json(['error' => 'No provinces found for this country'], 404);
            }

            return response()->json($provinces);
        }

        return response()->json(['error' => 'Invalid Request'], 400);
    }

    public function getCities(Request $request)
    {
        // Debugging untuk memastikan parameter diterima
        if (!$request->has('province_id')) {
            return response()->json(['error' => 'Province ID is required'], 400);
        }

        $provinceId = $request->province_id;

        // Ambil data city berdasarkan province ID
        $cities = City::where('province', $provinceId)->get(['id', 'city']);

        // Jika data kosong
        if ($cities->isEmpty()) {
            return response()->json(['error' => 'No cities found for this province'], 404);
        }

        return response()->json($cities);
    }

    public function getSubdistricts(Request $request)
    {
        if ($request->ajax()) {
            $cityId = $request->city_id;

            // Query subdistricts berdasarkan city
            $subdistricts = Subdistrict::where('city', $cityId)->get(['id', 'subdistrict']);

            if ($subdistricts->isEmpty()) {
                return response()->json(['error' => 'No subdistricts found for this city'], 404);
            }

            return response()->json($subdistricts);
        }

        return response()->json(['error' => 'Invalid Request'], 400);
    }

    public function getSchools(Request $request)
    {
        if ($request->ajax()) {
            $cityId = $request->city_id;

            // Query subdistricts berdasarkan city
            $schools = School::where('city', $cityId)->get(['id', 'school']);

            if ($schools->isEmpty()) {
                return response()->json(['error' => 'No schools found for this city'], 404);
            }

            return response()->json($schools);
        }

        return response()->json(['error' => 'Invalid Request'], 400);
    }

    public function getMajors(Request $request)
    {
        if ($request->ajax()) {
            $countryId = $request->country_id;

            // Query provinces berdasarkan country
            $majors = Major::where('type_school', $countryId)->get(['id', 'major']);

            if ($majors->isEmpty()) {
                return response()->json(['error' => 'No majors found for this country'], 404);
            }

            return response()->json($majors);
        }

        return response()->json(['error' => 'Invalid Request'], 400);
    }

    public function getTypeSchools(Request $request)
    {
        if ($request->ajax()) {
            $countryId = $request->country_id;

            // Query provinces berdasarkan country
            $type_schools = TypeSchool::where('country', $countryId)->get(['id', 'type']);

            if ($type_schools->isEmpty()) {
                return response()->json(['error' => 'No type_schools found for this country'], 404);
            }

            return response()->json($type_schools);
        }

        return response()->json(['error' => 'Invalid Request'], 400);
    }
}

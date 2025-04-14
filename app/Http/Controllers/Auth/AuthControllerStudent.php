<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Country;
use App\Models\Province;
use App\Models\City;
use App\Models\Subdistrict;
use App\Models\CardType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class AuthControllerStudent extends Controller
{    /**
     * Proses registrasi student.
     */
    public function postRegistration(Request $request): RedirectResponse
    {
        // Validasi Input
        $validatedData = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'role' => 'required',
            'promotor' => 'nullable', // <-- Ini ubahannya
            'parent_type' => 'nullable', // <-- Ini ubahannya
            'parent' => 'nullable', // <-- Ini ubahannya

            'name' => 'required',
            'nis' => 'required',
            'graduate' => 'required',
            'contact' => ['required', 'numeric'],
            'country' => 'required',
            'province' => 'required',
            'city' => 'required',
            'subdistrict' => 'required',
            'type_school' => 'required',
            'major' => 'required',
        ]);

        DB::beginTransaction(); // Mulai Transaction

        try {


            // Simpan ke Tabel student
            $student = Student::create([
                'name' => $validatedData['name'],
                'nis' => $validatedData['nis'],
                'graduate' => $validatedData['graduate'],
                'contact' => $validatedData['contact'],
                'country' => $validatedData['country'],
                'province' => $validatedData['province'],
                'city' => $validatedData['city'],
                'subdistrict' => $validatedData['subdistrict'],
                'type_school' => $validatedData['type_school'],
                'major' => $validatedData['major'],
            ]);

                        // Simpan ke Tabel User
            $user = User::create([
                'user' => $student->id,
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
                'role' => $validatedData['role'], // Set role ke "student"
                'promotor' => $validatedData['promotor'],
                'parent_type' => $validatedData['parent_type'],
                'parent' => $validatedData['parent']
            ]);

            DB::commit(); // Commit Transaction

            return redirect('login')->with('success', 'Great! You have Successfully registered');
        } catch (\Throwable $e) {
            DB::rollBack(); // Rollback jika ada kesalahan

            // Simpan error ke log
            Log::error('Registration Error: ' . $e->getMessage(), [
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);

            return back()->withErrors(['error' => 'Something went wrong. Please try again.'])->withInput();
        }
    }
}

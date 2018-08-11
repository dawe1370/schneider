<?php

namespace App\Http\Controllers;

use App\Exports\ExportLoggedIn;
use App\Http\Requests\StoreCheckInRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class VisitorController extends Controller
{
    const TABLE_NAME = 'guests';

    /**
     * @param StoreCheckInRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function doCheckIn(StoreCheckInRequest $request)
    {
        $inputs = $request->only([
            'name', 'pid', 'action', 'contact_name', 'company'
        ]);

        $inputs = array_merge($inputs, [
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $guest = \DB::table(self::TABLE_NAME)
                    ->where('pid', '=', $inputs['pid'])
                    ->latest()
                    ->first();

        if ($guest !== null && $guest->action === 'checkin') {
            return redirect()->back()
                             ->withInput()
                             ->with('error', 'A felhasználó már be van jelenkeztetve! / This user is already logged in!');
        }

        \DB::table(self::TABLE_NAME)
           ->insert($inputs);

        Excel::store(new ExportLoggedIn(), 'logged_in.xlsx');

        return redirect()->route('home')
                         ->with('success', 'Sikeres bejelentkezés! / Login successful! - ' . $inputs['name']);
    }


    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function doCheckOut(Request $request)
    {
        $guest = \DB::table(self::TABLE_NAME)
                    ->where('pid', '=', $request->get('pid'))
                    ->latest()
                    ->first();

        if ($guest === null) {
            return redirect()->route('home')
                             ->with('error', 'Felhasználó nem található! / User not found!');
        }

        if ($guest !== null && $guest->action === 'checkout') {
            return redirect()->route('home')
                             ->with('error', 'A felhasználó már ki van jelenkeztetve! / This user is already logged out!');
        }

        \DB::table(self::TABLE_NAME)
           ->insert([
               'name'           => $guest->name,
               'pid'            => $guest->pid,
               'contact_name'   => $guest->contact_name,
               'company'        => $guest->company,
               'action'         => $request->get('action'),
               'created_at'     => Carbon::now()->format('Y-m-d H:i:s')
           ]);

        Excel::store(new ExportLoggedIn(), 'logged_in.xlsx');

        return redirect()->route('home')
                         ->with('success', 'Sikeres kijelentkezés! / Logout successful! - ' . $guest->name);
    }
}

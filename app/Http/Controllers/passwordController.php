<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class passwordController extends Controller
{
    /**
     * Updating the password for the user.
     *
     * @param Request $request
     * @return Response
     */

    public function update(Request $request)
    {
      // Validate the new password length...
        $request->user()->fill([
            'password' => Hash::make($request->newPassword) // Hashing passwords
        ])->save();

        if (Hash::check('plain-text', $hashedPassword)) {
            // The passwords match...
         }
    }
}
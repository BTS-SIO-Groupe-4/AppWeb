<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'tel' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:10'],            
            'email' => 'required|email|unique:employes,MailEmp',
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'NomEmp' => $input['name'],
            'PrenomEmp' => $input['firstname'],
            'TelEmp' => $input['tel'],
            'MailEmp' => $input['email'],
            'MdpEmp' => Hash::make($input['password']),
            'PosteEmp' => 0,
        ]);
    }
}

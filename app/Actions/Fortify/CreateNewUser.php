<?php

namespace App\Actions\Fortify;

use App\Models\DetailDosen;
use App\Models\DetailMahasiswa;
use App\Models\DetailPejabatProdi;
use App\Models\DetailStafProdi;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'role_id' => ['required']
            // 'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        // return User::create([
        //     'name' => $input['name'],
        //     'email' => $input['email'],
        //     'password' => Hash::make($input['password']),
        //     'role_id' => $input ['role_id'],
        // ]);

        if ($input['role_id']=='1'){
            return DB::transaction(function () use($input)
            {
                return tap(User::create([
                    'name' => $input['name'],
                    'email' => $input['email'],
                    'password' => Hash::make($input['password']),
                    // 'role_id' => $input ['role_id'],
                ]));
            });
        }elseif($input['role_id']=='2'){
            return DB::transaction(function () use($input)
            {
                return tap(User::create([
                    'name' => $input['name'],
                    'email' => $input['email'],
                    'password' => Hash::make($input['password']),
                    // 'role_id' => $input ['role_id'],
                ]), function(User $user){
                    $detail_user = new DetailPejabatProdi();
                    $detail_user->users_id = $user->id;
                    $detail_user->nomor_induk = NULL;
                    $detail_user->role = NULL;
                    $detail_user->save();
                });
            });
        }elseif($input['role_id']=='3'){
            return DB::transaction(function () use($input)
            {
                return tap(User::create([
                    'name' => $input['name'],
                    'email' => $input['email'],
                    'password' => Hash::make($input['password']),
                    // 'role_id' => $input ['role_id'],
                ]), function(User $user){
                    $detail_user = new DetailStafProdi();
                    $detail_user->users_id = $user->id;
                    $detail_user->nomor_induk = NULL;
                    $detail_user->role = NULL;
                    $detail_user->save();
                });
            });
        }elseif($input['role_id']=='4'){
            return DB::transaction(function () use($input)
            {
                return tap(User::create([
                    'name' => $input['name'],
                    'email' => $input['email'],
                    'password' => Hash::make($input['password']),
                    // 'role_id' => $input ['role_id'],
                ]), function(User $user){
                    $detail_user = new DetailDosen();
                    $detail_user->users_id = $user->id;
                    $detail_user->save();
                });
            });
        }elseif($input['role_id']=='5'){
            return DB::transaction(function () use($input)
            {
                return tap(User::create([
                    'name' => $input['name'],
                    'email' => $input['email'],
                    'password' => Hash::make($input['password']),

                    // 'role_id' => $input ['role_id'],
                ]), function(User $user){
                    $detail_user = new DetailMahasiswa();
                    $detail_user->users_id = $user->id;
                    $detail_user->save();
                });
            });
        }

    }
}

<?php
namespace App\Actions\Fortify;

use App\Models\DetailMahasiswa;
use App\Models\DetailPejabatProdi;
use App\Models\DetailStafProdi;
use App\Models\Dosen;
use App\Models\StafProdi;
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
                    $PejabatProdi = new DetailPejabatProdi();
                    $PejabatProdi->users_id = $user->id;
                    $PejabatProdi->nomor_induk = NULL;
                    $PejabatProdi->role_id = NULL;
                    $PejabatProdi->save();
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
                    $stafprodi = new StafProdi();
                    $stafprodi->users_id = $user->id;
                    $stafprodi->nomor_induk = NULL;
                    $stafprodi->role = NULL;
                    $stafprodi->save();
                });
            });
        }elseif($input['role_id']=='4'){
            return DB::transaction(function () use($input)
            {
                return tap(User::create([
                   
                 
                    'password' => Hash::make($input['password']),
                    // 'role_id' => $input ['role_id'],
                ]), function(User $user){
                    $dosen = new Dosen();
                    $dosen->nama = NULL;
                    $dosen->no_telpon = NULL;
                    $dosen->users_id = $user->id;
                    $dosen->save();
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

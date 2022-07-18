<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'admin',
            'nim' => '123',
            'email' => 'admin@test.com',
            'password' => bcrypt('admin')
        ]);
        $user2 = User::create([
            'name' => 'pegawai',
            'nim' => '12345',
            'email' => 'pegawai@test.com',
            'password' => bcrypt('pegawai')
        ]);
        $user3 = User::create([
            'name' => 'Daffa Putra Permana',
            'nim' => '3411191104',
            'email' => 'mobadaff@gmail.com',
            'password' => bcrypt('3411191104')
        ]);
        $user4 = User::create([
            'name' => 'madun',
            'nim' => '01012001',
            'email' => 'madun@gmail.com',
            'password' => bcrypt('01012001')
        ]);

        $role = Role::create(['name' => 'Admin']);

        $role2 = Role::create(['name' => 'Pegawai']);

        $role3 = Role::create(['name' => 'Mahasiswa']);

        $role4 = Role::create(['name' => 'Dosen']);

        $permissions = Permission::pluck('id', 'id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
        $user2->assignRole([$role2->id]);
        $user3->assignRole([$role3->id]);
        $user4->assignRole([$role4->id]);
    }
}

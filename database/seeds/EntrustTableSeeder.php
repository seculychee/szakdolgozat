<?php

use App\Permission;
use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class EntrustTableSeeder extends Seeder {

	public function run()
	{

		DB::table('role_user')->truncate();
		DB::table('permission_role')->truncate();
		DB::table('roles')->truncate();
		DB::table('permissions')->truncate();

		$admin = new Role(); // 1
		$admin->name = 'admin';
		$admin->display_name = "Administrator";
		$admin->level = 10;
		$admin->save();

		$editor = new Role(); // 2
		$editor->name = 'editor';
		$editor->display_name = "Edzo";
		$editor->level = 5;
		$editor->save();

		$userRole = new Role(); // 3
		$userRole->name = 'user';
		$userRole->display_name = "User";
		$userRole->level = 1;
		$userRole->save();

		$user = User::where('email', '=', 'admin@admin.com')->first();
		$user->attachRole($admin);
		//$user->roles()->attach($admin->id); Eloquent basic

		$user1 = User::where('email', '=', 'editor@editor.com')->first();
		$user1->attachRole($editor);

		$user2 = User::where('email', '=', 'user@user.com')->first();
		$user2->attachRole($userRole);

		$manageRoles = new Permission();
		$manageRoles->name = 'manage_roles';
		$manageRoles->display_name = "Szabályok kezelése";
		$manageRoles->description = "";
		$manageRoles->route = "roles";
		$manageRoles->save();

		$createRoles = new Permission();
		$createRoles->name = 'create_roles';
		$createRoles->display_name = "Szabály létrehozása";
		$createRoles->description = "";
		$createRoles->route = "roles/create";
		$createRoles->save();

		$updateRoles = new Permission();
		$updateRoles->name = 'update_roles';
		$updateRoles->display_name = "Szabály módosítása";
		$updateRoles->description = "";
		$updateRoles->route = "roles/{roles}/edit";
		$updateRoles->save();

		$destroyRoles = new Permission();
		$destroyRoles->name = 'delete_roles';
		$destroyRoles->display_name = "Szabály törlése";
		$destroyRoles->description = "";
		$destroyRoles->route = "roles/{roles}";
		$destroyRoles->save();


		$manageUsers = new Permission();
		$manageUsers->name = 'manage_users';
		$manageUsers->display_name = "Felhasználók kezelése";
		$manageUsers->description = "";
		$manageUsers->route = "users";
		$manageUsers->save();

		$createUsers = new Permission();
		$createUsers->name = 'create_users';
		$createUsers->display_name = "Felhasználó létrehozása";
		$createUsers->description = "";
		$createUsers->route = "users/create";
		$createUsers->save();

		$updateUsers = new Permission();
		$updateUsers->name = 'update_users';
		$updateUsers->display_name = "Felhasználó szerkesztése";
		$updateUsers->description = "";
		$updateUsers->route = "users/{users}/edit";
		$updateUsers->save();

		$destroyUsers = new Permission();
		$destroyUsers->name = 'delete_users';
		$destroyUsers->display_name = "Felhasználók törlése";
		$destroyUsers->description = "";
		$destroyUsers->route = "users/{users}";
		$destroyUsers->save();


		$managePerms = new Permission();
		$managePerms->name = 'manage_permissions';
		$managePerms->display_name = "Jogosultságok kezelése";
		$managePerms->description = "";
		$managePerms->route = "permissions";
		$managePerms->save();

		$createPerms = new Permission();
		$createPerms->name = 'create_permissions';
		$createPerms->display_name = "Jogosultság létrehozása";
		$createPerms->description = "";
		$createPerms->route = "permissions/create";
		$createPerms->save();

		$updatePerms = new Permission();
		$updatePerms->name = 'update_permissions';
		$updatePerms->display_name = "Jogosultság módosítása";
		$updatePerms->description = "";
		$updatePerms->route = "permissions/{permissions}/edit";
		$updatePerms->save();

		$destroyPerms = new Permission();
		$destroyPerms->name = 'delete_permissions';
		$destroyPerms->display_name = "Jogosultság törlése";
		$destroyPerms->description = "";
		$destroyPerms->route = "permissions/{permissions}";
		$destroyPerms->save();

		$admin->attachPermissions([$manageRoles, $createRoles, $updateRoles, $destroyRoles, $manageUsers, $createUsers, $updateUsers, $destroyUsers, $managePerms, $createPerms, $updatePerms, $destroyPerms]);
		//$admin->perms()->sync([$manageRoles->id, $manageUsers->id, $managePerms->id]); Eloquent basic

		$editor->attachPermissions([$managePerms, $createPerms, $updatePerms, $destroyPerms]);
	}

}
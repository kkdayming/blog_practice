<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class AdminTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // base tables
        \Encore\Admin\Auth\Database\Menu::truncate();
        \Encore\Admin\Auth\Database\Menu::insert(
            [

            ]
        );

        \Encore\Admin\Auth\Database\Permission::truncate();
        \Encore\Admin\Auth\Database\Permission::insert(
            [
                [
                    "name" => "ARTICLESList",
                    "slug" => "articles.list",
                    "http_method" => "GET",
                    "http_path" => "/articles"
                ],
                [
                    "name" => "ARTICLESView",
                    "slug" => "articles.view",
                    "http_method" => "GET",
                    "http_path" => "/articles/*"
                ],
                [
                    "name" => "ARTICLESCreate",
                    "slug" => "articles.create",
                    "http_method" => "POST",
                    "http_path" => "/articles"
                ],
                [
                    "name" => "ARTICLESEdit",
                    "slug" => "articles.edit",
                    "http_method" => "PUT,PATCH",
                    "http_path" => "/articles/*"
                ],
                [
                    "name" => "ARTICLESDelete",
                    "slug" => "articles.delete",
                    "http_method" => "DELETE",
                    "http_path" => "/articles/*"
                ],
                [
                    "name" => "ARTICLESExport",
                    "slug" => "articles.export",
                    "http_method" => "GET",
                    "http_path" => ""
                ],
                [
                    "name" => "ARTICLESFilter",
                    "slug" => "articles.filter",
                    "http_method" => "GET",
                    "http_path" => "/articles"
                ],
                [
                    "name" => "COUNTRIESList",
                    "slug" => "countries.list",
                    "http_method" => "GET",
                    "http_path" => "/countries"
                ],
                [
                    "name" => "COUNTRIESView",
                    "slug" => "countries.view",
                    "http_method" => "GET",
                    "http_path" => "/countries/*"
                ],
                [
                    "name" => "COUNTRIESCreate",
                    "slug" => "countries.create",
                    "http_method" => "POST",
                    "http_path" => "/countries"
                ],
                [
                    "name" => "COUNTRIESEdit",
                    "slug" => "countries.edit",
                    "http_method" => "PUT,PATCH",
                    "http_path" => "/countries/*"
                ],
                [
                    "name" => "COUNTRIESDelete",
                    "slug" => "countries.delete",
                    "http_method" => "DELETE",
                    "http_path" => "/countries/*"
                ],
                [
                    "name" => "COUNTRIESExport",
                    "slug" => "countries.export",
                    "http_method" => "GET",
                    "http_path" => ""
                ],
                [
                    "name" => "COUNTRIESFilter",
                    "slug" => "countries.filter",
                    "http_method" => "GET",
                    "http_path" => "/countries"
                ],
                [
                    "name" => "FAILED-JOBSList",
                    "slug" => "failed-jobs.list",
                    "http_method" => "GET",
                    "http_path" => "/failed-jobs"
                ],
                [
                    "name" => "FAILED-JOBSView",
                    "slug" => "failed-jobs.view",
                    "http_method" => "GET",
                    "http_path" => "/failed-jobs/*"
                ],
                [
                    "name" => "FAILED-JOBSCreate",
                    "slug" => "failed-jobs.create",
                    "http_method" => "POST",
                    "http_path" => "/failed-jobs"
                ],
                [
                    "name" => "FAILED-JOBSEdit",
                    "slug" => "failed-jobs.edit",
                    "http_method" => "PUT,PATCH",
                    "http_path" => "/failed-jobs/*"
                ],
                [
                    "name" => "FAILED-JOBSDelete",
                    "slug" => "failed-jobs.delete",
                    "http_method" => "DELETE",
                    "http_path" => "/failed-jobs/*"
                ],
                [
                    "name" => "FAILED-JOBSExport",
                    "slug" => "failed-jobs.export",
                    "http_method" => "GET",
                    "http_path" => ""
                ],
                [
                    "name" => "FAILED-JOBSFilter",
                    "slug" => "failed-jobs.filter",
                    "http_method" => "GET",
                    "http_path" => "/failed-jobs"
                ],
                [
                    "name" => "MIGRATIONSList",
                    "slug" => "migrations.list",
                    "http_method" => "GET",
                    "http_path" => "/migrations"
                ],
                [
                    "name" => "MIGRATIONSView",
                    "slug" => "migrations.view",
                    "http_method" => "GET",
                    "http_path" => "/migrations/*"
                ],
                [
                    "name" => "MIGRATIONSCreate",
                    "slug" => "migrations.create",
                    "http_method" => "POST",
                    "http_path" => "/migrations"
                ],
                [
                    "name" => "MIGRATIONSEdit",
                    "slug" => "migrations.edit",
                    "http_method" => "PUT,PATCH",
                    "http_path" => "/migrations/*"
                ],
                [
                    "name" => "MIGRATIONSDelete",
                    "slug" => "migrations.delete",
                    "http_method" => "DELETE",
                    "http_path" => "/migrations/*"
                ],
                [
                    "name" => "MIGRATIONSExport",
                    "slug" => "migrations.export",
                    "http_method" => "GET",
                    "http_path" => ""
                ],
                [
                    "name" => "MIGRATIONSFilter",
                    "slug" => "migrations.filter",
                    "http_method" => "GET",
                    "http_path" => "/migrations"
                ],
                [
                    "name" => "PASSWORD-RESETSList",
                    "slug" => "password-resets.list",
                    "http_method" => "GET",
                    "http_path" => "/password-resets"
                ],
                [
                    "name" => "PASSWORD-RESETSView",
                    "slug" => "password-resets.view",
                    "http_method" => "GET",
                    "http_path" => "/password-resets/*"
                ],
                [
                    "name" => "PASSWORD-RESETSCreate",
                    "slug" => "password-resets.create",
                    "http_method" => "POST",
                    "http_path" => "/password-resets"
                ],
                [
                    "name" => "PASSWORD-RESETSEdit",
                    "slug" => "password-resets.edit",
                    "http_method" => "PUT,PATCH",
                    "http_path" => "/password-resets/*"
                ],
                [
                    "name" => "PASSWORD-RESETSDelete",
                    "slug" => "password-resets.delete",
                    "http_method" => "DELETE",
                    "http_path" => "/password-resets/*"
                ],
                [
                    "name" => "PASSWORD-RESETSExport",
                    "slug" => "password-resets.export",
                    "http_method" => "GET",
                    "http_path" => ""
                ],
                [
                    "name" => "PASSWORD-RESETSFilter",
                    "slug" => "password-resets.filter",
                    "http_method" => "GET",
                    "http_path" => "/password-resets"
                ],
                [
                    "name" => "PERSONAL-ACCESS-TOKENSList",
                    "slug" => "personal-access-tokens.list",
                    "http_method" => "GET",
                    "http_path" => "/personal-access-tokens"
                ],
                [
                    "name" => "PERSONAL-ACCESS-TOKENSView",
                    "slug" => "personal-access-tokens.view",
                    "http_method" => "GET",
                    "http_path" => "/personal-access-tokens/*"
                ],
                [
                    "name" => "PERSONAL-ACCESS-TOKENSCreate",
                    "slug" => "personal-access-tokens.create",
                    "http_method" => "POST",
                    "http_path" => "/personal-access-tokens"
                ],
                [
                    "name" => "PERSONAL-ACCESS-TOKENSEdit",
                    "slug" => "personal-access-tokens.edit",
                    "http_method" => "PUT,PATCH",
                    "http_path" => "/personal-access-tokens/*"
                ],
                [
                    "name" => "PERSONAL-ACCESS-TOKENSDelete",
                    "slug" => "personal-access-tokens.delete",
                    "http_method" => "DELETE",
                    "http_path" => "/personal-access-tokens/*"
                ],
                [
                    "name" => "PERSONAL-ACCESS-TOKENSExport",
                    "slug" => "personal-access-tokens.export",
                    "http_method" => "GET",
                    "http_path" => ""
                ],
                [
                    "name" => "PERSONAL-ACCESS-TOKENSFilter",
                    "slug" => "personal-access-tokens.filter",
                    "http_method" => "GET",
                    "http_path" => "/personal-access-tokens"
                ],
                [
                    "name" => "PHOTOSList",
                    "slug" => "photos.list",
                    "http_method" => "GET",
                    "http_path" => "/photos"
                ],
                [
                    "name" => "PHOTOSView",
                    "slug" => "photos.view",
                    "http_method" => "GET",
                    "http_path" => "/photos/*"
                ],
                [
                    "name" => "PHOTOSCreate",
                    "slug" => "photos.create",
                    "http_method" => "POST",
                    "http_path" => "/photos"
                ],
                [
                    "name" => "PHOTOSEdit",
                    "slug" => "photos.edit",
                    "http_method" => "PUT,PATCH",
                    "http_path" => "/photos/*"
                ],
                [
                    "name" => "PHOTOSDelete",
                    "slug" => "photos.delete",
                    "http_method" => "DELETE",
                    "http_path" => "/photos/*"
                ],
                [
                    "name" => "PHOTOSExport",
                    "slug" => "photos.export",
                    "http_method" => "GET",
                    "http_path" => ""
                ],
                [
                    "name" => "PHOTOSFilter",
                    "slug" => "photos.filter",
                    "http_method" => "GET",
                    "http_path" => "/photos"
                ],
                [
                    "name" => "ROLE-USERList",
                    "slug" => "role-user.list",
                    "http_method" => "GET",
                    "http_path" => "/role-user"
                ],
                [
                    "name" => "ROLE-USERView",
                    "slug" => "role-user.view",
                    "http_method" => "GET",
                    "http_path" => "/role-user/*"
                ],
                [
                    "name" => "ROLE-USERCreate",
                    "slug" => "role-user.create",
                    "http_method" => "POST",
                    "http_path" => "/role-user"
                ],
                [
                    "name" => "ROLE-USEREdit",
                    "slug" => "role-user.edit",
                    "http_method" => "PUT,PATCH",
                    "http_path" => "/role-user/*"
                ],
                [
                    "name" => "ROLE-USERDelete",
                    "slug" => "role-user.delete",
                    "http_method" => "DELETE",
                    "http_path" => "/role-user/*"
                ],
                [
                    "name" => "ROLE-USERExport",
                    "slug" => "role-user.export",
                    "http_method" => "GET",
                    "http_path" => ""
                ],
                [
                    "name" => "ROLE-USERFilter",
                    "slug" => "role-user.filter",
                    "http_method" => "GET",
                    "http_path" => "/role-user"
                ],
                [
                    "name" => "ROLESList",
                    "slug" => "roles.list",
                    "http_method" => "GET",
                    "http_path" => "/roles"
                ],
                [
                    "name" => "ROLESView",
                    "slug" => "roles.view",
                    "http_method" => "GET",
                    "http_path" => "/roles/*"
                ],
                [
                    "name" => "ROLESCreate",
                    "slug" => "roles.create",
                    "http_method" => "POST",
                    "http_path" => "/roles"
                ],
                [
                    "name" => "ROLESEdit",
                    "slug" => "roles.edit",
                    "http_method" => "PUT,PATCH",
                    "http_path" => "/roles/*"
                ],
                [
                    "name" => "ROLESDelete",
                    "slug" => "roles.delete",
                    "http_method" => "DELETE",
                    "http_path" => "/roles/*"
                ],
                [
                    "name" => "ROLESExport",
                    "slug" => "roles.export",
                    "http_method" => "GET",
                    "http_path" => ""
                ],
                [
                    "name" => "ROLESFilter",
                    "slug" => "roles.filter",
                    "http_method" => "GET",
                    "http_path" => "/roles"
                ],
                [
                    "name" => "TAGGABLESList",
                    "slug" => "taggables.list",
                    "http_method" => "GET",
                    "http_path" => "/taggables"
                ],
                [
                    "name" => "TAGGABLESView",
                    "slug" => "taggables.view",
                    "http_method" => "GET",
                    "http_path" => "/taggables/*"
                ],
                [
                    "name" => "TAGGABLESCreate",
                    "slug" => "taggables.create",
                    "http_method" => "POST",
                    "http_path" => "/taggables"
                ],
                [
                    "name" => "TAGGABLESEdit",
                    "slug" => "taggables.edit",
                    "http_method" => "PUT,PATCH",
                    "http_path" => "/taggables/*"
                ],
                [
                    "name" => "TAGGABLESDelete",
                    "slug" => "taggables.delete",
                    "http_method" => "DELETE",
                    "http_path" => "/taggables/*"
                ],
                [
                    "name" => "TAGGABLESExport",
                    "slug" => "taggables.export",
                    "http_method" => "GET",
                    "http_path" => ""
                ],
                [
                    "name" => "TAGGABLESFilter",
                    "slug" => "taggables.filter",
                    "http_method" => "GET",
                    "http_path" => "/taggables"
                ],
                [
                    "name" => "TAGSList",
                    "slug" => "tags.list",
                    "http_method" => "GET",
                    "http_path" => "/tags"
                ],
                [
                    "name" => "TAGSView",
                    "slug" => "tags.view",
                    "http_method" => "GET",
                    "http_path" => "/tags/*"
                ],
                [
                    "name" => "TAGSCreate",
                    "slug" => "tags.create",
                    "http_method" => "POST",
                    "http_path" => "/tags"
                ],
                [
                    "name" => "TAGSEdit",
                    "slug" => "tags.edit",
                    "http_method" => "PUT,PATCH",
                    "http_path" => "/tags/*"
                ],
                [
                    "name" => "TAGSDelete",
                    "slug" => "tags.delete",
                    "http_method" => "DELETE",
                    "http_path" => "/tags/*"
                ],
                [
                    "name" => "TAGSExport",
                    "slug" => "tags.export",
                    "http_method" => "GET",
                    "http_path" => ""
                ],
                [
                    "name" => "TAGSFilter",
                    "slug" => "tags.filter",
                    "http_method" => "GET",
                    "http_path" => "/tags"
                ],
                [
                    "name" => "USERSList",
                    "slug" => "users.list",
                    "http_method" => "GET",
                    "http_path" => "/users"
                ],
                [
                    "name" => "USERSView",
                    "slug" => "users.view",
                    "http_method" => "GET",
                    "http_path" => "/users/*"
                ],
                [
                    "name" => "USERSCreate",
                    "slug" => "users.create",
                    "http_method" => "POST",
                    "http_path" => "/users"
                ],
                [
                    "name" => "USERSEdit",
                    "slug" => "users.edit",
                    "http_method" => "PUT,PATCH",
                    "http_path" => "/users/*"
                ],
                [
                    "name" => "USERSDelete",
                    "slug" => "users.delete",
                    "http_method" => "DELETE",
                    "http_path" => "/users/*"
                ],
                [
                    "name" => "USERSExport",
                    "slug" => "users.export",
                    "http_method" => "GET",
                    "http_path" => ""
                ],
                [
                    "name" => "USERSFilter",
                    "slug" => "users.filter",
                    "http_method" => "GET",
                    "http_path" => "/users"
                ],
                [
                    "name" => "VIDEOSList",
                    "slug" => "videos.list",
                    "http_method" => "GET",
                    "http_path" => "/videos"
                ],
                [
                    "name" => "VIDEOSView",
                    "slug" => "videos.view",
                    "http_method" => "GET",
                    "http_path" => "/videos/*"
                ],
                [
                    "name" => "VIDEOSCreate",
                    "slug" => "videos.create",
                    "http_method" => "POST",
                    "http_path" => "/videos"
                ],
                [
                    "name" => "VIDEOSEdit",
                    "slug" => "videos.edit",
                    "http_method" => "PUT,PATCH",
                    "http_path" => "/videos/*"
                ],
                [
                    "name" => "VIDEOSDelete",
                    "slug" => "videos.delete",
                    "http_method" => "DELETE",
                    "http_path" => "/videos/*"
                ],
                [
                    "name" => "VIDEOSExport",
                    "slug" => "videos.export",
                    "http_method" => "GET",
                    "http_path" => ""
                ],
                [
                    "name" => "VIDEOSFilter",
                    "slug" => "videos.filter",
                    "http_method" => "GET",
                    "http_path" => "/videos"
                ]
            ]
        );

        \Encore\Admin\Auth\Database\Role::truncate();
        \Encore\Admin\Auth\Database\Role::insert(
            [

            ]
        );

        // pivot tables
        DB::table('admin_role_menu')->truncate();
        DB::table('admin_role_menu')->insert(
            [

            ]
        );

        DB::table('admin_role_permissions')->truncate();
        DB::table('admin_role_permissions')->insert(
            [

            ]
        );

        // finish
    }
}

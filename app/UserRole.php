<?php

namespace App\Role;

/***
 * Class UserRole
 * @package App\Role
 **/

class UserRole {

    const ROLE_ADMIN = 'ROLE_ADMIN';
    const ROLE_SUPPORT = 'ROLE_SUPPORT';
    const ROLE_CLIENT = 'ROLE_CLIENT';
    const ROLE_EDITOR = 'ROLE_EDITOR';

    /**
     * @var array
     **/

    protected static $roleHierarchy = [
        self::ROLE_ADMIN => ['*'],
        self::ROLE_SUPPORT => [
            self::ROLE_ACCOUNT_MANAGER,
            self::ROLE_FINANCE,
            self::ROLE_SUPPORT,
        ],
        self::ROLE_ACCOUNT_MANAGER => [
            self::ROLE_SUPPORT
        ],
        self::ROLE_FINANCE => [
            self::ROLE_SUPPORT
        ],
        self::ROLE_SUPPORT => []
    ];

    /**
     * @param string $role
     * @return array
     */
    public static function getAllowedRoles(string $role)
    {
        if (isset(self::$roleHierarchy[$role])) {
            return self::$roleHierarchy[$role];
        }

        return [];
    }

    /***
     * @return array
     */
    public static function getRoleList()
    {
        return [
            static::ROLE_ADMIN => 'Admin',
            static::ROLE_ACCOUNT_MANAGER => 'Management',
            static::ROLE_ACCOUNT_MANAGER => 'Account Manager',
            static::ROLE_SUPPORT => 'Support',
        ];
    }

}

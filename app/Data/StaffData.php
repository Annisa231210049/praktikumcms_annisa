<?php

namespace App\Data;

class StaffData
{
    public static function all()
    {
        return [
            ['id' => 1, 'nama' => 'Herri', 'role' => 'Staff Akademik', 'status' => 'aktif'],
            ['id' => 2, 'nama' => 'Amelia', 'role' => 'Staff Keuangan', 'status' => 'aktif'],
            ['id' => 3, 'nama' => 'Mina', 'role' => 'Staff Administrasi', 'status' => 'nonaktif'],
        ];
    }

    public static function find($id)
    {
        foreach (self::all() as $staff) {
            if ($staff['id'] == $id) {
                return $staff;
            }
        }
        return null;
    }
}

<?php
namespace App\Data;

class ProgramPesertaData
{
    // Data Program
    public static function allPrograms()
    {
        return [
            'TOEFL' => [
                'schedule' => [
                    ['day' => 'Senin', 'time' => '18:00-20:00', 'class' => '101'],
                    ['day' => 'Rabu', 'time' => '18:00-20:00', 'class' => '102'],
                    ['day' => 'Jumat', 'time' => '18:00-20:00', 'class' => '103'],
                ],
                'cost' => 1500000,
                'capacity' => 20,
            ],
            'TOEIC' => [
                'schedule' => [
                    ['day' => 'Senin', 'time' => '18:00-20:00', 'class' => '201'],
                    ['day' => 'Rabu', 'time' => '18:00-20:00', 'class' => '202'],
                    ['day' => 'Jumat', 'time' => '18:00-20:00', 'class' => '203'],
                ],
                'cost' => 1400000,
                'capacity' => 25,
            ],
            'IELTS' => [
                'schedule' => [
                    ['day' => 'Senin', 'time' => '18:00-20:00', 'class' => '301'],
                    ['day' => 'Rabu', 'time' => '18:00-20:00', 'class' => '302'],
                    ['day' => 'Jumat', 'time' => '18:00-20:00', 'class' => '303'],
                ],
                'cost' => 1600000,
                'capacity' => 30,
            ],
        ];
    }

    // Mencari Program berdasarkan nama
    public static function findProgram($programName)
    {
        $programs = self::allPrograms();
        return $programs[$programName] ?? null;
    }

    // Data Peserta
    public static function allParticipants()
    {
        return [
            ['id' => 1, 'name' => 'John Doe', 'program' => 'TOEFL', 'payment' => 'LUNAS', 'email' => 'john@example.com', 'phone' => '08123456789', 'address' => 'Jl. ABC No.1'],
            ['id' => 2, 'name' => 'Jane Smith', 'program' => 'TOEIC', 'payment' => 'LUNAS', 'email' => 'jane@example.com', 'phone' => '08198765432', 'address' => 'Jl. XYZ No.2'],
            ['id' => 3, 'name' => 'Alice Brown', 'program' => 'IELTS', 'payment' => 'LUNAS', 'email' => 'alice@example.com', 'phone' => '08211223344', 'address' => 'Jl. JKL No.3'],
            ['id' => 4, 'name' => 'Bob White', 'program' => 'TOEFL', 'payment' => 'BELUM LUNAS', 'email' => 'bob@example.com', 'phone' => '08334455667', 'address' => 'Jl. MNO No.4'],
            ['id' => 5, 'name' => 'Charlie Black', 'program' => 'TOEIC', 'payment' => 'LUNAS', 'email' => 'charlie@example.com', 'phone' => '08445566778', 'address' => 'Jl. PQR No.5'],
            ['id' => 6, 'name' => 'David Green', 'program' => 'IELTS', 'payment' => 'BELUM LUNAS', 'email' => 'david@example.com', 'phone' => '08556677889', 'address' => 'Jl. STU No.6'],
            ['id' => 7, 'name' => 'Eva Blue', 'program' => 'TOEFL', 'payment' => 'LUNAS', 'email' => 'eva@example.com', 'phone' => '08667788990', 'address' => 'Jl. VWX No.7'],
            ['id' => 8, 'name' => 'Frank Yellow', 'program' => 'TOEIC', 'payment' => 'LUNAS', 'email' => 'frank@example.com', 'phone' => '08778899001', 'address' => 'Jl. YZA No.8'],
            ['id' => 9, 'name' => 'Grace Red', 'program' => 'IELTS', 'payment' => 'LUNAS', 'email' => 'grace@example.com', 'phone' => '08889900112', 'address' => 'Jl. BCD No.9'],
            ['id' => 10, 'name' => 'Hannah Pink', 'program' => 'TOEIC', 'payment' => 'LUNAS', 'email' => 'hannah@example.com', 'phone' => '08990011223', 'address' => 'Jl. EFG No.10'],
        ];
    }

    // Mencari Peserta berdasarkan Nama
    public static function findParticipantByName($name)
    {
        foreach (self::allParticipants() as $peserta) {
            if (strtolower($peserta['name']) == strtolower($name)) { // Mengabaikan huruf besar/kecil
                return $peserta;
            }
        }
        return null;
    }
}

<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        DB::table('categories')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Laptop',
                    'type' => 'Tài Sản',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Case',
                    'type' => 'Tài Sản',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Màn hình',
                    'type' => 'Tài Sản',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),

            3 =>
                array (
                    'id' => 4,
                    'name' => 'Điện thoại bàn',
                    'type' => 'Tài Sản',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'Điện thoại di động',
                    'type' => 'Tài Sản',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'Máy tính bảng',
                    'type' => 'Tài Sản',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            6 =>
                array (
                    'id' => 7,
                    'name' => 'Hệ thống Polycom',
                    'type' => 'Tài Sản',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            7 =>
                array (
                    'id' => 8,
                    'name' => 'Máy chiếu',
                    'type' => 'Tài Sản',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),

            8 =>
                array (
                    'id' => 9,
                    'name' => 'Bàn phím có dây',
                    'type' => 'Phụ Kiện',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            9 =>
                array (
                    'id' => 10,
                    'name' => 'Chuột không dây',
                    'type' => 'Phụ Kiện',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            10 =>
                array (
                    'id' => 11,
                    'name' => 'Chuột có dây',
                    'type' => 'Phụ Kiện',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            11 =>
                array (
                    'id' => 12,
                    'name' => 'Bàn phím không dây',
                    'type' => 'Phụ Kiện',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            12 =>
                array (
                    'id' => 13,
                    'name' => 'Bàn phím laptop',
                    'type' => 'Linh kiện',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            13 =>
                array (
                    'id' => 14,
                    'name' => 'Ram',
                    'type' => 'Linh Kiện',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            14 =>
                array (
                    'id' => 15,
                    'name' => 'Ổ cứng HDD',
                    'type' => 'Linh Kiện',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            15 =>
                array (
                    'id' => 16,
                    'name' => 'Ổ cứng SSD',
                    'type' => 'Linh Kiện',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            16 =>
                array (
                    'id' => 17,
                    'name' => 'Nguồn',
                    'type' => 'Linh Kiện',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            17 =>
                array (
                    'id' => 18,
                    'name' => 'Main',
                    'type' => 'Linh Kiện',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            18 =>
                array (
                    'id' => 19,
                    'name' => 'Bộ lưu điện',
                    'type' => 'Tài Sản',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            19 =>
                array (
                    'id' => 20,
                    'name' => 'Máy backup dữ liệu NAS',
                    'type' => 'Tài Sản',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            20 =>
                array (
                    'id' => 21,
                    'name' => 'Switch POE',
                    'type' => 'Tài Sản',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            21 =>
                array (
                    'id' => 22,
                    'name' => 'Switch thông minh (chia VLAN)',
                    'type' => 'Tài Sản',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            22 =>
                array (
                    'id' => 23,
                    'name' => 'Bộ phát wifi',
                    'type' => 'Tài Sản',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            23 =>
                array (
                    'id' => 24,
                    'name' => 'Loa',
                    'type' => 'Tài Sản',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            24 =>
                array (
                    'id' => 25,
                    'name' => 'Mic',
                    'type' => 'Tài Sản',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            25 =>
                array (
                    'id' => 26,
                    'name' => 'Headphone',
                    'type' => 'Tài Sản',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            26 =>
                array (
                    'id' => 27,
                    'name' => 'Màn chiếu',
                    'type' => 'Tài Sản',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            27 =>
                array (
                    'id' => 28,
                    'name' => 'Card mạng rời',
                    'type' => 'Linh Kiện',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            28 =>
                array (
                    'id' => 29,
                    'name' => 'Pin laptop',
                    'type' => 'Linh Kiện',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            29 =>
                array (
                    'id' => 30,
                    'name' => 'Sạc laptop',
                    'type' => 'Phụ Kiện',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            30 =>
                array (
                    'id' => 31,
                    'name' => 'Dây HDMI',
                    'type' => 'Phụ Kiện',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            31 =>
                array (
                    'id' => 32,
                    'name' => 'Dây VGA',
                    'type' => 'Phụ Kiện',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            32 =>
                array (
                    'id' => 33,
                    'name' => 'Dây chuyển đổi USB to COM',
                    'type' => 'Linh Kiện',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            33 =>
                array (
                    'id' => 34,
                    'name' => 'Card PCI ra COM',
                    'type' => 'Linh Kiện',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            34 =>
                array (
                    'id' => 35,
                    'name' => 'Bản quyền Windows Server',
                    'type' => 'Bản Quyền',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            35 =>
                array (
                    'id' => 36,
                    'name' => 'Bản quyền Windows',
                    'type' => 'Bản Quyền',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            36 =>
                array (
                    'id' => 37,
                    'name' => 'Bản quyền Office',
                    'type' => 'Bản Quyền',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            37 =>
                array (
                    'id' => 38,
                    'name' => 'Máy in',
                    'type' => 'Tài Sản',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            38 =>
                array (
                    'id' => 39,
                    'name' => 'Máy Fax',
                    'type' => 'Tài Sản',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            39 =>
                array (
                    'id' => 40,
                    'name' => 'Máy Scan',
                    'type' => 'Tài Sản',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
        ));
    }
}

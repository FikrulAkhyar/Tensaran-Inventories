<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InventoriesSeeder extends Seeder
{
    public function run()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('inventories');

        $builder->insertBatch([
            [
                'id_inventory' => 1,
                'code' => 'INV/TNS/2019',
                'name' =>  'Penanas Nasi',
                'amount' => '2 buah',
                'type' => 'Wag Gas',
                'year' => '2019',
                'condition' => 'Bagus',
                'price' => 8000000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 2,
                'code' => 'INV/TNS/2019',
                'name' =>  'Waterzag',
                'amount' => '2 buah',
                'type' => 'Waterval',
                'year' => '2019',
                'condition' => 'Bagus',
                'price' => 1200000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 3,
                'code' => 'INV/TNS/2019',
                'name' =>  'Baskom Air',
                'amount' => '2 buah',
                'type' => 'Plastik',
                'year' => '2019',
                'condition' => 'Bagus',
                'price' => 2100000,
                'source' => '',
                'note' => 'ADK',
            ],
            [
                'id_inventory' => 4,
                'code' => 'INV/TNS/2019',
                'name' =>  'Seragam Persatuan',
                'amount' => '6 buah',
                'type' => '',
                'year' => '2019',
                'condition' => 'Bagus',
                'price' => 1800000,
                'source' => '',
                'note' => 'ADK',
            ],
            [
                'id_inventory' => 5,
                'code' => 'INV/TNS/2019',
                'name' =>  'Ambal',
                'amount' => '3 buah',
                'type' => '',
                'year' => '2019',
                'condition' => 'Bagus',
                'price' => 2400000,
                'source' => '',
                'note' => 'ADK',
            ],
            [
                'id_inventory' => 6,
                'code' => 'INV/TNS/2019',
                'name' =>  'Mukena Besar',
                'amount' => '4 buah',
                'type' => '',
                'year' => '2019',
                'condition' => 'Bagus',
                'price' => 600000,
                'source' => '',
                'note' => 'ADK',
            ],
            [
                'id_inventory' => 7,
                'code' => 'INV/TNS/2019',
                'name' =>  'Mukena Kecil',
                'amount' => '8 buah',
                'type' => '',
                'year' => '2019',
                'condition' => 'Bagus',
                'price' => 1040000,
                'source' => '',
                'note' => 'ADK',
            ],
            [
                'id_inventory' => 8,
                'code' => 'INV/TNS/2019',
                'name' =>  "Al-Qur'an Tafsir",
                'amount' => '6 buah',
                'type' => '',
                'year' => '2019',
                'condition' => 'Bagus',
                'price' => 960000,
                'source' => '',
                'note' => 'ADK',
            ],
            [
                'id_inventory' => 9,
                'code' => 'INV/TNS/2019',
                'name' =>  "Speaker",
                'amount' => '1 set',
                'type' => '',
                'year' => '2019',
                'condition' => 'Rusak',
                'price' => 1600000,
                'source' => '',
                'note' => 'ADK',
            ],
            [
                'id_inventory' => 10,
                'code' => 'INV/TNS/2020',
                'name' =>  "Gelas",
                'amount' => '12 lusin',
                'type' => 'Duralex',
                'year' => '2020',
                'condition' => 'Bagus',
                'price' => 1440000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 11,
                'code' => 'INV/TNS/2020',
                'name' =>  "Piring",
                'amount' => '12 lusin',
                'type' => 'Yifat',
                'year' => '2020',
                'condition' => 'Bagus',
                'price' => 1584000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 12,
                'code' => 'INV/TNS/2020',
                'name' =>  "Sendok Makan",
                'amount' => '12 lusin',
                'type' => 'Satinless Stell',
                'year' => '2020',
                'condition' => 'Bagus',
                'price' => 624000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 13,
                'code' => 'INV/TNS/2020',
                'name' =>  "Cuci Tangan",
                'amount' => '12 lusin',
                'type' => 'No. 8',
                'year' => '2020',
                'condition' => 'Bagus',
                'price' => 228000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 14,
                'code' => 'INV/TNS/2020',
                'name' =>  "Talam",
                'amount' => '6 buah',
                'type' => 'Panen',
                'year' => '2020',
                'condition' => 'Bagus',
                'price' => 276000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 15,
                'code' => 'INV/TNS/2020',
                'name' =>  "Termos Nasi",
                'amount' => '2 buah',
                'type' => 'Maspion',
                'year' => '2020',
                'condition' => 'Bagus',
                'price' => 470000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 16,
                'code' => 'INV/TNS/2020',
                'name' =>  "Tikar",
                'amount' => '5 buah',
                'type' => '',
                'year' => '2020',
                'condition' => 'Bagus',
                'price' => 980000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 17,
                'code' => 'INV/TNS/2020',
                'name' =>  "Tungku",
                'amount' => '1 buah',
                'type' => 'Rinai',
                'year' => '2020',
                'condition' => 'Bagus',
                'price' => 525000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 18,
                'code' => 'INV/TNS/2020',
                'name' =>  "Selang Gas",
                'amount' => '3 buah',
                'type' => 'Oto',
                'year' => '2020',
                'condition' => 'Bagus',
                'price' => 219000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 19,
                'code' => 'INV/TNS/2020',
                'name' =>  "Capir",
                'amount' => '12 lusin',
                'type' => 'Pyramb',
                'year' => '2020',
                'condition' => 'Bagus',
                'price' => 1008000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 20,
                'code' => 'INV/TNS/2020',
                'name' =>  "TV",
                'amount' => '1 unit',
                'type' => '',
                'year' => '2020',
                'condition' => 'Bagus',
                'price' => 6624400,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 21,
                'code' => 'INV/TNS/2020',
                'name' =>  "Receiver dan Parabola",
                'amount' => '1 unit',
                'type' => '',
                'year' => '2020',
                'condition' => 'Rusak',
                'price' => 1260000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 22,
                'code' => 'INV/TNS/2020',
                'name' =>  "Cangkul Por",
                'amount' => '2 buah',
                'type' => '',
                'year' => '2020',
                'condition' => 'Bagus',
                'price' => 210000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 23,
                'code' => 'INV/TNS/2020',
                'name' =>  "Cangkul",
                'amount' => '4 buah',
                'type' => '',
                'year' => '2020',
                'condition' => 'Bagus',
                'price' => 720000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 24,
                'code' => 'INV/TNS/2020',
                'name' =>  "Cadong",
                'amount' => '2 buah',
                'type' => '',
                'year' => '2020',
                'condition' => 'Bagus',
                'price' => 210000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 25,
                'code' => 'INV/TNS/2020',
                'name' =>  "Mangki",
                'amount' => '4 buah',
                'type' => '',
                'year' => '2020',
                'condition' => 'Bagus',
                'price' => 120000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 26,
                'code' => 'INV/TNS/2020',
                'name' =>  "Lam/Scrop Bulat",
                'amount' => '2 buah',
                'type' => '',
                'year' => '2020',
                'condition' => 'Bagus',
                'price' => 220000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 27,
                'code' => 'INV/TNS/2020',
                'name' =>  "Parang",
                'amount' => '2 buah',
                'type' => '',
                'year' => '2020',
                'condition' => 'Bagus',
                'price' => 200000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 28,
                'code' => 'INV/TNS/2020',
                'name' =>  "Tenda 4x5",
                'amount' => '4 buah',
                'type' => '',
                'year' => '2020',
                'condition' => 'Bagus',
                'price' => 800000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 29,
                'code' => 'INV/TNS/2020',
                'name' =>  "Scop",
                'amount' => '5 buah',
                'type' => '',
                'year' => '2020',
                'condition' => 'Bagus',
                'price' => 500000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 30,
                'code' => 'INV/TNS/2020',
                'name' =>  "Timba",
                'amount' => '5 buah',
                'type' => '',
                'year' => '2020',
                'condition' => 'Bagus',
                'price' => 45000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 31,
                'code' => 'INV/TNS/2020',
                'name' =>  "Cangkul",
                'amount' => '5 buah',
                'type' => '',
                'year' => '2020',
                'condition' => 'Bagus',
                'price' => 900000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 32,
                'code' => 'INV/TNS/2020',
                'name' =>  "Smartphone",
                'amount' => '2 unit',
                'type' => '',
                'year' => '2020',
                'condition' => 'Bagus',
                'price' => 5129000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 33,
                'code' => 'INV/TNS/2020',
                'name' =>  "Kereta Sorong",
                'amount' => '1 unit',
                'type' => '',
                'year' => '2020',
                'condition' => 'Bagus',
                'price' => 600000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 34,
                'code' => 'INV/TNS/2020',
                'name' =>  "Laptop",
                'amount' => '1 unit',
                'type' => '',
                'year' => '2020',
                'condition' => 'Bagus',
                'price' => 6900000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 35,
                'code' => 'INV/TNS/2020',
                'name' =>  "Ambal",
                'amount' => '2 buah',
                'type' => '',
                'year' => '2020',
                'condition' => 'Bagus',
                'price' => 1600000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 36,
                'code' => 'INV/TNS/2020',
                'name' =>  "Teratak",
                'amount' => '2 unit',
                'type' => '',
                'year' => '2020',
                'condition' => 'Bagus',
                'price' => 30000000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 37,
                'code' => 'INV/TNS/2020',
                'name' =>  "Compresor",
                'amount' => '1 unit',
                'type' => '',
                'year' => '2020',
                'condition' => 'Bagus',
                'price' => 3000000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 38,
                'code' => 'INV/TNS/2020',
                'name' =>  "Topi/Kopiah Kerawang",
                'amount' => '12 buah',
                'type' => '',
                'year' => '2020',
                'condition' => 'Bagus',
                'price' => 744000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 39,
                'code' => 'INV/TNS/2020',
                'name' =>  "Topi/Kopiah Kerawang",
                'amount' => '12 buah',
                'type' => '',
                'year' => '2020',
                'condition' => 'Bagus',
                'price' => 744000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 40,
                'code' => 'INV/TNS/2021',
                'name' =>  "Iqra'",
                'amount' => '2 lusin',
                'type' => '',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 840000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 41,
                'code' => 'INV/TNS/2021',
                'name' =>  "Papan Tulis",
                'amount' => '2 lusin',
                'type' => '',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 960000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 42,
                'code' => 'INV/TNS/2021',
                'name' =>  "Ambal",
                'amount' => '2 buah',
                'type' => '',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 2160000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 43,
                'code' => 'INV/TNS/2021',
                'name' =>  "Cat TPA",
                'amount' => '1 buah',
                'type' => '',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 687000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 44,
                'code' => 'INV/TNS/2021',
                'name' =>  "Lemari",
                'amount' => '2 buah',
                'type' => '',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 3550000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 45,
                'code' => 'INV/TNS/2021',
                'name' =>  "Kursi",
                'amount' => '2 buah',
                'type' => '',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 180000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 46,
                'code' => 'INV/TNS/2021',
                'name' =>  "Speaker Aktif",
                'amount' => '2 unit',
                'type' => '',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 11930500,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 47,
                'code' => 'INV/TNS/2021',
                'name' =>  "Microphone",
                'amount' => '1 unit',
                'type' => '',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 2007000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 48,
                'code' => 'INV/TNS/2021',
                'name' =>  "Mixer 6 channel",
                'amount' => '1 unit',
                'type' => '',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 2899000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 49,
                'code' => 'INV/TNS/2021',
                'name' =>  "Stand Mic",
                'amount' => '1 unit',
                'type' => '',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 312200,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 50,
                'code' => 'INV/TNS/2021',
                'name' =>  "Kabel Jack",
                'amount' => '1 rol',
                'type' => '',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 289900,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 51,
                'code' => 'INV/TNS/2021',
                'name' =>  "Stand Speaker",
                'amount' => '1 buah',
                'type' => '',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 892000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 52,
                'code' => 'INV/TNS/2021',
                'name' =>  "Tempat Piring",
                'amount' => '1 buah',
                'type' => '',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 3000000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 53,
                'code' => 'INV/TNS/2021',
                'name' =>  "Speaker",
                'amount' => '2 unit',
                'type' => '',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 4906000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 54,
                'code' => 'INV/TNS/2021',
                'name' =>  "Ampli Kecil",
                'amount' => '2 unit',
                'type' => '',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 2230000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 55,
                'code' => 'INV/TNS/2021',
                'name' =>  "Ampli Sedang",
                'amount' => '2 unit',
                'type' => '',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 6021000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 56,
                'code' => 'INV/TNS/2021',
                'name' =>  "Corong (trapo)",
                'amount' => '4 unit',
                'type' => '',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 3345000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 57,
                'code' => 'INV/TNS/2021',
                'name' =>  "Mikrophone Monitor Audio",
                'amount' => '3 buah',
                'type' => '',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 1505000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 58,
                'code' => 'INV/TNS/2021',
                'name' =>  "Mikrophone Imem",
                'amount' => '2 buah',
                'type' => '',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 390250,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 59,
                'code' => 'INV/TNS/2021',
                'name' =>  "Kabel Perdana",
                'amount' => '1 rol',
                'type' => '',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 724750,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 60,
                'code' => 'INV/TNS/2021',
                'name' =>  "Oven",
                'amount' => '1 buah',
                'type' => 'Hoc',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 450000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 61,
                'code' => 'INV/TNS/2021',
                'name' =>  "Kompor",
                'amount' => '1 buah',
                'type' => 'Hoc',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 320000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 62,
                'code' => 'INV/TNS/2021',
                'name' =>  "Baking",
                'amount' => '1 buah',
                'type' => '',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 26000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 63,
                'code' => 'INV/TNS/2021',
                'name' =>  "Mixer",
                'amount' => '1 buah',
                'type' => '',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 350000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 64,
                'code' => 'INV/TNS/2021',
                'name' =>  "Tempat Bolu",
                'amount' => '12 buah',
                'type' => 'Plastik',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 350000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 65,
                'code' => 'INV/TNS/2021',
                'name' =>  "Setia",
                'amount' => '2 buah',
                'type' => 'Plastik',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 30000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 66,
                'code' => 'INV/TNS/2021',
                'name' =>  "Timbangan Kue",
                'amount' => '1 buah',
                'type' => '',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 40000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 67,
                'code' => 'INV/TNS/2021',
                'name' =>  "Kursi Plastik",
                'amount' => '20 buah',
                'type' => 'Panen',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 1800000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 68,
                'code' => 'INV/TNS/2021',
                'name' =>  "Kain Timbang",
                'amount' => '20 buah',
                'type' => 'Gorden',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 207000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 69,
                'code' => 'INV/TNS/2021',
                'name' =>  "Taplak Meja",
                'amount' => '1 buah',
                'type' => 'Olimpick',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 655500,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 70,
                'code' => 'INV/TNS/2021',
                'name' =>  "Meja/Taplak Meja",
                'amount' => '1 buah',
                'type' => 'Olimpick',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 655500,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 71,
                'code' => 'INV/TNS/2021',
                'name' =>  "Timbangan Bayi",
                'amount' => '1 buah',
                'type' => 'Olimpick',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 632500,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 72,
                'code' => 'INV/TNS/2021',
                'name' =>  "Flash Disk",
                'amount' => '2 buah',
                'type' => '',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 400000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 73,
                'code' => 'INV/TNS/2021',
                'name' =>  "Kereta Sorong",
                'amount' => '2 buah',
                'type' => '',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 600000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 74,
                'code' => 'INV/TNS/2021',
                'name' =>  "Sumur Bor",
                'amount' => '1 unit',
                'type' => '',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 10505000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 75,
                'code' => 'INV/TNS/2021',
                'name' =>  "Printer",
                'amount' => '1 unit',
                'type' => '',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 4113000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 76,
                'code' => 'INV/TNS/2021',
                'name' =>  "Laptop",
                'amount' => '1 unit',
                'type' => '',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 9101000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 77,
                'code' => 'INV/TNS/2021',
                'name' =>  "Mixer Ashly 2ch",
                'amount' => '2 unit',
                'type' => '',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 3568000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 78,
                'code' => 'INV/TNS/2021',
                'name' =>  "Scop",
                'amount' => '5 buah',
                'type' => '',
                'year' => '2021',
                'condition' => 'Bagus',
                'price' => 500000,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 79,
                'code' => 'INV/TNS/2022',
                'name' =>  "Laptop",
                'amount' => '1 unit',
                'type' => 'Acer',
                'year' => '2022',
                'condition' => 'Bagus',
                'price' => 7020392,
                'source' => '',
                'note' => ''
            ],
            [
                'id_inventory' => 80,
                'code' => 'INV/TNS/2022',
                'name' =>  "Infocus dan Screen",
                'amount' => '1 set',
                'type' => '',
                'year' => '2022',
                'condition' => 'Bagus',
                'price' => 5000000,
                'source' => '',
                'note' => ''
            ]
        ]);
    }
}

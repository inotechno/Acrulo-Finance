<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Makanan & Minuman',
                'slug' => 'makanan-minuman',
                'description' => 'Kategori untuk pengeluaran makanan dan minuman',
                'icon' => '<i class="ti ti-restaurant"></i>',
                'color' => '#FF6B6B',
                'subcategories' => [
                    [
                        'name' => 'Restoran & Kafe',
                        'slug' => 'restoran-kafe',
                        'description' => 'Makan di restoran dan kafe',
                        'icon' => '<i class="ti ti-coffee"></i>',
                    ],
                    [
                        'name' => 'Belanja Bahan Makanan',
                        'slug' => 'belanja-bahan-makanan',
                        'description' => 'Belanja kebutuhan makanan dan minuman',
                        'icon' => '<i class="ti ti-shopping-cart"></i>',
                    ],
                ]
            ],
            [
                'name' => 'Belanja',
                'slug' => 'belanja',
                'description' => 'Kategori untuk pengeluaran belanja',
                'icon' => '<i class="ti ti-shopping-bag"></i>',
                'color' => '#4ECDC4',
                'subcategories' => [
                    [
                        'name' => 'Pakaian & Sepatu',
                        'slug' => 'pakaian-sepatu',
                        'description' => 'Belanja pakaian dan sepatu',
                        'icon' => '<i class="ti ti-shirt"></i>',
                    ],
                    [
                        'name' => 'Elektronik',
                        'slug' => 'elektronik',
                        'description' => 'Belanja elektronik dan aksesori',
                        'icon' => '<i class="ti ti-device-laptop"></i>',
                    ],
                    [
                        'name' => 'Kesehatan & Kecantikan',
                        'slug' => 'kesehatan-kecantikan',
                        'description' => 'Produk kesehatan dan kecantikan',
                        'icon' => '<i class="ti ti-heart"></i>',
                    ],
                    [
                        'name' => 'Rumah Tangga',
                        'slug' => 'rumah-tangga',
                        'description' => 'Kebutuhan rumah tangga',
                        'icon' => '<i class="ti ti-home"></i>',
                    ],
                ]
            ],
            [
                'name' => 'Hunian',
                'slug' => 'hunian',
                'description' => 'Kategori untuk pengeluaran tempat tinggal',
                'icon' => '<i class="ti ti-building"></i>',
                'color' => '#45B7D1',
                'subcategories' => [
                    [
                        'name' => 'Sewa',
                        'slug' => 'sewa',
                        'description' => 'Biaya sewa tempat tinggal',
                        'icon' => '<i class="ti ti-home-dollar"></i>',
                    ],
                    [
                        'name' => 'Utilitas',
                        'slug' => 'utilitas',
                        'description' => 'Tagihan listrik, air, dan gas',
                        'icon' => '<i class="ti ti-bulb"></i>',
                    ],
                    [
                        'name' => 'Perawatan',
                        'slug' => 'perawatan',
                        'description' => 'Biaya perawatan dan perbaikan',
                        'icon' => '<i class="ti ti-tool"></i>',
                    ],
                ]
            ],
            [
                'name' => 'Transportasi',
                'slug' => 'transportasi',
                'description' => 'Kategori untuk pengeluaran transportasi',
                'icon' => '<i class="ti ti-car"></i>',
                'color' => '#96CEB4',
                'subcategories' => [
                    [
                        'name' => 'Transportasi Umum',
                        'slug' => 'transportasi-umum',
                        'description' => 'Biaya transportasi umum',
                        'icon' => '<i class="ti ti-bus"></i>',
                    ],
                    [
                        'name' => 'Bahan Bakar',
                        'slug' => 'bahan-bakar',
                        'description' => 'Biaya bahan bakar kendaraan',
                        'icon' => '<i class="ti ti-gas-station"></i>',
                    ],
                    [
                        'name' => 'Perawatan Kendaraan',
                        'slug' => 'perawatan-kendaraan',
                        'description' => 'Biaya perawatan dan servis kendaraan',
                        'icon' => '<i class="ti ti-car-garage"></i>',
                    ],
                ]
            ],
            [
                'name' => 'Hiburan & Gaya Hidup',
                'slug' => 'hiburan-gaya-hidup',
                'description' => 'Kategori untuk pengeluaran hiburan dan gaya hidup',
                'icon' => '<i class="ti ti-player-play"></i>',
                'color' => '#FF9F9F',
                'subcategories' => [
                    [
                        'name' => 'Olahraga & Kebugaran',
                        'slug' => 'olahraga-kebugaran',
                        'description' => 'Biaya olahraga dan kebugaran',
                        'icon' => '<i class="ti ti-barbell"></i>',
                    ],
                    [
                        'name' => 'Hobi',
                        'slug' => 'hobi',
                        'description' => 'Pengeluaran untuk hobi',
                        'icon' => '<i class="ti ti-palette"></i>',
                    ],
                    [
                        'name' => 'Liburan',
                        'slug' => 'liburan',
                        'description' => 'Biaya liburan dan perjalanan',
                        'icon' => '<i class="ti ti-plane"></i>',
                    ],
                    [
                        'name' => 'Hiburan Digital',
                        'slug' => 'hiburan-digital',
                        'description' => 'Biaya streaming dan hiburan digital',
                        'icon' => '<i class="ti ti-device-tv"></i>',
                    ],
                ]
            ],
            [
                'name' => 'Pendapatan',
                'slug' => 'pendapatan',
                'description' => 'Kategori untuk sumber pendapatan',
                'icon' => '<i class="ti ti-wallet"></i>',
                'color' => '#77DD77',
                'subcategories' => [
                    [
                        'name' => 'Gaji',
                        'slug' => 'gaji',
                        'description' => 'Pendapatan dari pekerjaan',
                        'icon' => '<i class="ti ti-cash"></i>',
                    ],
                    [
                        'name' => 'Investasi',
                        'slug' => 'investasi',
                        'description' => 'Pendapatan dari investasi',
                        'icon' => '<i class="ti ti-chart-line"></i>',
                    ],
                    [
                        'name' => 'Pendapatan Lainnya',
                        'slug' => 'pendapatan-lainnya',
                        'description' => 'Sumber pendapatan lainnya',
                        'icon' => '<i class="ti ti-plus"></i>',
                    ],
                ]
            ],
            [
                'name' => 'Keuangan',
                'slug' => 'keuangan',
                'description' => 'Kategori untuk pengeluaran keuangan',
                'icon' => '<i class="ti ti-coins"></i>',
                'color' => '#FFB347',
                'subcategories' => [
                    [
                        'name' => 'Tagihan & Biaya',
                        'slug' => 'tagihan-biaya',
                        'description' => 'Pembayaran tagihan dan biaya layanan',
                        'icon' => '<i class="ti ti-receipt"></i>',
                    ],
                    [
                        'name' => 'Asuransi',
                        'slug' => 'asuransi',
                        'description' => 'Pembayaran premi asuransi',
                        'icon' => '<i class="ti ti-shield-check"></i>',
                    ],
                    [
                        'name' => 'Pajak',
                        'slug' => 'pajak',
                        'description' => 'Pembayaran pajak',
                        'icon' => '<i class="ti ti-file-dollar"></i>',
                    ],
                ]
            ],
        ];

        foreach ($categories as $category) {
            $subcategories = $category['subcategories'] ?? [];
            unset($category['subcategories']);

            $category = Category::create($category);

            foreach ($subcategories as $subcategory) {
                $subcategory['category_id'] = $category->id;
                Subcategory::create($subcategory);
            }
        }
    }
}

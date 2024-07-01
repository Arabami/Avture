<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Red Sofa',
            'description' => 'Cocok untuk Diruang Kerja dan Keluarga diwarnai dengan Warna Alami yaitu Dara',
            'image_url' => 'https://tse4.mm.bing.net/th?id=OIP.6hvh6xQZolFxw8kNAF2qgwHaGo&pid=Api&P=0&h=180',
            'price' => 1999000,
            'normal_price' => 2490000,
            'stock' => 6,
        ]);
        Product::create([
            'name' => 'Grey Sofa',
            'description' => 'Cocok untuk Diruang Kerja dan Keluarga diwarnai dengan Warna Alami Abu Abu berbahan Premium dari Luar Negeri',
            'image_url' => 'https://i5.walmartimages.com/asr/1a1bbb46-5e69-4d32-a998-7926df94f803_1.e081b98d040b819df7decaf9e729b041.jpeg',
            'price' => 2986000,
            'normal_price' => 3670000,
            'stock' => 9,
        ]);
        Product::create([
            'name' => 'Green Sofa',
            'description' => 'Cocok untuk Diruang Kerja dan Keluarga diwarnai dengan Warna Alami Matcha',
            'image_url' => 'https://d9dvmj2a7k2dc.cloudfront.net/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/t/o/tov-s147_4_tov.jpg',
            'price' => 3999000,
            'normal_price' => 5540000,
            'stock' => 6,
        ]);

        Product::create([
            'name' => 'Brazko Table',
            'description' => 'Didesain dengan Kayu Jati yang kokoh dari Negara Meksiko membuatnya menjadi meja yang kuat dan tahan air ketika diluar',
            'image_url' => 'https://tse4.mm.bing.net/th?id=OIP.6hvh6xQZolFxw8kNAF2qgwHaGo&pid=Api&P=0&h=180',
            'price' => 1999000,
            'normal_price' => 2490000,
            'stock' => 6,
        ]);
        Product::create([
            'name' => 'Oakwood Table',
            'description' => 'Desain yang cocok untuk ruang keluarga dan memiliki banyak tempat penyimpanan untuk Hangout',
            'image_url' => 'https://i5.walmartimages.com/asr/1a1bbb46-5e69-4d32-a998-7926df94f803_1.e081b98d040b819df7decaf9e729b041.jpeg',
            'price' => 2986000,
            'normal_price' => 3670000,
            'stock' => 9,
        ]);
        Product::create([
            'name' => 'Marmer',
            'description' => 'Desain yang futuristik dan memiliki daya desain yang seni yang tinggi',
            'image_url' => 'https://d9dvmj2a7k2dc.cloudfront.net/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/t/o/tov-s147_4_tov.jpg',
            'price' => 3999000,
            'normal_price' => 5540000,
            'stock' => 6,
        ]);

        Product::create([
            'name' => 'Matador Lamp',
            'description' => 'Cocok untuk Diruang Kerja dan Keluarga diwarnai dengan Warna Alami yaitu Dara',
            'image_url' => 'https://tse4.mm.bing.net/th?id=OIP.6hvh6xQZolFxw8kNAF2qgwHaGo&pid=Api&P=0&h=180',
            'price' => 1999000,
            'normal_price' => 2490000,
            'stock' => 6,
        ]);
        Product::create([
            'name' => 'Leaf Lamp',
            'description' => 'Cocok untuk Diruang Kerja dan Keluarga diwarnai dengan Warna Alami Abu Abu berbahan Premium dari Luar Negeri',
            'image_url' => 'https://i5.walmartimages.com/asr/1a1bbb46-5e69-4d32-a998-7926df94f803_1.e081b98d040b819df7decaf9e729b041.jpeg',
            'price' => 2986000,
            'normal_price' => 3670000,
            'stock' => 9,
        ]);
        Product::create([
            'name' => 'Luxur Lamp',
            'description' => 'Cocok untuk Diruang Kerja dan Keluarga diwarnai dengan Warna Alami Matcha',
            'image_url' => 'https://d9dvmj2a7k2dc.cloudfront.net/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/t/o/tov-s147_4_tov.jpg',
            'price' => 3999000,
            'normal_price' => 5540000,
            'stock' => 6,
        ]);
        // Tambahkan produk lainnya dengan cara yang sama
    }
}

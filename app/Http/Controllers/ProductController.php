<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Contoh data produk (bisa diganti dengan pengambilan data dari database)
        $products = [
            new Product(1, 'Red Sofa', 1999000, 'Cocok untuk Diruang Kerja dan Keluarga diwarnai dengan Warna Alami yaitu Dara', 6),
            new Product(2, 'Grey Sofa', 2986000, 'Cocok untuk Diruang Kerja dan Keluarga diwarnai dengan Warna Alami Abu Abu berbahan Premium dari Luar Negeri', 9),
            new Product(3, 'Green Sofa', 3999000, 'Cocok untuk Diruang Kerja dan Keluarga diwarnai dengan Warna Alami Matcha', 6),
            new Product(4, 'Brazko Table', 1999000, 'Didesain dengan Kayu Jati yang kokoh dari Negara Meksiko membuatnya menjadi meja yang kuat dan tahan air ketika diluar', 4),
            new Product(5, 'Oakwood Table', 2986000, 'Desain yang cocok untuk ruang keluarga dan memiliki banyak tempat penyimpanan untuk Hangout', 8),
            new Product(6, 'Marmer', 3999000, 'Desain yang futuristik dan memiliki daya desain yang seni yang tinggi', 9),
            new Product(7, 'Matador Lamp', 1999000, 'Didesain di Meksiko disaat era Matador', 5),
            new Product(8, 'Leaf Lamp', 2986000, 'Didesain Oleh seniman terkenal Eddy Rushford yang membuat nilai estetika alam sebagai objeknya', 7),
            new Product(9, 'Luxure Lamp', 3999000, 'Dibuat dengan bahan bahan mewah serta emas asli 24k', 9),
        ];
        
        return view('products', ['products' => $products]);
    }
}


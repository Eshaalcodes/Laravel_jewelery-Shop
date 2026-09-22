<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;

class BackupController extends Controller
{
    public function download()
    {
        $backup = [
            'categories' => Category::all(),
            'products' => Product::all(),
            'orders' => Order::with('items')->get(),
            'customers' => User::where('role', 'customer')->get(),
        ];

        $fileName = 'jewelry_cosmetics_backup_' . date('Y-m-d_H-i-s') . '.json';

        return response()->streamDownload(function () use ($backup) {
            echo json_encode(
                $backup,
                JSON_PRETTY_PRINT
            );
        }, $fileName, [
            'Content-Type' => 'application/json',
        ]);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products'; // Asegura que Laravel use la tabla correcta
    protected $primaryKey = 'id'; // Define la clave primaria

    public $timestamps = false; // Desactiva timestamps si no usas created_at/updated_at automáticamente

    protected $fillable = [
        'product_code',
        'product_code2',
        'nameProduct',
        'shortNameProduct',
        'descriptionProduct',
        'priceRetail',
        'priceWoleSale',
        'priceDistribuitor',
        'stock',
        'categoryId',
        'brandId',
        'statusId',
        'dateCreated',
        'dateLastUpdated',
        'uuid',
        'satCode',
        'satCodeUnit',
        'smallImg',
        'Img',
        'youtubeUrl',
        'barcode',
        'stNet_id',
        'boxPieces',
        'min_stock_web',
        'box_price',
        'ImgWebp',
    ];
}

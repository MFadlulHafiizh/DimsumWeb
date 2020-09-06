<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;


class Produk extends Model
{
	public $table = 'menu_item';
	
	protected $fillable = [
		'nama_produk', 'foto', 'harga', 'jumlah_porsi', 'deskripsi', 'harga_reseller'];
}
 ?>
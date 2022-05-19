    <?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','fecha','cantidad','factura'
    ];

    public function cliente(){
        return $this->belongsTo(Cliente::class,'id_cliente');
    }

    use HasFactory;
    public function producto(){
        return $this->belongsTo(Producto::class,'id_producto');
    }

}

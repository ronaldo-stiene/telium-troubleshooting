<?php namespace Model\Customer;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {

    protected $table = 'customer';
    protected $primaryKey = 'customer_id';
    public $timestamps = false;

    public function contract()
    {
        return $this->hasOne('Model\Contract\Contract', 'customer_id', 'customer_id'); // Alteração: 5
    }
}
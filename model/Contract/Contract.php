<?php namespace Model\Contract;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model {

    protected $table = 'contract';
    protected $primaryKey = 'contract_id';
    public $incrementing = false; // Alteração 10
    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo('Model\Customer\Customer', 'customer_id', 'customer_id');
    }

    public function items()
    {
        return $this->hasMany('Model\ContractItems\Item', 'contract_id', 'contract_id');
    }

    public function scopeFields($query)
    {
        return $query->select('contract_id','customer_id','description'); // Alteração: 9
    }
}
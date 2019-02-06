<?php namespace Model\ContractItems;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {

    protected $table = 'contract_items';
    protected $primaryKey = 'contract_item_id';

    public function contract()
    {
        return $this->belongsTo('Model\Contract\Contract', 'contract_id', 'contract_id');
    }
}
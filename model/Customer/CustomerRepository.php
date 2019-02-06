<?php
namespace Model\Customer;

class CustomerRepository
{
    protected $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function get($customer_id,$contract_id)
    {
        return $this->customer->with(['contract' => function ($query) use($contract_id) {
            $query->fields();
            $query->where('contract_id', $contract_id)->first();
        },'contract.items'])->find($customer_id);
    }
}
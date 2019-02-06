<?php

namespace App\Http\Controllers;

class ContractController extends Controller
{
    public function index($contract_id,$customer_id, CustomerRepository $customerRepository)
    {
        $customer = $customerRepository->get($customer_id,$contract_id);
        return view('contract.show', compact('customer'));
    }
}

# Erros

Neste arquivo contém todos os erros corrigidos por mim. Além de documenta-los aqui, também deixei um comentário em cada arquivo alterado, informando onde fiz a alteração. Exemplo:

```
echo "Hello World!" // Alteração: 1
```

## Lista de erros e alterações.

A ordem das alterações é a mesma de cada erro apresentado a mim:

---

1. Sorry, the page you are looking for could not be found.
   - **Descrição:** Defini o paramêtro como opcional, para que pegue o valor definido em `->defaults()`.
   - **Arquivo:** routes/web.php
   - **Linha:** 18
   - **De:** `Route::get('/contract/{customer_id}/{contract_id}', [`
   - **Para:** `Route::get('/contract/{customer_id}/{contract_id?}', [`

---

2. Method App\Http\Controllers\ContractController::show does not exist.
   - **Descrição:** Defini o método informado na classe, que é o utilzado como padrão para listagens.
   - **Arquivo:** routes/web.php
   - **Linha:** 20
   - **De:** `'uses' => 'ContractController@show'`
   - **Para:** `'uses' => 'ContractController@index'`

---

3. Class App\Http\Controllers\CustomerRepository does not exist
   - **Descrição:** Adicionei o use da classe.
   - **Arquivo:** app/Http/Controllers/ContractController.php
   - **Linha:** 5
   - **Inserido:** `use Model\Customer\CustomerRepository;`

-- -

4. Trying to get property 'name' of non-object (View: `path`\resources\views\contract\show.blade.php)
   - **Descrição:** Inverti as propriedades de posição, para o customer_id receber o `1` e contract_id o `LOREN`.
   - **Arquivo:** app/Http/Controllers/ContractController.php
   - **Linha:** 9
   - **De:** `public function index($contract_id,$customer_id, CustomerRepository $customerRepository)`
   - **Para:** `public function index($customer_id, $contract_id, CustomerRepository $customerRepository)`

---

5. Class 'Model\Contract\ContractItem' not found
   - **Descrição:** Coloquei o nome correto da classe.
   - **Arquivo:** model/Customer/Customer.php
   - **Linha:** 13
   - **De:** `return $this->hasOne('Model\Contract\ContractItem', 'customer_id', 'customer_id');`
   - **Para:** `return $this->hasOne('Model\Contract\Contract', 'customer_id', 'customer_id');`

---

6. Undefined variable: current_date (View: `path`\resources\views\contract\show.blade.php)
   - **Descrição:** Inserido o provider `ViewServiceProvider` na configuração.
   - **Arquivo:** config\app.php
   - **Linha:** 162
   - **Inserido:** `App\Providers\ViewServiceProvider::class`

---

7. Undefined variable: current_date (View: `path`\resources\views\contract\show.blade.php)
   - **Descrição:** Substituído a view `home` pela view correta: `show`.
   - **Arquivo:** app\Providers\ViewServiceProvider.php
   - **Linha:** 19
   - **De:** `'contract.home', 'App\Http\View\Composers\CurrentDateComposer'`
   - **Para:** `'contract.show', 'App\Http\View\Composers\CurrentDateComposer'`

---

8. View sem conteúdo.
   - **Descrição:** Colocado o nome correto da seção.
   - **Arquivo:** resources\views\contract\show.blade.php
   - **Linha:** 3
   - **De:** `@section('body')`
   - **Para:** `@section('content')`

---

9. Falta de exibição do contract_id
   - **Descrição:** Inseri o `contract_id` para ser selecionado pela query.
   - **Arquivo:** model\Contract\Contract.php
   - **Linha:** 23 (Após a alteração 10, se tornou a linha 24)
   - **De:** `return $query->select('customer_id','description');`
   - **Para:** `return $query->select('contract_id','customer_id','description');`

---

10. Exibição errada do contract_id
    - **Descrição:** Inseri o atributo que informa que a chave primária não se auto-incrementa.
    - **Arquivo:** model\Contract\Contract.php
    - **Linha:** 9
    - **Inserido:** `public $incrementing = false;`

---

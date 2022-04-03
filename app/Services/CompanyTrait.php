<?php
    
namespace App\Services;


trait CompanyTrait
{
    public function getCompanyData()
    {
        return (object) [
            'company' => 'MERCIA ALVES DA SILVA VELAME EPP',
            'slogan' => 'UNIONLUX',
            'phone' => '(71) 3508-4527',
            'whatsapp' => '(71) 98302-5891',
            'address' => 'Rua Leonardo R. da Silva, 257',
            'complement' => 'Ed. Empresarial Multiplus, sala 308',
            'district' => 'Pitangueiras',
            'city' => 'Lauro de Freitas',
            'state' => 'Ba',
            'zip_code' => '42701-420',
            'document' => '33.299.557/0001-24',
            'email' => 'vendas@unionlux.com.br',
        ];
    }


    
}
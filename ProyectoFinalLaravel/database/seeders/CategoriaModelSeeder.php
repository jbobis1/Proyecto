<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CategoriaModel;

class CategoriaModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            Product::create([
                'tipo' => 'Monitor',
                'peso' => '25',
                'marca' => 'LG',
                

                 ]);
    
                 Product::create([
                    'tipo' => 'movil',
                    'peso' => '25',
                    'marca' => 'LG',
                    
    
                     ]);

                     Product::create([
                        'tipo' => 'movil',
                        'peso' => '25',
                        'marca' => 'sanguns',
                        
        
                         ]);
                         Product::create([
                            'tipo' => 'raton',
                            'peso' => '25',
                            'marca' => 'razers',
                            
            
                             ]);
                             Product::create([
                                'tipo' => 'teclado',
                                'peso' => '25',
                                'marca' => 'LG',
                                
                
                                 ]);
    }
}

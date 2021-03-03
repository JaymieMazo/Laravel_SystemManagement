<?php

use Illuminate\Database\Seeder;
use App\department;


class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        department::insert(array(
                            array('department_name'=>'ACCOUNTING' ,
                             'created_at'=> Date('Y-m-d H:m:s'), 
                             'updated_at'=> Date('Y-m-d H:m:s'), 
                             'updated_by'=> '34782'
                                    ) , 
                            array('department_name'=>'ADMINISTRATION' ,
                             'created_at'=> Date('Y-m-d H:m:s'), 
                             'updated_at'=> Date('Y-m-d H:m:s'), 
                             'updated_by'=> '34782'
                            )   ,
                            array('department_name'=>'CAD DESIGN 1' ,
                            'created_at'=> Date('Y-m-d H:m:s'), 
                            'updated_at'=> Date('Y-m-d H:m:s'), 
                            'updated_by'=> '34782'
                            ),
                            array('department_name'=>'CAD DESIGN 2' ,
                            'created_at'=> Date('Y-m-d H:m:s'), 
                            'updated_at'=> Date('Y-m-d H:m:s'), 
                            'updated_by'=> '34782'
                            ),
                            array('department_name'=>'DENKI' ,
                            'created_at'=> Date('Y-m-d H:m:s'), 
                            'updated_at'=> Date('Y-m-d H:m:s'), 
                            'updated_by'=> '34782'
                                ),
                           array('department_name'=>'ENGINEERING' ,
                            'created_at'=> Date('Y-m-d H:m:s'), 
                            'updated_at'=> Date('Y-m-d H:m:s'), 
                            'updated_by'=> '34782'
                            ),
                            array('department_name'=>'ESTIMATION' ,
                            'created_at'=> Date('Y-ms-d H:m:s'), 
                            'updated_at'=> Date('Y-m-d H:m:s'), 
                            'updated_by'=> '34782'
                            ),
                            array('department_name'=>'EXTERIOR' ,
                            'created_at'=> Date('Y-m-d H:m:s'), 
                            'updated_at'=> Date('Y-m-d H:m:s'), 
                            'updated_by'=> '34782'
                            ),
                            array('department_name'=>'FRAMESD' ,
                            'created_at'=> Date('Y-m-d H:m:s'), 
                            'updated_at'=> Date('Y-m-d H:m:s'), 
                            'updated_by'=> '34782'
                            ),
                            array('department_name'=>'FSE' ,
                            'created_at'=> Date('Y-m-d H:m:s'), 
                            'updated_at'=> Date('Y-m-d H:m:s'), 
                            'updated_by'=> '34782'
                            ),
                            array('department_name'=>'GPC' ,
                            'created_at'=> Date('Y-m-d H:m:s'), 
                            'updated_at'=> Date('Y-m-d H:m:s'), 
                            'updated_by'=> '34782'
                            ),
                            array('department_name'=>'HACCHU' ,
                            'created_at'=> Date('Y-m-d H:m:s'), 
                            'updated_at'=> Date('Y-m-d H:m:s'), 
                            'updated_by'=> '34782'
                            ),
                            array('department_name'=>'HOUSE PRESENTATION' ,
                            'created_at'=> Date('Y-m-d H:m:s'), 
                            'updated_at'=> Date('Y-m-d H:m:s'), 
                            'updated_by'=> '34782'
                            ),
                            array('department_name'=>'IQA' ,
                            'created_at'=> Date('Y-m-d H:m:s'), 
                            'updated_at'=> Date('Y-m-d H:m:s'), 
                            'updated_by'=> '34782'
                            ),
                            array('department_name'=>'LOGISTICS' ,
                            'created_at'=> Date('Y-m-d H:m:s'), 
                            'updated_at'=> Date('Y-m-d H:m:s'), 
                            'updated_by'=> '34782'
                            ),
                            array('department_name'=>'ORIGINAL HIROI' ,
                            'created_at'=> Date('Y-m-d H:m:s'), 
                            'updated_at'=> Date('Y-m-d H:m:s'), 
                            'updated_by'=> '34782'
                            ),
                            array('department_name'=>'PANEL ASSEMBLY' ,
                            'created_at'=> Date('Y-m-d H:m:s'), 
                            'updated_at'=> Date('Y-m-d H:m:s'), 
                            'updated_by'=> '34782'
                            ),
                            array('department_name'=>'PIPING' ,
                            'created_at'=> Date('Y-m-d H:m:s'), 
                            'updated_at'=> Date('Y-m-d H:m:s'), 
                            'updated_by'=> '34782'
                            ),
                            array('department_name'=>'PLAN APPLICATION' ,
                            'created_at'=> Date('Y-m-d H:m:s'), 
                            'updated_at'=> Date('Y-m-d H:m:s'), 
                            'updated_by'=> '34782'
                            ),
                            array('department_name'=>'QA' ,
                            'created_at'=> Date('Y-m-d H:m:s'), 
                            'updated_at'=> Date('Y-m-d H:m:s'), 
                            'updated_by'=> '34782'
                            ),
                            array('department_name'=>'R&D' ,
                            'created_at'=> Date('Y-m-d H:m:s'), 
                            'updated_at'=> Date('Y-m-d H:m:s'), 
                            'updated_by'=> '34782'
                            ),
                            array('department_name'=>'SECURITY' ,
                            'created_at'=> Date('Y-m-d H:m:s'), 
                            'updated_at'=> Date('Y-m-d H:m:s'), 
                            'updated_by'=> '34782'
                            ),
                            array('department_name'=>'STRUCTURAL CALCULATION 1' ,
                            'created_at'=> Date('Y-m-d H:m:s'), 
                            'updated_at'=> Date('Y-m-d H:m:s'), 
                            'updated_by'=> '34782'
                            ),

                            array('department_name'=>'STRUCTURAL CALCULATION 2' ,
                            'created_at'=> Date('Y-m-d H:m:s'), 
                            'updated_at'=> Date('Y-m-d H:m:s'), 
                            'updated_by'=> '34782'
                            ),
                            array('department_name'=>'STRUCTURAL  PANEL' ,
                            'created_at'=> Date('Y-m-d H:m:s'), 
                            'updated_at'=> Date('Y-m-d H:m:s'), 
                            'updated_by'=> '34782'
                            ),
                            array('department_name'=>'TECHNICAL AND SUPPORT' ,
                            'created_at'=> Date('Y-m-d H:m:s'), 
                            'updated_at'=> Date('Y-m-d H:m:s'), 
                            'updated_by'=> '34782'
                            ),
                            array('department_name'=>'UNIT WIRING' ,
                            'created_at'=> Date('Y-m-d H:m:s'), 
                            'updated_at'=> Date('Y-m-d H:m:s'), 
                            'updated_by'=> '34782'
                            )
                            )             
                            );
                
    }
}

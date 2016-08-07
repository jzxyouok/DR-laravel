<?php

use Illuminate\Database\Seeder;

class ArSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //数据填充
        $data=[];
        for($i=0;$i<100;$i++){
        	$temp['browse']=rand(1,5);
        	$temp['app']=rand(1,5);
        	$temp['sales']=rand(1,5);
        	$temp['number']=rand(1,5);
        	$temp['size']=rand(1,1);
        	$temp['color']=str_random(6);
        	$temp['only']=str_random(2);
        	$temp['cut']=str_random(1,5);
        	$temp['pic']='1.jpg';
        	$temp['name']=str_random(1,5);
        	$temp['style']=str_random(1);
        	$temp['display']=1;
        	$data[]=$temp;	
        }
        \DB::table('thing')->insert($data);
    }
}

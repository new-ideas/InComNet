<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\Category;
class CategorySubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories =   Category::where('parent_id',0)->get();
        foreach($categories as $cat) {

            for ($i=1;$i<=2;$i++) {

                Category::create([
                    'user_id' => 1,
                    'parent_id' => $cat->id,
                    'name' => $cat->name . ' ' . $i,
                    'alias' => $cat->alias . '-' . $i,
                    'status' => 1
                ]);
            }
        }
    }
}

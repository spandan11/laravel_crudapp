<?php

namespace App\Http\Controllers\Inventory;

use App\Helpers\Alert;
use App\Http\Controllers\Controller;
use App\Modules\Inventory\Entity\Category;

class CategoryController extends Controller
{
    public function Add(){
        return view("inventory.category.add");
    }

    public function AddPost(){

        $name=request("name");
        $code=request("code");

        $category=new Category();
        $category->name=$name;
        $category->code=$code;
        $category->save();
        
        return redirect("/inventory/category");
    }


    public function Index(){
        $data=category::orderBy("id")->get();
        return view("inventory.category.index",[
            "categoryList"=>$data
        ]);
    }

    public function Edit(){
        $id=request("id");
        $category=category::findOrFail($id);
        return view("inventory.category.edit",[
            'category'=>$category
        ]);
    }

    public function EditPost(){

        $id=request("id");
        $name=request("name");
        $code=request("code");

        $category=category::findOrFail($id);

        $category->name=$name;
        $category->code=$code;
        $category->save();
        
        return redirect("/inventory/category");
    }

    public function Delete(){
        $id=request("id");
        $category=Category::findOrFail($id);
        $category->delete();
        
        Alert::SetSuccessMessage("Category Deleted");
        
        return redirect("/inventory/category");
    }

    public function Search(){
        $keyword=request("keyword");
        $data=category::orderBy("name")->where('name', 'like', '%'.$keyword.'%')->get();
        return view("inventory.category.search",[
            "searchList"=>$data
        ]);
    }
}













// public function Edit($id){
//     $data=category::findOrFail($id);
//     return view("inventory.category.edit",[
//         "categoryList"=>$data
//     ]);
// }

// public function Update(){
//     $category =new Category();
//     $category->id=request("id");
//     $category->name=request("name");
//     $category->code=request("code");
//     $category->save();
//     return redirect("/inventory/category");
// }
<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\AdminModel\GroupModel;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class HomepageController extends Controller
{
    public function index(Request $request){

        if($request->ajax()){
            $groups = GroupModel::get();
            //dd($groups);
            return DataTables::of($groups)
            ->editColumn('id', function ($group) {
                return $group->id;
            })
            ->editColumn('name', function ($group) {

                return $group->name;
            })
            ->editColumn('slug', function ($group) {
                return $group->slug;
            })
            ->addColumn('action', function ($group) {
                $routeDestroy = "'" . route('group.destroy', $group->slug) . "'";
                $route_edit =  '<a href="'. route('group.edit', $group->slug) .'" class="badge bg-gradient-secondary"><i class="fas fa-edit"></i></a>';

                $route_delete = '<a href="javascript:void(0)" class="badge bg-gradient-danger" onclick="deleteItem('. $routeDestroy .')"><i class="fas fa-trash"></i></a>';
                return $route_edit . '&nbsp' . $route_delete;
            })

            ->rawColumns(['id','name','slug','action'])
            ->make();
        }
        return view('homepage');
    }
    public function check(){
        return view('form_check');
    }
}

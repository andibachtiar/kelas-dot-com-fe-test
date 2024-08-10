<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Course;
use App\Models\Content;
use App\Models\Category;
use App\Models\Subscription;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        $contents = Content::all();
        $subscriptions = Subscription::all();
        $course_categories = Category::get();

        return view("home", compact("clients", "contents", "subscriptions", "course_categories"));
    }

    function getCourses(Request $request, string $category_id) {
        $perPage = 4;
        $courses = Course::where("category_id", $category_id)
            ->when($request->page, function($query) use ($request, $perPage) {
                $offset = $request->page - 1;
                $query->offset($perPage * $offset);
            })
            ->limit($perPage)
            ->get();
        $totalData = Course::where("category_id", $category_id)->count();

        return response()->json([
            "data" => $courses,
            "paginate" => ceil($totalData / $perPage),
        ]);
    }
}

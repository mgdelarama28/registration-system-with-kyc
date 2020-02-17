<?php

namespace App\Http\Controllers\Admin;

use \Spatie\Activitylog\Models\Activity;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActivityLogController extends Controller
{
    public function index()
    {
    	$activities = Activity::all();

    	return view('admin.pages.activity_logs', [
    		'activities' => $activities,
    	]);
    }
}

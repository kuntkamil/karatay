<?php

namespace App\Http\Controllers;

use App\Models\Department;

class DepartmentController extends Controller
{
    public function show(string $mudurluk)
    {
        $department = Department::where('slug', $mudurluk)
            ->where('is_active', true)
            ->firstOrFail();

        $projects = $department->projects()
            ->where('is_active', true)
            ->orderByDesc('is_featured')
            ->orderByDesc('id')
            ->take(8)
            ->get();

        return view('departments.show', [
            'department' => $department,
            'projects' => $projects,
        ]);
    }
}




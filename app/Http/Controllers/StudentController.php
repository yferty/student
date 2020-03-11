<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Services\StudentService;

class StudentController extends Controller
{
    public function rating()
    {
        return (new StudentService)
            ->rating();
    }

    public function create(StudentRequest $request)
    {
        $data = $request->validated();
        return (new StudentService)
            ->create($data);
    }

    public function update(StudentRequest $request, $id)
    {
        $data = $request->validated();
        return (new StudentService)
            ->update($data, $id);
    }

    public function delete($id) // мягкое удаление
    {
        return (new StudentService)
            ->delete($id);
    }
}

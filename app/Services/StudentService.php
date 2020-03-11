<?php


namespace App\Services;

use App\Http\Resources\StudentResource;
use App\Student;
use Illuminate\Support\Facades\Response;

class StudentService
{
    public function rating()
    {
        return StudentResource::collection(Student::where('status', Student::ACTIVE)->get());
    }

    public function create($data)
    {
        $data['status'] = 1;
        $data['rating'] = 0;
        $student = Student::create($data);

        return $student;
    }

    public function update($data, $id)
    {
        $student = Student::find($id);

        if (!$student) {
            return Response::json([
                'message' => 'student id ' . $id . ', not exists'
            ], 404);
        }

        $student->name = $data['name'];
        $student->surname = $data['surname'];
        $student->email = $data['email'];
        $student->save();

        return $student;
    }

    public function delete($id)
    {
        $student = Student::find($id);

        if (!$student) {
            return Response::json([
                'message' => 'student ' . $id . ', not exists'
            ], 404);
        }

        if($student->delete()) {
            return Response::json([
                'status' => 'success',
                'message' => 'student ' . $student->name . ' ' . $student->surname . ' deleted'
            ], 200);
        }
    }
}

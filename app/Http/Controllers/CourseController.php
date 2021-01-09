<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Course;

class CourseController extends Controller
{
    private $course;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Course $course)
    {
        $this->course = $course;
    }

    public function index()
    {
        return $this->course->paginate(2);
    }

    public function show($course)
    {
        return $this->course->findOrFail($course);
    }

    public function store(Request $request)
    {
        $this->course->create($request->all());

        // Mensagem de criação
        return response()->json(['data' => [
                                    'message' => 'Curso criado com sucesso!']
                                ]);
    }

    public function update($course, Request $request)
    {
        $course = $this->course->find($course);
        $course->update($request->all());

        // Mensagem de criação
        return response()->json(['data' => [
                                    'message' => 'Curso atualizado com sucesso!']
                                ]);
    }

    public function destroy($course)
    {
        $course = $this->course->find($course);
        $course->delete();

        // Mensagem de criação
        return response()->json(['data' => [
                                    'message' => 'Curso deletado com sucesso!']
                                ]);
    }
}

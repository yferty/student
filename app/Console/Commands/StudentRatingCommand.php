<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Student;
use Illuminate\Support\Facades\Log;

class StudentRatingCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'student:rating-up';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Обновляет средний балл студента'; // поставить в крон

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $students = Student::where('status', Student::ACTIVE)->get();

        foreach ($students as $student) {
            $score = $student->semester1 + $student->semester2 + $student->semester3;
            $rating = $score / 3;

            $student->rating = round($rating);
            $student->save();
        }
        Log::info('Student rating update', ['students' => $students]);
    }
}

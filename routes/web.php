<?php

use App\Http\Controllers\Admin\ResumeController;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[ResumeController::class, 'index'])->name('resume');

Route::get('/download-resume', function () {
    $data = [
        'name' => 'Hardik Kachhad',
        'email' => 'hardik@example.com',
        'phone' => '+91 9876543210',
        'website' => 'www.hardikportfolio.com',
        'summary' => 'Highly skilled web developer with expertise in PHP Laravel, JavaScript, and modern front-end frameworks.',
        'experience' => [
            ['role' => 'PHP Laravel Developer', 'company' => 'XYZ Tech', 'years' => '2022 - Present'],
            ['role' => 'Web Developer', 'company' => 'ABC Solutions', 'years' => '2020 - 2022'],
        ],
        'education' => 'Bachelor of Computer Applications (BCA) - XYZ University (2017 - 2020)',
        'skills' => ['PHP Laravel', 'HTML, CSS, Bootstrap', 'JavaScript, jQuery', 'MySQL, Database Management'],
    ];

    $pdf = Pdf::loadView('resume-pdf', $data);
    return $pdf->download('Hardik_Kachhad_Resume.pdf');
})->name('resume.download');
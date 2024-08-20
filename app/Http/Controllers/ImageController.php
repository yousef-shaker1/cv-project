<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Intervention\Image\Facades\Image; 
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function showForm(){
        return view('cv-form');
    }
    public function generateCV(Request $request)
    {
        // البيانات الواردة من النموذج
        $data = $request->all();
        //ارسال skills array
        if (isset($data['skills'])) {
            $data['skills'] = array_map('trim', explode(',', $data['skills']));
        }
        //تحويل الشهر من رقم اللي اسم
        if(isset($data["start_date_month"])){
            $monthNumber = intval($data['start_date_month']);
            $date = Carbon::createFromFormat('!m', $monthNumber);
            $monthName = $date->format('F');
            $data['start_date_month'] = $monthName;
            $monthNumber = $data['start_date_month'];
        $monthName = '';
        if ($monthNumber) {
            $date = DateTime::createFromFormat('!m', $monthNumber);
            $monthName = $date ? $date->format('F') : '';
        }
        }
        //لما يكون في check يعمل التاريخ readonly و يبعت كلمة present مكان التاريخ
        if(isset($data['currently_working'])){
            $data['end_date_month'] = '';
            $data['end_date_year'] = 'present';
        } elseif(isset($data["start_date_month"])) {
            $monthNumber = intval($data['end_date_month']);
            $date = Carbon::createFromFormat('!m', $monthNumber);
            $monthName = $date->format('F');
            $data['end_date_month'] = $monthName;
        }
        //تحويل الشهر من رقم اللي اسم
        if (isset($data['start_date_month2'])) {
            $monthNumber = intval($data['start_date_month2']);
            $data['start_date_month2'] = Carbon::create()->month($monthNumber)->format('F');
        }
        if (isset($data['end_date_month2'])) {
            $monthNumber = intval($data['end_date_month2']);
            $data['end_date_month2'] = Carbon::create()->month($monthNumber)->format('F');
        }
        if (isset($data['start_date_month3'])) {
            $monthNumber = intval($data['start_date_month3']);
            $data['start_date_month3'] = Carbon::create()->month($monthNumber)->format('F');
        }
        if (isset($data['end_date_month3'])) {
            $monthNumber = intval($data['end_date_month3']);
            $data['end_date_month3'] = Carbon::create()->month($monthNumber)->format('F');
        }
        //تحويل الشهر من رقم الي اسم
        if(isset($data["start_date_month_university"])){
            $monthNumber = intval($data['start_date_month_university']);
            $date = Carbon::createFromFormat('!m', $monthNumber);
            $monthName = $date->format('F');
            $data['start_date_month_university'] = $monthName;
            $monthNumber = $data['start_date_month'];
        $monthName = '';
        if ($monthNumber) {
            $date = DateTime::createFromFormat('!m', $monthNumber);
            $monthName = $date ? $date->format('F') : '';
        }
        }
        //university_data لو المستخدم سة طلب يبوعت كلمة I am still a student
        if(isset($data['currently_working_university'])){
            $data['end_date_month_university'] = 'I am still a student';
            $data['end_date_year_university'] = '';
        } elseif(isset($data["start_date_month_university"])) {
            $monthNumber = intval($data['end_date_month_university']);
            $date = Carbon::createFromFormat('!m', $monthNumber);
            $monthName = $date->format('F');
            $data['end_date_month_university'] = $monthName;
        }

        

        // تحقق من وجود المجلد وأنشئه إذا لزم الأمر
        $pdfDirectory = storage_path('app/public/cvs');
        if (!is_dir($pdfDirectory)) {
            mkdir($pdfDirectory, 0775, true);
        }

        if($request->selectedTheme =='cv1'){
            $pdf = Pdf::loadView('cv-pdf', $data);
        } elseif($request->selectedTheme =='cv2') {
            $pdf = Pdf::loadView('cv2-pdf', $data);
        } elseif($request->selectedTheme =='cv3') {
            $pdf = Pdf::loadView('cv3-pdf', $data);
        } elseif($request->selectedTheme =='cv4') {
            $pdf = Pdf::loadView('cv4-pdf', $data);
        }

        // إعداد بيانات السيرة الذاتية
        
        // تحديد اسم الملف وتخزين PDF
        $filename = 'cv_' . time() . '.pdf';
        $path = 'public/cvs/' . $filename;
        $pdf->save(storage_path('app/' . $path));

        // إنشاء رابط PDF
        $pdfUrl = Storage::url($path);

        // عرض النتائج
        return view('cv-result', compact('pdfUrl'));
    }
}

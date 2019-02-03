<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 03/02/2019
 * Time: 02:06
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactFormSubmission;

class ContactFormSubmissionsController extends Controller
{

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {

    }

    public function show()
    {
        $submissions = ContactFormSubmission::orderBy('created_at','DESC')->paginate(25);
        return view('admin.contact-form-submissions')->with([
            'submissions' => $submissions
        ]);
    }
}

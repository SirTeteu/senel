<?php

namespace App\Http\Controllers;

use App\Notifications\Contact;
use Illuminate\Http\Request;
use App\User;

class ContactController extends Controller
{

	public function sendMail(Request $message) {
		$user = User::find(1);
		$user->notify(new Contact($message));
		return response()->json(['success'=> 'E-mail enviado com sucesso!']);
	}
	
}

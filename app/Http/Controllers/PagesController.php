<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

use Mail;

class PagesController extends Controller{

	public function getIndex(){
		$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
		return view('pages.welcome')->withPosts($posts);
	}

	public function getAbout(){
		$first = "Bhupesh";
		$last = "Shrestha";
		$fullname = $first . " " . $last;
		$email = "bhupesh.stha@gmail.com";
		return view('pages.about')->withFullname($fullname)->withEmail($email);
	}

	public function getContact(){
		return view('pages.contact');
	}

	public function postContact($request){
		$this->validate($request, array(
			'email' => 'required|email',
			'subject' => 'min:3',
			'message' => 'required|min:10'
			));

		$data = array(
				'email' => $request->email,
				'subject' => $request->subject,
				'bodyMessage' => $request->message
			);

		Mail::send('emails.contact', $data, function($message) use ($data){
			$message->from($data['email']);
			$message->to('invisible.horn@gmail.com');
			$message->subject($data['subject']);
		});
	}
}
<?php
    namespace creaBuenosAires\Http\Controllers;
    use Illuminate\Http\Request;

    class PageController extends Controller {
	    public function __construct() {
            $this->middleware('auth', ['except' => 'index']);
        }

	    public function index() {
	        return view('bienvenida');
	    }

	    public function home() {
	        return view('home');
	    }
	}

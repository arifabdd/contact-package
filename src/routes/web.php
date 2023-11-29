<?php

use \Arifabdd\Contact\Http\Controllers\ContactController;

Route::get('contact',[ContactController::class,'index']);

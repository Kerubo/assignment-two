<?php
Route::get('/',function () {
	return view::make(layout.masters);
});
<?php

use App\Http\Controllers\Api\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::apiResource('employees', EmployeeController::class);
/*
This single line automatically creates:
Method	URL	                    Action
----------------------------------------
GET	    /api/employees	        index
POST	/api/employees	        store
GET	    /api/employees/{id}	    show
PUT	    /api/employees/{id}	    update
PATCH	/api/employees/{id}	    update
DELETE	/api/employees/{id}	    destroy
*/
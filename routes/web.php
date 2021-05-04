<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
        return view('index');
    })->name('page');
    
    Route::get('/home', function () {
        return view('index');
    })->name('page');

Route::get('/index', function () {
    return view('index');
})->name('page');

Route::get('/doctor-dashboard', function () {
    return view('doctor-dashboard');
});
Route::get('/appointments', function () {
    return view('appointments');
});
Route::get('/schedule-timings', function () {
    return view('schedule-timings');
});
Route::get('/my-patients', function () {
    return view('my-patients');
});
Route::get('/patient-profile', function () {
    return view('patient-profile');
});
Route::get('/chat-doctor', function () {
    return view('chat-doctor');
})->name('chat-doctor');
Route::get('/invoices', function () {
    return view('invoices');
});
Route::get('/doctor-profile-settings', function () {
    return view('doctor-profile-settings');
});
Route::get('/reviews', function () {
    return view('reviews');
});
Route::get('/doctor-register', function () {
    return view('doctor-register');
})->name('doctor-register');
Route::get('/map-grid', function () {
    return view('map-grid');
})->name('map-grid');
Route::get('/map-list', function () {
    return view('map-list');
})->name('map-list');
Route::get('/search', function () {
    return view('search');
})->name('search');
Route::get('/doctor-profile', function () {
    return view('doctor-profile');
})->name('doctor-profile');
Route::get('/booking', function () {
    return view('booking');
})->name('booking');
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');
Route::get('/booking-success', function () {
    return view('booking-success');
})->name('booking-success');
Route::get('/patient-dashboard', function () {
    return view('patient-dashboard');
})->name('patient-dashboard');
Route::get('/favourites', function () {
    return view('favourites');
})->name('favourites');
Route::get('/change-password', function () {
    return view('change-password');
})->name('change-password');
Route::get('/profile-settings', function () {
    return view('profile-settings');
})->name('profile-settings');
Route::get('/chat', function () {
    return view('chat');
})->name('chat');
Route::get('/voice-call', function () {
    return view('voice-call');
})->name('voice-call');
Route::get('/video-call', function () {
    return view('video-call');
})->name('video-call');
Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');
Route::get('/components', function () {
    return view('components');
})->name('components');
Route::get('/invoice-view', function () {
    return view('invoice-view');
})->name('invoice-view');
Route::get('/blank-page', function () {
    return view('blank-page');
})->name('blank-page');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('forgot-password');
Route::get('/blog-list', function () {
    return view('blog-list');
})->name('blog-list');
Route::get('/blog-grid', function () {
    return view('blog-grid');
})->name('blog-grid');
Route::get('/blog-details', function () {
    return view('blog-details');
})->name('blog-details');
Route::get('/add-billing', function () {
    return view('add-billing');
});
Route::get('/add-prescription', function () {
    return view('add-prescription');
});
Route::get('/edit-billing', function () {
    return view('edit-billing');
});
Route::get('/edit-prescription', function () {
    return view('edit-prescription');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');
Route::get('/social-media', function () {
    return view('social-media');
})->name('social-media');
Route::get('/term-condition', function () {
    return view('term-condition');
})->name('term-condition');
Route::get('/doctor-change-password', function () {
    return view('doctor-change-password');
});
/*****************ADMIN ROUTES*******************/
Route::Group(['prefix' => 'admin'], function () { 
    Route::get('/index_admin', function () {
        return view('admin.index_admin');
        })->name('pagee');
        Route::get('/appointment-list', function () {
        return view('admin.appointment-list');
        })->name('appointment-list');
        Route::get('/specialities', function () {
        return view('admin.specialities');
        })->name('specialities');
        Route::get('/doctor-list', function () {
        return view('admin.doctor-list');
        })->name('doctor-list');
        Route::get('/patient-list', function () {
        return view('admin.patient-list');
        })->name('patient-list');
        Route::get('/reviews', function () {
        return view('admin.reviews');
        })->name('reviews');
        Route::get('/transactions-list', function () {
        return view('admin.transactions-list');
        })->name('transactions-list');
        Route::get('/settings', function () {
        return view('admin.settings');
        })->name('settings');
        Route::get('/invoice-report', function () {
        return view('admin.invoice-report');
        })->name('invoice-report');
        Route::get('/profile', function () {
        return view('admin.profile');
        })->name('profile');
        Route::get('/login', function () {
        return view('admin.login');
        })->name('login');
        Route::get('/register', function () {
        return view('admin.register');
        })->name('register');
        Route::get('/forgot-password', function () {
        return view('admin.forgot-password');
        })->name('forgot-password');
        Route::get('/lock-screen', function () {
        return view('admin.lock-screen');
        })->name('lock-screen');
        Route::get('/error-404', function () {
        return view('admin.error-404');
        })->name('error-404');
        Route::get('/error-500', function () {
        return view('admin.error-500');
        })->name('error-500');
        Route::get('/blank-page', function () {
        return view('admin.blank-page');
        })->name('blank-page');
        Route::get('/components', function () {
        return view('admin.components');
        })->name('components');
        Route::get('/form-basic-inputs', function () {
        return view('admin.form-basic-inputs');
        })->name('form-basic');
        Route::get('/form-input-groups', function () {
        return view('admin.form-input-groups');
        })->name('form-inputs');
        Route::get('/form-horizontal', function () {
        return view('admin.form-horizontal');
        })->name('form-horizontal');
        Route::get('/form-vertical', function () {
        return view('admin.form-vertical');
        })->name('form-vertical');
        Route::get('/form-mask', function () {
        return view('admin.form-mask');
        })->name('form-mask');
        Route::get('/form-validation', function () {
        return view('admin.form-validation');
        })->name('form-validation');
        Route::get('/tables-basic', function () {
        return view('admin.tables-basic');
        })->name('tables-basic');
        Route::get('/data-tables', function () {
        return view('admin.data-tables');
        })->name('data-tables');
        Route::get('/invoice', function () {
        return view('invoice');
        })->name('invoice');
        Route::get('/calendar', function () {
        return view('admin.calendar');
        })->name('calendar');
    });






/********************ADMIN ROUTES END******************************/






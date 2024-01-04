<?php

use Illuminate\Support\Facades\Route;
use Corcel\Model\Post; 
use App\Http\Controllers\FrameController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/



Route::get('/', function () { return view('welcome'); });
// serve for PWA
Route::get('/manifest.json',  [\App\Http\Controllers\ManifestController::class, 'index'])->name('manifest');
Route::get('/service-worker.js', [\App\Http\Controllers\ServiceWorkerController::class, 'index']);

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),  'verified'])->group(function () {

     Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');


});
    

    // if( Module::has('ManagerChannel')){
    //     // Route::get('/channel-manager', ['\Modules\ManagerChannel\Http\Controllers\ManagerChannelController','index'])
    //     // ->name('channel-manager');
    // }
    // if( Module::has('ManagerAsset')){
    //     // Route::get('/asset-manager', ['\Modules\App\Http\Controllers\AppController','index'])
    //     // ->name('asset-manager');
    // }
    // if( Module::has('ManagerMarketing')){
    //     // Route::get('/marketing-manager', ['\Modules\App\Http\Controllers\AppController','index'])->name('marketing-manager');
    // }
    // if( Module::has('ManagerIntegration')){
    //     Route::get('/integrations-manager', ['\Modules\App\Http\Controllers\AppController','index'])->name('integrations-manager');
    // }
 
    //     Route::get('/harvest', ['\Modules\MicroserviceHarvest\Http\Controllers\MicroserviceHarvestController','index'])->name('harvest');
 


//     Route::controller(PocketAgentController::class)->prefix('pocketagent')->group(function () {
//         // Route::controller(DavinciController::class)->prefix('davinci')->group(function () {
//             Route::get('/', 'dashboard')->name('pocketagent-dashboard');    
    
//     });
//     Route::controller(BloomController::class)->prefix('bloom')->group(function () {
//         // Route::controller(DavinciController::class)->prefix('davinci')->group(function () {
//             Route::get('/', 'dashboard')->name('bloom-dashboard');
    
//         // });
    
    
    
//     });

//     Route::controller(FusionController::class)->prefix('fusion')->group(function () {
//         // Route::controller(DavinciController::class)->prefix('davinci')->group(function () {
//             Route::get('/', 'dashboard')->name('fusion-dashboard');
    
//         // });
    
    
    
//     });

//     Route::controller(DavinciController::class)->prefix('davinci')->group(function () {
//         // Route::controller(DavinciController::class)->prefix('davinci')->group(function () {
//             Route::get('/', 'dashboard')->name('davinci-dashboard');
    
//         // });
    
    
    
//     });
//     Route::controller(BioController::class)->prefix('bio')->group(function () {
//         // Route::controller(DavinciController::class)->prefix('davinci')->group(function () {
//             Route::get('/', 'dashboard')->name('bio-dashboard');
    
//         // });
    
    
    
//     });
//     Route::controller(MailController::class)->prefix('mail')->group(function () {
//         // Route::controller(DavinciController::class)->prefix('davinci')->group(function () {
//             Route::get('/', 'dashboard')->name('mail-dashboard');
    
//         // });
    
    
    
//     });
//     Route::controller(ConnectController::class)->prefix('connect')->group(function () {
//         // Route::controller(DavinciController::class)->prefix('davinci')->group(function () {
//             Route::get('/', 'dashboard')->name('connect-dashboard');
    
//         // });
    
    
    
//     });


//     Route::controller(ArchitectController::class)->prefix('architect')->group(function () {
//         // Route::controller(DavinciController::class)->prefix('davinci')->group(function () {
//             Route::get('/', 'dashboard')->name('architect-dashboard');
    
//         // });
    
    
    
//     });
//  //   Route::get('/file-manager', '\App\Http\Controllers\TestController@index');
//  Route::get('/test', '\App\Http\Controllers\TestController@index');
//  // Livewire Jetstream Dash
//  Route::get('/appui', function () {return view('dashboard');})->name('app');
    
// });
   
// // Route::prefix('app')->group(function() {
// //     Route::get('/dashboard', 'AppController@index')->name('app-dashboard');
// // });

// Route::prefix('integrations')->group(function() {
//     Route::get('/{name}', 'AppController@index')->name('integration-dashboard');
// });
//
 // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    // if( Module::has('ManagerBrand')){
    //     Route::get('/brand-manager', ['\Modules\ManagerBrand\Http\Controllers\ManagerBrandController','index'])->name('brand-manager');
    // }

 //   dd($metadata);
    // Route::get('/dashboard', function () {

    //     // $results = Post::find(7)->meta;

    //     // $metadata = [];
    
    //     // foreach ($results as $result) {
    //     //     if ($result['meta_key'] == '_edata' && !empty($result['meta_value'])) {
    //     //         $metadata[$result['meta_key']] = unserialize($result['meta_value']);
    //     //     } else {
    //     //         $metadata[$result['meta_key']] = $result['meta_value'];
    //     //     }
    //     // }

    //     return view('dashboard');
    // })->name('dashboard');
    // Brandflowr dash
 //   Route::get('/dashboard', ['\Modules\MyChannel\Http\Controllers\MyChannelController','index'])->name('dashboard');

    // Route::get('/bloom', ['\Modules\MicroserviceBloom\Http\Controllers\MicroserviceBloomController','index'])->name('bloom');
    // Route::get('/hive', ['\Modules\MicroserviceHive\Http\Controllers\MicroserviceHiveController','index'])->name('hive');
    // Route::get('/vine', ['\Modules\MicroserviceVine\Http\Controllers\MicroserviceVineController','index'])->name('vine');
        // Route::get('/dashboard',[ FrameController::class, 'getUrl'] )->name('dashboard');
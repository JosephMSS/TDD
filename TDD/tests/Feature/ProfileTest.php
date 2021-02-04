<?php

namespace Tests\Feature;

use Illuminate\Contracts\Cache\Store;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
Use Illuminate\Support\Facades\Storage; 
class ProfileTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_photo_require()
    {
    $response=$this->post('profile',['photo'=>'']);
    $response->assertSessionHasErrors('photo');
    }
//     public function test_upload()
//     {   
//         Storage::fake('local');
// $width=720;
// $height=1080;
//         $response = $this->post('/profile', [
//             'photo' => $photo = UploadedFile::fake()->image('avatar.jpg', $width, $height)->size(100)  

//         ]);

//         Storage::disk('local')->assertFileExists("profiles/{$photo->hashName()}");

//         $response->assertRedirect('profile');
//     }
}

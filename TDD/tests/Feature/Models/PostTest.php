<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Post;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_set_name_in_lowercase()
    {
        $post = new Post();
        $post->name = 'Proyecto en php';
        $this->assertEquals('proyecto en php', $post->name);
    }
    public function test_get_slug()
    {
        $post = new Post();
        $post->name = 'Proyecto en php';
        $this->assertEquals('proyecto-en-php', $post->slug);
    }
    public function test_get_href()
    {
        $post=new Post;
        $post->name='Proyecto en PHP';
        $this->assertEquals('blog/proyecto-en-php',$post->href());
    }
}

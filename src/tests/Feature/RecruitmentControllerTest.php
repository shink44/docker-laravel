<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RecruitmentControllerTest extends TestCase
{

    /**
     * @test
     */
    public function getIndexTest()
    {
        $response = $this->get(route('recruitments.index'));

        $response->assertOk();

        $response->assertViewIs('recruitments.index');

        $response->assertViewHas('recruitments');

        $response = $this->get('/recruitment')->assertSee('form');
    }

     /**
     * @test
     */
    public function createTest()
    {
        $response = $this->get(route('recruitments.create', 
        [    
        'model_name' => 'PC',
        'game_mode' => 'バトルロイヤル',
        'rank' => 'カジュアル',
        'purpose' => 'フレンド',
        'applicant' => '1人',
        'game_id' => 'test',
        'discord_id' => 'test',
        'content' => 'test',
       ]));
       $response->assertRedirect('/recruitment');
       
        // 保存したitemがデータベースに存在するか確認。
        $this->assertDatabaseHas('recruitments', [
            'model_name' => 'PC',
            'game_mode' => 'バトルロイヤル',
            'rank' => 'カジュアル',
            'purpose' => 'フレンド',
            'applicant' => '1人',
            'game_id' => 'test',
            'discord_id' => 'test',
            'content' => 'test',
        ]);
    }








}

<?php

namespace App\Admin\Controllers;

use App\Models\Recruitment;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class RecruitmentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'recruitments';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Recruitment());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('user_id', __('User id'));
        $grid->column('model_name', __('Model name'));
        $grid->column('game_mode', __('Game mode'));
        $grid->column('rank', __('Rank'));
        $grid->column('purpose', __('Purpose'));
        $grid->column('game_id', __('Game id'));
        $grid->column('discord_id', __('Discord id'));
        $grid->column('content', __('Content'));
        $grid->column('applicant', __('Applicant'));
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();

        $grid->filter(function($filter) {
            $filter->like('model_name', '機種名');
            $filter->like('game_mode', 'ゲームモード');
            $filter->like('rank', 'マッチング');
            $filter->between('created_at', '登録日')->datetime();
        });

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Recruitment::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('model_name', __('Model name'));
        $show->field('game_mode', __('Game mode'));
        $show->field('rank', __('Rank'));
        $show->field('purpose', __('Purpose'));
        $show->field('game_id', __('Game id'));
        $show->field('discord_id', __('Discord id'));
        $show->field('content', __('Content'));
        $show->field('applicant', __('Applicant'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Recruitment());

        $form->number('user_id', __('User id'))->default(1);
        $form->text('model_name', __('Model name'));
        $form->text('game_mode', __('Game mode'));
        $form->text('rank', __('Rank'));
        $form->text('purpose', __('Purpose'));
        $form->text('game_id', __('Game id'));
        $form->text('discord_id', __('Discord id'));
        $form->textarea('content', __('Content'));
        $form->text('applicant', __('Applicant'));

        return $form;
    }
}

<?php

namespace App\Admin\Controllers;

use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'User';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->column('id', __('Id'))->sortable();;
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('email_verified_at', __('Email verified at'));
        $grid->column('game_id', __('Game id'));
        $grid->column('discord_id', __('Discord id'));
        $grid->column('deleted_flag', __('Deleted flag'));
        $grid->column('created_at', __('Created at'))->sortable();;
        $grid->column('updated_at', __('Updated at'))->sortable();;

        $grid->filter(function($filter) {
            $filter->like('name', 'ユーザー名');
            $filter->like('email', 'メールアドレス');
            $filter->like('game_id', 'ゲームID');
            $filter->like('discord_id', 'DiscordID');
            $filter->equal('deleted_flag', '論理削除')->select(['0' => 'false', '1' => 'true']);
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
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('email_verified_at', __('Email verified at'));
        $show->field('game_id', __('Game id'));
        $show->field('discord_id', __('Discord id'));
        $show->field('deleted_flag', __('Deleted flag'));
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
        $form = new Form(new User());

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->datetime('email_verified_at', __('Email verified at'))->default(date('Y-m-d H:i:s'));
        $form->password('password', __('Password'));
        $form->text('game_id', __('Game id'));
        $form->text('discord_id', __('Discord id'));
        $form->switch('deleted_flag', __('Deleted flag'));

        $form->saving(function (Form $form) {
            if ($form->password && $form->model()->password != $form->password) {
                $form->password = bcrypt($form->password);
            } else {
                $form->password = $form->model()->password;
            }
        });

        return $form;
    }
}

<?php

namespace App\Admin\Controllers;

use App\Models\Article;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ArticleController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Article';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Article());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('title', __('Title'));
        $grid->column('category', __('Category'));
        $grid->column('description', __('Description'))
            ->width(600);;
        $grid->column('photo', __('Photo'))
            ->image('http://127.0.0.1:8000/storage/', 100, 100);
        $grid->column('visible', __('Visible'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('deleted_at', __('Deleted at'));

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
        $show = new Show(Article::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('title', __('Title'));
        $show->field('category', __('Category'));
        $show->field('description', __('Description'));
        $show->field('photo', __('Photo'));
        $show->field('visible', __('Visible'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('deleted_at', __('Deleted at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Article());

        $form->icon('fa-book');
        $form->number('user_id', __('User id'));
        $form->text('title', __('Title'));
        $form->text('category', __('Category'));
        $form->textarea('description', __('Description'));
        $form->image('photo', __('Photo'));
        $form->number('visible', __('Visible'))->default(1);

        return $form;
    }
}

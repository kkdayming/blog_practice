<?php

namespace App\Admin\Controllers;

use App\Models\Taggable;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TaggableController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Taggable';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Taggable());

        $grid->column('tag_id', __('Tag id'));
        $grid->column('taggable_id', __('Taggable id'));
        $grid->column('taggable_type', __('Taggable type'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Taggable::findOrFail($id));

        $show->field('tag_id', __('Tag id'));
        $show->field('taggable_id', __('Taggable id'));
        $show->field('taggable_type', __('Taggable type'));
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
        $form = new Form(new Taggable());

        $form->icon('fa-table');
        $form->number('tag_id', __('Tag id'));
        $form->number('taggable_id', __('Taggable id'));
        $form->text('taggable_type', __('Taggable type'));

        return $form;
    }
}

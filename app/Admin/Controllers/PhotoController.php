<?php

namespace App\Admin\Controllers;

use App\Models\Photo;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PhotoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Photo';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Photo());

        $grid->column('id', __('Id'));
        $grid->column('path', __('Path'));
        $grid->column('imageable_id', __('Imageable id'));
        $grid->column('imageable_type', __('Imageable type'));
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
        $show = new Show(Photo::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('path', __('Path'));
        $show->field('imageable_id', __('Imageable id'));
        $show->field('imageable_type', __('Imageable type'));
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
        $form = new Form(new Photo());

        $form->text('path', __('Path'));
        $form->number('imageable_id', __('Imageable id'));
        $form->text('imageable_type', __('Imageable type'));

        return $form;
    }
}

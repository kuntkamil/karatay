<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TopicRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class TopicCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup(): void
    {
        CRUD::setModel(\App\Models\Topic::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/topics');
        CRUD::setEntityNameStrings('Konu', 'Konular');
    }

    protected function setupListOperation(): void
    {
        CRUD::column('name');
        CRUD::column('slug');
    }

    protected function setupCreateOperation(): void
    {
        CRUD::setValidation(TopicRequest::class);

        CRUD::field('name')->type('text');
        CRUD::addField([
            'name'   => 'slug',
            'type'   => 'slug',
            'target' => 'name',
            'label'  => 'Slug',
        ]);
    }

    protected function setupUpdateOperation(): void
    {
        $this->setupCreateOperation();
    }
}



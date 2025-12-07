<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DepartmentRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class DepartmentCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup(): void
    {
        CRUD::setModel(\App\Models\Department::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/departments');
        CRUD::setEntityNameStrings('Birim', 'Birimler');
    }

    protected function setupListOperation(): void
    {
        CRUD::column('name')->label('Name');
        CRUD::column('slug')->label('Slug');
        CRUD::addColumn([
            'name'  => 'is_active',
            'type'  => 'boolean',
            'label' => 'Active',
        ]);
        CRUD::addColumn([
            'name'  => 'updated_at',
            'type'  => 'datetime',
            'label' => 'Updated',
        ]);
    }

    protected function setupCreateOperation(): void
    {
        CRUD::setValidation(DepartmentRequest::class);

        CRUD::field('name')->type('text')->label('Name');
        CRUD::addField([
            'name'   => 'slug',
            'type'   => 'slug',
            'target' => 'name',
            'label'  => 'Slug',
        ]);
        CRUD::addField([
            'name'  => 'intro_text',
            'type'  => 'ckeditor',
            'label' => 'Intro Text',
        ]);
        CRUD::addField([
            'name'  => 'director_message',
            'type'  => 'ckeditor',
            'label' => 'Director Message',
        ]);
        CRUD::addField([
            'name'  => 'director_name',
            'type'  => 'text',
            'label' => 'Director Name',
        ]);
        CRUD::addField([
            'name'  => 'director_email',
            'type'  => 'email',
            'label' => 'Director Email',
        ]);
        CRUD::addField([
            'name'  => 'director_phone_extension',
            'type'  => 'text',
            'label' => 'Phone Extension',
        ]);
        CRUD::addField([
            'name'  => 'director_image',
            'type'  => 'image',
            'disk'  => 'public',
            'label' => 'Director Image',
        ]);
        CRUD::addField([
            'name'      => 'regulation_pdf',
            'type'      => 'upload',
            'withFiles' => true,
            'disk'      => 'public',
            'label'     => 'Regulation PDF',
        ]);
        CRUD::addField([
            'name'  => 'is_active',
            'type'  => 'checkbox',
            'label' => 'Active',
        ]);
    }

    protected function setupUpdateOperation(): void
    {
        $this->setupCreateOperation();
    }
}



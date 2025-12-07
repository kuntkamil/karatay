<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProjectRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class ProjectCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup(): void
    {
        CRUD::setModel(\App\Models\Project::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/projects');
        CRUD::setEntityNameStrings('Proje', 'Projeler');
    }

    protected function setupListOperation(): void
    {
        CRUD::column('title')->label('Title');
        CRUD::addColumn([
            'name'  => 'department',
            'type'  => 'relationship',
            'label' => 'Department',
        ]);
        CRUD::addColumn([
            'name'  => 'is_featured',
            'type'  => 'boolean',
            'label' => 'Featured',
        ]);
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
        CRUD::setValidation(ProjectRequest::class);

        CRUD::field('title')->type('text')->label('Title');
        CRUD::addField([
            'name'   => 'slug',
            'type'   => 'slug',
            'target' => 'title',
            'label'  => 'Slug',
        ]);
        CRUD::addField([
            'name'  => 'description',
            'type'  => 'ckeditor',
            'label' => 'Description',
        ]);
        CRUD::addField([
            'name'  => 'image_name',
            'type'  => 'image',
            'disk'  => 'public',
            'label' => 'Image',
        ]);
        CRUD::addField([
            'name'  => 'department',
            'type'  => 'relationship',
            'label' => 'Department',
        ]);
        CRUD::addField([
            'name'  => 'is_featured',
            'type'  => 'checkbox',
            'label' => 'Featured',
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



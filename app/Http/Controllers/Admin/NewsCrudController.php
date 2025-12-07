<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\NewsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class NewsCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup(): void
    {
        CRUD::setModel(\App\Models\News::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/news');
        CRUD::setEntityNameStrings('Haber', 'Haberler');
    }

    protected function setupListOperation(): void
    {
        CRUD::column('title');
        CRUD::addColumn([
            'name'  => 'topic',
            'type'  => 'relationship',
            'label' => 'Topic',
        ]);
        CRUD::addColumn([
            'name'  => 'neighborhood',
            'type'  => 'relationship',
            'label' => 'Neighborhood',
        ]);
        CRUD::addColumn([
            'name'  => 'published_at',
            'type'  => 'datetime',
            'label' => 'Published',
        ]);
        CRUD::addColumn([
            'name'  => 'is_active',
            'type'  => 'boolean',
            'label' => 'Active',
        ]);
    }

    protected function setupCreateOperation(): void
    {
        CRUD::setValidation(NewsRequest::class);

        CRUD::field('title')->type('text');
        CRUD::addField([
            'name'   => 'slug',
            'type'   => 'slug',
            'target' => 'title',
            'label'  => 'Slug',
        ]);
        CRUD::addField([
            'name'  => 'image_name',
            'type'  => 'image',
            'disk'  => 'public',
            'label' => 'Image',
        ]);
        CRUD::addField([
            'name'  => 'excerpt',
            'type'  => 'textarea',
            'label' => 'Excerpt',
        ]);
        CRUD::addField([
            'name'  => 'content',
            'type'  => 'ckeditor',
            'label' => 'Content',
        ]);
        CRUD::addField([
            'name'  => 'published_at',
            'type'  => 'datetime',
            'label' => 'Published At',
        ]);
        CRUD::addField([
            'name'  => 'neighborhood',
            'type'  => 'relationship',
            'label' => 'Neighborhood',
        ]);
        CRUD::addField([
            'name'  => 'topic',
            'type'  => 'relationship',
            'label' => 'Topic',
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



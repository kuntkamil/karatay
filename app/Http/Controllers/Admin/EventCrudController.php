<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EventRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class EventCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup(): void
    {
        CRUD::setModel(\App\Models\Event::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/events');
        CRUD::setEntityNameStrings('Etkinlik', 'Etkinlikler');
    }

    protected function setupListOperation(): void
    {
        CRUD::column('title');
        CRUD::column('category');
        CRUD::column('location');
        CRUD::addColumn([
            'name'  => 'starts_at',
            'type'  => 'datetime',
            'label' => 'Starts At',
        ]);
        CRUD::addColumn([
            'name'  => 'is_active',
            'type'  => 'boolean',
            'label' => 'Active',
        ]);
    }

    protected function setupCreateOperation(): void
    {
        CRUD::setValidation(EventRequest::class);

        CRUD::field('title')->type('text');
        CRUD::field('category')->type('text');
        CRUD::field('location')->type('text');
        CRUD::addField([
            'name'  => 'starts_at',
            'type'  => 'datetime',
            'label' => 'Starts At',
        ]);
        CRUD::addField([
            'name'  => 'image_name',
            'type'  => 'image',
            'disk'  => 'public',
            'label' => 'Image',
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



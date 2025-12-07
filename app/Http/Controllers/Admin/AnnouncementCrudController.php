<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AnnouncementRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class AnnouncementCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup(): void
    {
        CRUD::setModel(\App\Models\Announcement::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/announcements');
        CRUD::setEntityNameStrings('Duyuru', 'Duyurular');
    }

    protected function setupListOperation(): void
    {
        CRUD::column('title');
        CRUD::addColumn([
            'name'  => 'date',
            'type'  => 'date',
            'label' => 'Date',
        ]);
        CRUD::addColumn([
            'name'  => 'url',
            'type'  => 'url',
        ]);
        CRUD::addColumn([
            'name'  => 'is_active',
            'type'  => 'boolean',
            'label' => 'Active',
        ]);
    }

    protected function setupCreateOperation(): void
    {
        CRUD::setValidation(AnnouncementRequest::class);

        CRUD::field('title')->type('text');
        CRUD::addField([
            'name'  => 'date',
            'type'  => 'date',
            'label' => 'Date',
        ]);
        CRUD::addField([
            'name'  => 'url',
            'type'  => 'url',
            'label' => 'URL',
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



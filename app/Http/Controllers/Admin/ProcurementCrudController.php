<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProcurementRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class ProcurementCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup(): void
    {
        CRUD::setModel(\App\Models\Procurement::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/procurements');
        CRUD::setEntityNameStrings('İhale', 'İhaleler');
    }

    protected function setupListOperation(): void
    {
        CRUD::column('file_no')->label('File No');
        CRUD::column('title');
        CRUD::addColumn([
            'name'  => 'deadline_at',
            'type'  => 'datetime',
            'label' => 'Deadline',
        ]);
        CRUD::addColumn([
            'name'  => 'is_active',
            'type'  => 'boolean',
            'label' => 'Active',
        ]);
    }

    protected function setupCreateOperation(): void
    {
        CRUD::setValidation(ProcurementRequest::class);

        CRUD::field('file_no')->type('text')->label('File No');
        CRUD::field('title')->type('text');
        CRUD::addField([
            'name'  => 'description',
            'type'  => 'ckeditor',
            'label' => 'Description',
        ]);
        CRUD::addField([
            'name'  => 'deadline_at',
            'type'  => 'datetime',
            'label' => 'Deadline',
        ]);
        CRUD::addField([
            'name'  => 'spec_url',
            'type'  => 'url',
            'label' => 'Specification URL',
        ]);
        CRUD::addField([
            'name'  => 'bid_url',
            'type'  => 'url',
            'label' => 'Bid URL',
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



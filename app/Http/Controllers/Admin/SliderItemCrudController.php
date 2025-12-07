<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SliderItemRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class SliderItemCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup(): void
    {
        CRUD::setModel(\App\Models\SliderItem::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/slider-items');
        CRUD::setEntityNameStrings('Slider Öğesi', 'Slider Öğeleri');
    }

    protected function setupListOperation(): void
    {
        CRUD::addColumn([
            'name'  => 'image_name',
            'type'  => 'image',
            'disk'  => 'public',
            'label' => 'Image',
        ]);
        CRUD::column('title');
        CRUD::addColumn([
            'name'  => 'is_active',
            'type'  => 'boolean',
            'label' => 'Active',
        ]);
    }

    protected function setupCreateOperation(): void
    {
        CRUD::setValidation(SliderItemRequest::class);

        CRUD::addField([
            'name'  => 'image_name',
            'type'  => 'image',
            'disk'  => 'public',
            'label' => 'Image',
        ]);
        CRUD::field('title')->type('text');
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



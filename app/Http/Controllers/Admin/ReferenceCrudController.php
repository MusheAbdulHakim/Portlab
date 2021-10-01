<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ReferenceRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ReferenceCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ReferenceCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Reference::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/reference');
        CRUD::setEntityNameStrings('reference', 'references');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        // CRUD::setFromDb(); // columns

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
        CRUD::addColumn([
            'name'=> 'name',
            'type' => 'text',
            'label' => 'Name'
        ]);
        CRUD::addColumn([
            'name'=> 'email',
            'type' => 'email',
            'label' => 'Email'
        ]);
        CRUD::addColumn([
            'name'=> 'phone',
            'type' => 'phone',
            'label' => 'Phone'
        ]);
        CRUD::addColumn([
            'name'=> 'designation',
            'type' => 'text',
            'label' => 'Designation'
        ]);
        CRUD::addColumn([
            'name'=> 'company',
            'type' => 'text',
            'label' => 'Company'
        ]);
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ReferenceRequest::class);

        // CRUD::setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
        CRUD::addField([
            'name' => 'name',
            'type' => 'text',
            'label' => 'Name'
        ]);
        CRUD::addField([
            'name' => 'email',
            'type' => 'email',
            'label' => 'Email'
        ]);
        CRUD::addField([
            'name' => 'phone',
            'type' => 'text',
            'label' => 'Phone'
        ]);
        CRUD::addField([
            'name' => 'designation',
            'type' => 'text',
            'label' => 'Designation'
        ]);
        CRUD::addField([
            'name' => 'company',
            'type' => 'text',
            'label' => 'Company'
        ]);
        CRUD::addField([
            'name' => 'avatar',
            'type' => 'browse',
            'label' => 'Avatar'
        ]);

    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}

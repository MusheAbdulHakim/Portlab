<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ServiceRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ServiceCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ServiceCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Service::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/service');
        CRUD::setEntityNameStrings('service', 'services');
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
            'name'=>'count',
            'type' => 'text',
            'label' => 'Count'
        ]);
        CRUD::addColumn([
            'name'=>'icon',
            'type' => 'text',
            'label' => 'Icon'
        ]);
        CRUD::addColumn([
            'name'=>'title',
            'type' => 'text',
            'label' => 'Title'
        ]);
        CRUD::addColumn([
            'name'=>'description',
            'type' => 'text',
            'label' => 'Description',
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
        CRUD::setValidation(ServiceRequest::class);

        // CRUD::setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
        CRUD::addField([
            'name' => 'count',
            'label' => 'Service Id',
            'type' => 'text',
            'hint' => '02'
        ]);

        CRUD::addField([
            'name' => 'icon',
            'label' => 'Service Icon',
            'type' => 'text',
            'hint' => 'flaticon-computer'
        ]);
        CRUD::addField([
            'name' => 'title',
            'label' => 'Service Title',
            'type' => 'text',
            'hint' => 'Web Design'
        ]);
        CRUD::addField([
            'name' => 'description',
            'label' => 'Service Description',
            'type' => 'textarea',
            'hint' => 'Describe your service'
        ]);
        CRUD::addField([
            'name' => 'gshape',
            'label' => 'Custom Service',
            'type' => 'checkbox',
            'hint' => 'Check to give service special styling'
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

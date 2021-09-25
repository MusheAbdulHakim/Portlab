<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PricingRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PricingCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PricingCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Pricing::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/pricing');
        CRUD::setEntityNameStrings('pricing', 'pricings');
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
            'name' => 'category',
            'type' => 'text',
            'label' => 'Package Category',
        ]);
        CRUD::addColumn([
            'name' => 'cost',
            'type' => 'text',
            'label' => 'Package Cost'
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
        CRUD::setValidation(PricingRequest::class);

        // CRUD::setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
        CRUD::addField([
            'name' => 'category',
            'type' => 'text',
            'hint' => 'Enter either Basic, Standard, Premium',
            'label' => "Category"
        ]);
        CRUD::addField([
            'name' => 'cost',
            'type' => 'text',
            'label' => "Cost of Package",
            'hint' => 'Enter cost of the package. eg $50'
        ]);
        CRUD::addField(
            [   // repeatable
                'name'  => 'elements',
                'label' => 'Elements of Package',
                'type'  => 'repeatable',
                'fields' => [
                    [
                        'name'    => 'element',
                        'type'    => 'text',
                        'label'   => 'Element',
                        'hint' => 'Enter element ',
                        'wrapper' => ['class' => 'form-group col-md-12'],
                    ],
                    
                ],
            
                // optional
                'new_item_label'  => 'Add Element', // customize the text of the button
                'init_rows' => 1, // number of empty rows to be initialized, by default 1
                'min_rows' => 1, // minimum rows allowed, when reached the "delete" buttons will be hidden
                'max_rows' => 5, // maximum rows allowed, when reached the "new item" button will be hidden
            
            ]
        );
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

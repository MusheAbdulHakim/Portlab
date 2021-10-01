<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ResumeRequest;
use App\Models\Resume;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ResumeCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ResumeCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Resume::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/resume');
        CRUD::setEntityNameStrings('resume', 'resumes');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
        
        CRUD::addColumn([
            'name' => 'experiences',
            'type' => 'array_count',
            'label' => 'Experiences'
        ]);
        CRUD::addColumn([
            'name' => 'qualifications',
            'type' => 'array_count',
            'label' => 'Qualifications'
        ]);
        CRUD::addColumn([
            'name' => 'skills',
            'type' => 'array_count',
            'label' => 'Skills'
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
        CRUD::setValidation(ResumeRequest::class);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
        CRUD::addField(
            [   // repeatable
                'name'  => 'experiences',
                'label' => 'Work Experiences',
                'type'  => 'repeatable',
                'fields' => [
                    [
                        'name'    => 'designation',
                        'type'    => 'text',
                        'label'   => 'Designation',
                        'hint' => 'Backend Developer',
                        'wrapper' => ['class' => 'form-group col-md-4'],
                    ],
                    [
                        'name'    => 'company',
                        'type'    => 'text',
                        'label'   => 'Company',
                        'hint' => 'Facebook',
                        'wrapper' => ['class' => 'form-group col-md-4'],
                    ],
                    [
                        'name'    => ['start_date','end_date'],
                        'type'    => 'date_range',
                        'label'   => 'Date Range',
                        'wrapper' => ['class' => 'form-group col-md-4'],
                    ],
                    
                ],
            
                // optional
                'new_item_label'  => 'Add', // customize the text of the button
                'init_rows' => 1, // number of empty rows to be initialized, by default 1
                'min_rows' => 1, // minimum rows allowed, when reached the "delete" buttons will be hidden
                // 'max_rows' => 5, // maximum rows allowed, when reached the "new item" button will be hidden
            
            ]
        );

        CRUD::addField(
            [   // repeatable
                'name'  => 'qualifications',
                'label' => 'Qualifications',
                'type'  => 'repeatable',
                'fields' => [
                    [
                        'name'    => 'certificate',
                        'type'    => 'text',
                        'label'   => 'Certificate',
                        'wrapper' => ['class' => 'form-group col-md-4'],
                    ],
                    [
                        'name'    => 'institution',
                        'type'    => 'text',
                        'label'   => 'Institution',
                        'wrapper' => ['class' => 'form-group col-md-4'],
                    ],
                    [
                        'name'    => ['start_date','end_date'],
                        'type'    => 'date_range',
                        'label'   => 'Date Range',
                        'wrapper' => ['class' => 'form-group col-md-4'],
                    ],
                    
                ],
            
                // optional
                'new_item_label'  => 'Add', // customize the text of the button
                'init_rows' => 1, // number of empty rows to be initialized, by default 1
                'min_rows' => 1, // minimum rows allowed, when reached the "delete" buttons will be hidden
                // 'max_rows' => 5, // maximum rows allowed, when reached the "new item" button will be hidden
            
            ]
        );

        CRUD::addField(
            [   // repeatable
                'name'  => 'technologies',
                'label' => 'Technologies',
                'type'  => 'repeatable',
                'fields' => [
                    [
                        'name'    => 'name',
                        'type'    => 'text',
                        'label'   => 'Name',
                        'hint' => 'PHP',
                        'wrapper' => ['class' => 'form-group col-md-6'],
                    ],
                    [
                        'name'    => 'avatar',
                        'type'    => 'browse',
                        'label'   => 'Avatar',
                        'wrapper' => ['class' => 'form-group col-md-6'],
                    ],
                   
                    
                ],
            
                // optional
                'new_item_label'  => 'Add', // customize the text of the button
                'init_rows' => 1, // number of empty rows to be initialized, by default 1
                'min_rows' => 1, // minimum rows allowed, when reached the "delete" buttons will be hidden
                // 'max_rows' => 20, // maximum rows allowed, when reached the "new item" button will be hidden
            
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

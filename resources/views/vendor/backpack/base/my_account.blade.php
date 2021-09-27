@extends(backpack_view('blank'))

@section('after_styles')
    <style media="screen">
        .backpack-profile-form .required::after {
            content: ' *';
            color: red;
        }
    </style>
@endsection

@php
  $breadcrumbs = [
      trans('backpack::crud.admin') => url(config('backpack.base.route_prefix'), 'dashboard'),
      trans('backpack::base.my_account') => false,
  ];
@endphp

@section('header')
    <section class="content-header">
        <div class="container-fluid mb-3">
            <h1>{{ trans('backpack::base.my_account') }}</h1>
        </div>
    </section>
@endsection

@section('content')
    <div class="row">

        @if (session('success'))
        <div class="col-lg-8">
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        </div>
        @endif

        @if ($errors->count())
        <div class="col-lg-8">
            <div class="alert alert-danger">
                <ul class="mb-1">
                    @foreach ($errors->all() as $e)
                    <li>{{ $e }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif

        @php
            $crud = app()->make('crud');
            $crud->setModel(\App\Models\User::class);
            $crud->addField([
                'name' => 'name',
                'type' => 'text',
                'label' => 'Name',
                'default' => $user->name,
            ]);
            $crud->addField([
                'name' => 'email',
                'type' => 'email',
                'label' => 'Email',
                'default' => $user->email,
            ]);
            $crud->addField(
                [
                    'name' => 'about',
                    'type' => 'textarea',
                    'label' => "About",
                    'hint' => 'brief introduction of yourself',
                    'default' => $user->about,
                ]
            );
            $crud->addField(
                [
                    'name' => 'birthday',
                    'type' => 'date',
                    'label' => "Date of Birth",
                    'default' => $user->birthday,
                ]
            );
            $crud->addField(
                [
                    'name' => 'phone',
                    'type' => 'text',
                    'label' => "Phone Number",
                    'default' => $user->phone,
                ]
            );
            $crud->addField(
                [
                    'name' => 'address',
                    'type' => 'textarea',
                    'label' => "Address",
                    'default' => $user->address,
                ]
            );
            $crud->addField(
                [
                    'name' => 'cv',
                    'type' => 'browse',
                    'label' => "Upload CV",
                ]
            );
            $crud->addField(
                [   // repeatable
                    'name'  => 'social_account',
                    'label' => 'Social Account',
                    'type'  => 'repeatable',
                    'default' => $user->social_account,
                    'fields' => [
                        [
                            'name'    => 'name',
                            'type'    => 'text',
                            'label'   => 'Name',
                            'hint' => 'facebook',
                            'wrapper' => ['class' => 'form-group col-md-4'],
                        ],
                        [
                            'name'    => 'url',
                            'type'    => 'text',
                            'label'   => 'Link',
                            'hint' => 'link to your facebook account',
                            'wrapper' => ['class' => 'form-group col-md-4'],
                        ],
                        [
                            'name'    => 'icon',
                            'type'    => 'text',
                            'label'   => 'Icon',
                            'hint' => 'fab fa-facebook-f',
                            'wrapper' => ['class' => 'form-group col-md-4'],
                        ],
                        
                    ],
                
                    // optional
                    'new_item_label'  => 'Add', // customize the text of the button
                    'init_rows' => 1, // number of empty rows to be initialized, by default 1
                    'min_rows' => 1, // minimum rows allowed, when reached the "delete" buttons will be hidden
                    'max_rows' => 5, // maximum rows allowed, when reached the "new item" button will be hidden
                
                ]
            );
            
        @endphp
        <div class="col-lg-8">
            <form enctype="multipart/form-data" method="post" action="{{ route('backpack.account.info.store') }}">
                {!! csrf_field() !!}
                <div class="card padding-10">

                    <div class="card-header">
                        {{ trans('backpack::base.update_account_info') }}
                    </div>
                    @include('crud::form_content', [ 'fields' => $crud->fields(), 'action' => 'edit' ])
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success"><i class="la la-save"></i> {{ trans('backpack::base.save') }}</button>
                        <a href="{{ backpack_url() }}" class="btn">{{ trans('backpack::base.cancel') }}</a>
                    </div>
                </div>
            </form>
        </div>
            
        {{-- CHANGE PASSWORD FORM --}}
        <div class="col-lg-8">
            <form class="form" action="{{ route('backpack.account.password') }}" method="post">

                {!! csrf_field() !!}

                <div class="card padding-10">

                    <div class="card-header">
                        {{ trans('backpack::base.change_password') }}
                    </div>

                    <div class="card-body backpack-profile-form bold-labels">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                @php
                                    $label = trans('backpack::base.old_password');
                                    $field = 'old_password';
                                @endphp
                                <label class="required">{{ $label }}</label>
                                <input autocomplete="new-password" required class="form-control" type="password" name="{{ $field }}" id="{{ $field }}" value="">
                            </div>

                            <div class="col-md-12 form-group">
                                @php
                                    $label = trans('backpack::base.new_password');
                                    $field = 'new_password';
                                @endphp
                                <label class="required">{{ $label }}</label>
                                <input autocomplete="new-password" required class="form-control" type="password" name="{{ $field }}" id="{{ $field }}" value="">
                            </div>

                            <div class="col-md-12 form-group">
                                @php
                                    $label = trans('backpack::base.confirm_password');
                                    $field = 'confirm_password';
                                @endphp
                                <label class="required">{{ $label }}</label>
                                <input autocomplete="new-password" required class="form-control" type="password" name="{{ $field }}" id="{{ $field }}" value="">
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                            <button type="submit" class="btn btn-success"><i class="la la-save"></i> {{ trans('backpack::base.change_password') }}</button>
                            <a href="{{ backpack_url() }}" class="btn">{{ trans('backpack::base.cancel') }}</a>
                    </div>

                </div>

            </form>
        </div>

    </div>
@endsection

@section('after_scripts')
    <script src="{{asset('')}}"></script>
@endsection
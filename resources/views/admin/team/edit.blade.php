@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.team.actions.edit', ['name' => $team->title]))

@section('body')

    <div class="container-xl">
        <div class="card">
            <team-form
                :action="'{{ $team->resource_url }}'"
                :data="{{ $team->toJson() }}"
                v-cloak
                inline-template>
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>
                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.team.actions.edit', ['name' => $team->title]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.team.components.form-elements')
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                </form>
            </team-form>
        </div>
    </div>

@endsection
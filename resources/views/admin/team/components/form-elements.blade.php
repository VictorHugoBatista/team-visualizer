<div class="form-group row align-items-center" :class="{'has-danger': errors.has('title'), 'has-success': fields.title && fields.title.valid }">
    <label for="title" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">
        {{ trans('admin.team.columns.title') }}
    </label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.title" v-validate="'required'" @input="validate($event)"
            class="form-control" :class="{'form-control-danger': errors.has('title'), 'form-control-success': fields.title && fields.title.valid}"
            id="title" name="title" placeholder="{{ trans('admin.team.columns.title') }}">
        <div v-if="errors.has('title')" class="form-control-feedback form-text" v-cloak>
            @{{ errors.first('title') }}
        </div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('integrants'), 'has-success': fields.integrants && fields.integrants.valid }">
    <label for="title" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">
        Team members
    </label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <multiselect v-model="form.integrants" placeholder="Team members"
    label="name" track-by="id" :options="{{ $users }}" :multiple="true" open-direction="bottom">
        </multiselect>
    </div>
</div>

<div class="form-group row align-items-center"
    :class="{'has-danger': errors.has('{{ $vModel }}'), 'has-success': fields.{{ $vModel }} && fields.{{ $vModel }}.valid }">
    <label for="title" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">
        {{ $fieldName }}
    </label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <multiselect v-model="form.{{ $vModel }}" placeholder="{{ $fieldName }}"
            label="name" track-by="id" :options="{{ $options }}" :multiple="true" open-direction="bottom">
        </multiselect>
    </div>
</div>

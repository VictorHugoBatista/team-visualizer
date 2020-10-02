<div class="form-group row align-items-top"
    :class="{'has-danger': errors.has('{{ $vModel }}'), 'has-success': fields.{{ $vModel }} && fields.{{ $vModel }}.valid }">
    <label for="title" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : '{{ $colSizeLabel }}'">
        {{ $fieldName }}
    </label>
    <div :class="isFormLocalized ? 'col-md-4' : '{{ $colSizeField }}'">
        <admin-user-team-field :options="{{ $options }}" :values="form.{{ $vModel }}" inline-template>
            <div>
                <div v-for="value in values">
                    <div class="row">
                        <div class="col-md-6">
                            <select class="form-control" value="value.id">
                                <option v-for="option in options"
                                    :value="option.id" v-html="option.name"
                                    :selected="option.id === value.id">
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </admin-user-team-field>
        {{-- <multiselect v-model="form.{{ $vModel }}" placeholder="{{ $fieldName }}"
            label="name" track-by="id" :options="{{ $options }}" :multiple="true" open-direction="bottom">
        </multiselect> --}}
    </div>
</div>

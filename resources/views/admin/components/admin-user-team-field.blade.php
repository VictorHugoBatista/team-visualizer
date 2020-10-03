<div class="form-group row align-items-top"
    :class="{'has-danger': errors.has('{{ $vModel }}'), 'has-success': fields.{{ $vModel }} && fields.{{ $vModel }}.valid }">
    <label for="title" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : '{{ $colSizeLabel }}'">
        {{ $fieldName }}
    </label>
    <div :class="isFormLocalized ? 'col-md-4' : '{{ $colSizeField }}'">
        <admin-user-team-field :options="{{ $options }}" :values="form.{{ $vModel }}" inline-template>
            <div>
                <div v-for="value in values" class="mb-4">
                    <div class="row">
                        <div class="col-md-5">
                            <select class="form-control" value="value.id">
                                <option value="">{{ $fieldName }}</option>
                                <option v-for="option in options"
                                    :value="option.id" v-html="option.name"
                                    :selected="option.id === value.id">
                                </option>
                            </select>
                        </div>
                        <div class="col-md-5">
                            <input type="text" class="form-control" placeholder="Role" />
                        </div>
                        <div class="col-md-2">
                            <div class="btn btn-block text-danger text-center">
                                Remove
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-md-2">
                        <button class="btn btn-block text-success text-center">
                            Add
                        </button>
                    </div>
                </div>
            </div>
        </admin-user-team-field>
        {{-- <multiselect v-model="form.{{ $vModel }}" placeholder="{{ $fieldName }}"
            label="name" track-by="id" :options="{{ $options }}" :multiple="true" open-direction="bottom">
        </multiselect> --}}
    </div>
</div>

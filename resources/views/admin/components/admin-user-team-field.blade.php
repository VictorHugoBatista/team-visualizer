<div class="form-group row align-items-top"
    :class="{'has-danger': errors.has('{{ $vModel }}'), 'has-success': fields.{{ $vModel }} && fields.{{ $vModel }}.valid }">
    <label for="title" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : '{{ $colSizeLabel }}'">
        {{ $fieldName }}
    </label>
    <div :class="isFormLocalized ? 'col-md-4' : '{{ $colSizeField }}'">
        <admin-user-team-field :options="{{ $options }}" :values="form.{{ $vModel }}"
            @change="form.{{ $vModel }} = $event;" inline-template>
            <div class="mt-2">
                <div v-for="(line, lineNumber) in lines">
                    <div class="row pb-3">
                        <div class="col-md-6">
                            <select class="form-control" v-model="line.id"
                                :class="{'border-danger': '' === line.id}">
                                <option value="" disabled>{{ $fieldName }}</option>
                                <option v-for="option in options"
                                    :value="option.id" v-html="option.name"
                                    :disabled="selectedOptions.includes(option.id)">
                                </option>
                            </select>
                        </div>
                        <div class="col-md-5">
                            <input type="text" class="form-control"
                                placeholder="Role" v-model="line.role"
                                :class="{'border-danger': '' === line.role}">
                        </div>
                        <div class="col-md-1">
                            <div class="btn btn-block text-danger text-center px-0" @click="removeLine(lineNumber)">
                                <i class="nav-icon icon-minus font-weight-bold h5 my-0"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <hr class="mt-0 mb-3" />
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-md-1">
                        <div class="btn btn-block text-success text-center px-0" @click="addLine">
                            <i class="nav-icon icon-plus font-weight-bold h5 my-0"></i>
                        </div>
                    </div>
                </div>
            </div>
        </admin-user-team-field>
    </div>
</div>

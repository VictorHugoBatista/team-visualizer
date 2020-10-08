export default class RepeaterLine {
    constructor(id, role) {
        this.id = id;
        this.role = role;
        this.valid = {};
    }

    validate() {
        this.valid.id = 'undefined' !== typeof this.id && '' !== this.id;
        this.valid.role = 'undefined' !== typeof this.role && '' !== this.role;
    }

    isValid(field) {
        if ('undefined' === this.valid[field]) {
            return false;
        }
        return this.valid[field];
    }
};

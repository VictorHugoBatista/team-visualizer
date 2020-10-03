Vue.component('admin-user-team-field', {
    props: [
        'values',
        'options',
    ],
    data() {
        return {
            lines: [],
        };
    },
    mounted() {
        if (! this.values.length) {
            this.lines = [];
            return;
        }
        this.lines = this.values.map(value => ({
            id: value.id,
            name: value.name,
            role: '',
        }));
    },
});

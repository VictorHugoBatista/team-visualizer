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
            role: '',
        }));
    },
    methods: {
        addLine() {
            this.lines.push({
                id: '',
                role: '',
            });
        },
        removeLine(lineNumber) {
            this.lines.splice(lineNumber, 1);
        },
    },
});

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
        this.updateLines(this.values);
    },
    methods: {
        updateLines(newLines) {
            if (! newLines.length) {
                this.lines = [];
                return;
            }
            this.lines = newLines.map(line => ({
                id: line.id,
                role: line.pivot.role,
            }));
        },
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
    watch: {
        lines(newLines) {
            this.$emit('change', newLines);
        },
    },
});

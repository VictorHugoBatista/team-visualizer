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
            this.emitChangeEvent();
        },
        addLine() {
            this.lines.push({
                id: '',
                role: '',
            });
            this.emitChangeEvent();
        },
        removeLine(lineNumber) {
            this.lines.splice(lineNumber, 1);
            this.emitChangeEvent();
        },
        emitChangeEvent() {
            this.$emit('change', this.lines);
        },
    },
});

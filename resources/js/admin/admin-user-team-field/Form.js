import RepeaterLine from './RepeaterLine';

Vue.component('admin-user-team-field', {
    props: [
        'values',
        'options',
    ],
    data() {
        return {
            isRepeaterValid: true,
            lines: [],
            selectedOptions: [],
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
            this.lines = newLines.map(line => new RepeaterLine(line.id, line.pivot.role));
        },
        addLine() {
            this.lines.push(new RepeaterLine('', ''));
        },
        removeLine(lineNumber) {
            this.lines.splice(lineNumber, 1);
        },
    },
    watch: {
        lines: {
            handler(newLines) {
                let repeaterValid = true;
                this.selectedOptions = newLines.map(line => {
                    repeaterValid &&= line.validate();
                    return line.id;
                });
                this.isRepeaterValid = repeaterValid;
                this.$emit('change', newLines);
            },
            deep: true,
        },
    },
});

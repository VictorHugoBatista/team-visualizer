import AppForm from '../app-components/Form/AppForm';

Vue.component('team-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                title:  '' ,
                
            }
        }
    }

});
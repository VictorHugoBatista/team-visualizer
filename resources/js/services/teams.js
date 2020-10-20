const apiUrl = '/api/teams';

export default {
    get(successCallback) {
        const options = {};
        fetch(apiUrl, options)
            .then(response => {
                response.json().then(teams => {
                    successCallback(teams.data);
                });
            });
    },
};

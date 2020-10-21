export default {
    namespaced: true,
    state: {
        showLoading: false,
    },
    mutations: {
        setLoadingVisibility(state, {visibility}) {
            state.showLoading = visibility;
        },
    },
    actions: {
        showLoading({commit}) {
            commit('setLoadingVisibility', {
                visibility: true,
            });
        },
        hideLoading({commit}) {
            commit('setLoadingVisibility', {
                visibility: false,
            });
        },
    },
};

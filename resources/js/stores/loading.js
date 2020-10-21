export default {
    namespaced: true,
    state: {
        visible: false,
    },
    mutations: {
        setLoadingVisibility(state, {visibility}) {
            state.visible = visibility;
        },
    },
    actions: {
        show({commit}) {
            commit('setLoadingVisibility', {
                visibility: true,
            });
        },
        hide({commit}) {
            commit('setLoadingVisibility', {
                visibility: false,
            });
        },
    },
};

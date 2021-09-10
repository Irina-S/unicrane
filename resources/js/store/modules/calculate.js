export default {
    state: {
        handle: null,
        handleName: null,
        type: null,
        typeName: null,
        lcapacity: null,
        prod: null,
        prodName: null,
        placement: null,
        placementName: null,
        tmode: null,
        tmodeName: null,
        hasway: null,
        haswayName: null,
        haswayorrail: null,
        haswayorrailName: null,
    },

    mutations: {
        set_handle: (state, payload) => {
            state.handle = payload.value;
            state.handleName = payload.valueName;
        },
        set_type: (state, payload) => {
            state.type = payload.value;
            state.typeName = payload.valueName;
        },
        set_lcapacity: (state, payload) => {
            state.lcapacity = payload.value;
        },
        set_prod: (state, payload) => {
            state.prod = payload.value;
            state.prodName = payload.valueName;
        },
        set_placement: (state, payload) => {
            state.placement = payload.value;
            state.placementName = payload.valueName;
        },
        set_tmode: (state, payload) => {
            state.tmode = payload.value;
            state.tmodeName = payload.valueName;
        },
        set_hasway: (state, payload) => {
            state.hasway = payload.value;
            state.haswayName = payload.valueName;
        },
        set_haswayorrail: (state, payload) => {
            state.haswayorrail = payload.value;
            state.haswayorrailName = payload.valueName;
        },

    },

    actions: {
        select_handle: ({ commit }, credentials) => {
            commit('set_handle', credentials);
        },
        select_type: ({ commit }, credentials) => {
            commit('set_type', credentials);
        },
        select_lcapacity: ({ commit }, credentials) => {
            commit('set_lcapacity', credentials);
        },
        select_prod: ({ commit }, credentials) => {
            commit('set_prod', credentials);
        },
        select_placement: ({ commit }, credentials) => {
            commit('set_placement', credentials);
        },
        select_tmode: ({ commit }, credentials) => {
            commit('set_tmode', credentials);
        },
        select_hasway: ({ commit }, credentials) => {
            commit('set_hasway', credentials);
        },
        select_haswayorrail: ({ commit }, credentials) => {
            commit('set_haswayorrail', credentials);
        },
    }
}
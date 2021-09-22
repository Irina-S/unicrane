import { calcBasePrice, mmToMeters } from './../functions.js'

export default {
    state: {
        status: 'calc',
        pricelist: null,
        handle: null,
        handleName: null,
        type: null,
        typeName: null,
        lcapacity: null,
        prod: null,
        prodName: null,
        prodPrice: null,
        placement: null,
        placementName: null,
        tmode: null,
        tmodeName: null,
        hasway: null,
        haswayName: null,
        hasrail: null,
        hasrailName: null,
        height: null,
        heightName: null,
        consoleLenght: null,
        consoleLenghtName: null,
        width: null,
        widthName: null,
        length: null,
        lengthName: null,
        basePrice: null
    },

    mutations: {
        set_status: (state, payload) => {
            state.status = payload;
        },
        set_handle: (state, payload) => {
            state.handle = payload.value;
            state.handleName = payload.valueName;
            //сброс размещения
        },
        set_pricelist: (state, payload) => {
            state.pricelist = payload;
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
            // вычисление стоимости исполнения
            state.prodPrice = 0;
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
        set_hasrail: (state, payload) => {
            state.hasrail = payload.value;
            state.hasrailName = payload.valueName;
        },
        set_height: (state, payload) => {
            state.height = payload.value;
            state.heightName = payload.valueName;
        },
        set_consolelength: (state, payload) => {
            state.consoleLength = payload.value;
            state.consoleLengthName = payload.valueName;
        },
        set_width: (state, payload) => {
            state.width = payload.value;
            state.widthName = payload.valueName;
            // Дополнительно вычисляем базовую стоимость крана
            console.log(`В метрах ${mmToMeters(state.width)}`)
            state.basePrice = calcBasePrice(state.pricelist, state.type, state.lcapacity, mmToMeters(state.width))

        },
        set_length: (state, payload) => {
            state.length = payload.value;
            state.lengthName = payload.valueName;
        }
    },

    actions: {
        select_status: ({ commit }, credentials) => {
            commit('set_status', credentials);
        },
        select_handle: ({ commit }, credentials) => {
            commit('set_handle', credentials);
        },
        select_pricelist: ({ commit }, credentials) => {
            commit('set_pricelist', credentials);
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
        select_hasrail: ({ commit }, credentials) => {
            commit('set_hasrail', credentials);
        },
        select_height: ({ commit }, credentials) => {
            commit('set_height', credentials);
        },
        select_consolelength: ({ commit }, credentials) => {
            commit('set_consolelength', credentials);
        },
        select_width: ({ commit }, credentials) => {
            commit('set_width', credentials);
        },
        select_length: ({ commit }, credentials) => {
            commit('set_length', credentials);
        },
    }
}
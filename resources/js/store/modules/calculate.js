export default {
  state: {
    page1: null,
    page2: null,
    page3: null,
    page4: null,
    page5: null,
    page6: null,
    page7: null,
  },

  getters: {
    page1: state => state.page1,
    page2: state => state.page2,
    page3: state => state.page3,
    page4: state => state.page4,
    page5: state => state.page5,
    page6: state => state.page6,
    page7: state => state.page7,
  },

  mutations: {
    set_page1: (state, payload) => {
      state.page1 = payload;
    },
    set_page2: (state, payload) => {
      state.page2 = payload;
    },
    set_page3: (state, payload) => {
      state.page3 = payload;
    },
    set_page4: (state, payload) => {
      state.page4 = payload;
    },
    set_page5: (state, payload) => {
      state.page5 = payload;
    },
    set_page6: (state, payload) => {
      state.page6 = payload;
    },
    set_page7: (state, payload) => {
      state.page7 = payload;
    },
  },

  actions: {
    select_page1: ({commit}, credentials) => {
      commit('set_page1', credentials);
    },
    select_page2: ({commit}, credentials) => {
      commit('set_page2', credentials);
    },
    select_page3: ({commit}, credentials) => {
      commit('set_page3', credentials);
    },
    select_page4: ({commit}, credentials) => {
      commit('set_page4', credentials);
    },
    select_page5: ({commit}, credentials) => {
      commit('set_page5', credentials);
    },
    select_page6: ({commit}, credentials) => {
      commit('set_page6', credentials);
    },
    select_page7: ({commit}, credentials) => {
      commit('set_page7', credentials);
    },
  }
}

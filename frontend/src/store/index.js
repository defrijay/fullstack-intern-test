import { createStore } from 'vue';

const store = createStore({
  state() {
    return {
      isAuthenticated: localStorage.getItem('isAuthenticated') === 'true',
      username: localStorage.getItem('username') || '',
    };
  },
  mutations: {
    login(state, username) {
      state.isAuthenticated = true;
      state.username = username;
      localStorage.setItem('isAuthenticated', 'true');
      localStorage.setItem('username', username);
    },
    logout(state) {
      state.isAuthenticated = false;
      state.username = '';
      localStorage.removeItem('isAuthenticated');
      localStorage.removeItem('username');
    },
  },
  actions: {
    login({ commit }, username) {
      commit('login', username);
    },
    logout({ commit }) {
      commit('logout');
    },
  },
});

export default store;

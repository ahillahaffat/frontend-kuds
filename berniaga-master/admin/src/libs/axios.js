import Vue from 'vue'

// axios
import axios from 'axios'

const axiosIns = axios.create({
  // You can add your headers here
  // ================================
  baseURL: 'http://127.0.0.1:8000/api/admin',

  // timeout: 1000,
  headers: {
    Authorization: `Bearer ${sessionStorage.getItem('token') ?? null}`,
  },
})

Vue.prototype.$http = axiosIns

export default axiosIns

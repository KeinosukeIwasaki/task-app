import axios from "axios";

const instance = axios.create({
  baseURL: "http://localhost/api",
  headers: {
    "Access-Control-Allow-Origin": "*",
    "Content-Type": "application/json",
  },
  timeout: 30000, // タイムアウト30秒
});

export default instance;

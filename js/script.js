const { createApp } = Vue;

createApp({
  data() {
    return {
      arrayDischi: [],
      finalApi: "server.php",
    };
  },
  methods: {
    getApi() {
      axios.get(this.finalApi).then((result) => {
        this.arrayDischi = result.data;
      });
    },
  },
  mounted() {
    this.getApi();
  },
}).mount("#app");

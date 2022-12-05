const { createApp } = Vue;

createApp({
  data() {
    return {
      arrayDischi: [],
      finalApi: "server.php",
      title :'',
    };
  },
  methods: {
    getApi() {
      axios.get(this.finalApi).then((result) => {
        this.arrayDischi = result.data;
      });
    },
   addNew(){
    const data ={
      title : this.title,
      
    };
    axios.post(this.finalApi,data, {
      headers :{'Content-Type' : 'multipart/form-data'}
    })
    .then(result =>{
      this.arrayDischi = result.data;
    })
  }
  },
  mounted() {
    this.getApi();
  },
}).mount("#app");

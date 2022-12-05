const { createApp } = Vue;

createApp({
  data() {
    return {
      arrayDischi: [],
      finalApi: "server.php",
      img :'https://zerojackerzz.com/wp-content/uploads/2019/10/album-placeholder.png',
      title :'',
      author:'',
      gener :''
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
      img: this.img,
      author: this.author,
      gener :this.gener,
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

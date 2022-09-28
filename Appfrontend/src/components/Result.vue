<template>
  <div class="hello">
      <button class="button-5" o><router-link to="/">Back</router-link></button>
      <h1>Result</h1>
   <ul  v-for="answer in Answers" :key="answer.id">
   <li class="lis">{{ answer.answer }} {{ answer.percentages }} % - {{ answer.results }} results </li>
   </ul>
  </div>
</template>

<script>
import axios from 'axios'
export default {
  name: 'HelloWorld',
    data() {
      return {

         Answers:{}

      }
    },
    mounted() {
    //function here
    this.ResultData();

   },
   methods: {
  ResultData:function(){
  axios.get('http://localhost:8000/api/result')
      .then((response)=> {
          console.log(response.data.result);

        this.Answers=response.data.result;
        console.log(this.Answers);

      })
      .catch((error)=>{
        console.log(error);
      });
  }
}

}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.button-5{
  align-items: center;
  background-clip: padding-box;
  background-color: #fa6400;
  border: 1px solid transparent;
  border-radius: .25rem;
  box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-flex;
  font-family: system-ui,-apple-system,system-ui,"Helvetica Neue",Helvetica,Arial,sans-serif;
  font-size: 16px;
  font-weight: 600;
  justify-content: center;
  line-height: 1.25;
  margin: 0;
  min-height: 3rem;
  padding: calc(.875rem - 1px) calc(1.5rem - 1px);
  position: relative;
  text-decoration: none;
  transition: all 250ms;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: baseline;
  width: auto;
}
a {
    text-decoration: none;
    color: inherit;
}
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}


</style>

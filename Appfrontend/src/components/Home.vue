<template>
  <div class="hello">
    <p>{{ Questions }}</p>
     <br>
    <hr>
    <br>

<div  v-for="answer in Answers" :key="answer.id">
 <div class="lis lisback">
<input type="radio" :id="answer.id" :value="answer.text" v-model="picked" @input="onInput" />
<label for="one">{{ answer.text }}</label>
 </div>
</div>




  </div>
</template>

<script>
import axios from 'axios'
let id = 0
export default {

  name: 'QuestionRating',

  data() {
      return {
        Questions: 'How do you find our service?',
        picked: 'One',
        Answers: [
        { id: id++,text: 'Good' },
        { id: id++,text: 'Fair' },
        { id: id++, text: 'Neutral' },
        { id: id++, text: 'Bad' },
      ]
      }
    },
    methods: {
  onInput(e) {
  
    console.log(e.target.value);

    const options = {
  url: 'http://localhost:8000/api/add',
  method: 'POST',
  headers: {
    'Accept': 'application/json',
    'Content-Type': 'application/json;charset=UTF-8'
  },
  data: {
    answer:e.target.value

  }
};

    axios(options)
      .then((response)=> {
          console.log(response.data);
 this.$router.push('Result');

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
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
.lis>label {
    padding-left: 3px;
}
a {
  color: #42b983;
}
</style>

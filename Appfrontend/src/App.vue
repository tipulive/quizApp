<template>
  <router-view></router-view>


</template>


<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  display: flex;
  min-height: 100vh;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  background-color: #313645;
  font-family: verdana, sans-serif;
}

h1,p {
  color: #fff;
  margin: 20px 0;
}



.lis {
    background: aliceblue;
    padding: 20px;
    margin-bottom: 5px;
    /* height: 40px; */
}
.lisback {
    background: #c75896;
    color: #ffffffbf;
}


</style>

<template>
  <div>
    <h2 class="center">Mon Application</h2>
    {{ message }}
    <ul>
      <li :key="word.id" v-for="word in words">{{ word }}</li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      message: "Une liste de mots :",
      words: []
    };
  },
  mounted() {

    let el = document.querySelector("div[data-words]");
    let mywords = el.dataset.words.split(",");

    this.words.push.apply(this.words, mywords);
  }
};
</script>

<style>
.center {
  text-align: center;
}
</style>
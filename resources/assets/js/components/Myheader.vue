<template>
	<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="" alt="UserApp " width="112" height="28">
    </a>
    <div class="navbar-menu is-active">
    	 <router-link to="/home">Home</router-link>
       <router-link to="/about">About</router-link>
    </div>
    <button class="button navbar-burger">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
</nav>
</template>
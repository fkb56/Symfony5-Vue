<template>
	<div>
		<h1>Hello Home</h1>
		<router-view/>
		<Index />
		<Hello />
	</div>
</template>

<script>
import Index from "./pages";
import Hello from "./pages/Hello";
export default {
	name: 'app',
	components: {Hello, Index}
}
</script>

<style lang="scss">

body {
	background-color: lightgray;
}

</style>
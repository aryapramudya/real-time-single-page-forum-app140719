<template>
	<h1>Sudah Logout</h1>
</template>

<script>
	export default{
		created(){
			EventBus.$emit('logout');
		}
	}
</script>
<style>

</style>
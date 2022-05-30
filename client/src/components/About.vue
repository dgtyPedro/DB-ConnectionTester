<template>
<a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
<div class="modal">
	aaa
</div>
</template>

<script>
    export default{
        name:'About'
    }
</script>

<style scoped>

.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
	font-size:30px;
	box-shadow: 2px 2px 3px #999;
	z-index:100;
}

.my-float{
	margin-top:16px;
}

.modal{
        color: var(--color-orangy);
        font-size: 1.5rem;
        background-color: rgba(255,255,255, 0.9);
        height: fit-content;
        width: 500px;   
        border-radius: 10px;
        -webkit-box-shadow: 5px 5px 14px 5px var(--color-orangy); 
        box-shadow: 5px 5px 14px 5px var(--color-orangy);
}


</style>
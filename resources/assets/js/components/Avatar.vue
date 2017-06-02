<template>
    <figure id="pic" v-bind:style="{ backgroundImage: 'url('+backgroundImage+')' }" @click="clickInput">
        <span class="dummy"></span>
        <span class="cambiar">cambiar imagen</span>
        <div class="hidden"><input accept="image/*" id="click" name="imagen" type="file" @change="onFileChange"></div>
    </figure>
</template>

<script>
    export default {
        props: {
            imagen: { default: "img/avatar.jpg" }
        },
        data() {
            return {
                backgroundImage: this.imagen
            }
        },
        methods: {
            clickInput() {
                document.getElementById('click').click();
            },
            onFileChange(e) {
                var files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createImage(files[0]);
            },
            createImage(file) {
                var image = new Image();
                var reader = new FileReader();
                var vm = this;
                reader.onload = (e) => {
                    vm.backgroundImage = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }
    }
</script>

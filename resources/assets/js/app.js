require('./bootstrap');
import Avatar from './components/Avatar.vue';

var form = new Vue({
    el: '#foto_perfil',
    components: {
    	Avatar
    }
});

$('div.alert').delay(3000).slideUp(350);

$("#intereses input[type='checkbox']").click(function(){
	console.log($(this));
	$(this).parent().toggleClass("selected");
});
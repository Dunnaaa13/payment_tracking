<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id= "app">
		Select Sections:
		<select name="" id="" v-on:change='fetchStudents()' v-model="selected_section">
			@foreach($sections as $section)
				<option value="{{ $section->id }}"> {{ $section->name}}</option>
			@endforeach
		</select>
        <div id= "app">
        Select Students:
        <select name="" id="" v-on:change='fetchStudents()' v-model="selected_section">
            @foreach($sections as $section)
                <option value="{{ $section->id }}"> {{ $section->name}}</option>
            @endforeach
        </select>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    var vm = new Vue({
        el: '#app',
        data: {
            selected_section: ''
        },
        methods:{
        	fetchStudents(){
           		axios.get('/students?section_id='+this.selected_section).then(({data}) => {
           			console.log(data)
           		});            
        	}
    	},
        mounted(){
        	axios.get('/students').then(({data}) =>{
        		console.log(data)
        	});
        }

    })
</script>
</body>
</html>
<template>
<div>

    <h3>List Of Professors</h3>

    <div class="container">
        <button data-toggle="modal" data-target="#AddProfessor" @click="pushProf">+ Add Professor</button>
        <hr>
        <div class="row">
            <div id="list" class="col-md-4" v-for="(item, index) in professors" :key="item.id">
                <div @click="editProfessor(item)" data-toggle="modal" data-target="#EditProfessor">
                    <label for="name">Name:</label>{{item.name}} <br>
                    <label for="email">E-mail:</label>{{item.email}} <br>
                    <label for="department">Department:</label>{{item.department}} <br>
                </div>
                <button class="btn btn-danger" @click="deleteProfessor(index)">
                        Delete
                </button>
            </div>
        </div>
    </div>
    <div class="modal fade" id="EditProfessor" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="EditProfessorLabel">Edit Professor</h5>
                </div>
                <div class="modal-body">
                    <edit-professor @editProf="editProf" :item="prof"></edit-professor>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="AddProfessor" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AddProfessorLabel">Add Professor</h5>
                </div>
                <div class="modal-body">
                    <add-professor @addProf="addProf" :item="emptyItem"></add-professor>
                </div>
            </div>
        </div>
    </div>

</div>
</template>

<script>
export default {
props: ['professor'],
    data(){
        return {
            professors: _.cloneDeep(this.professor),
            msg: '',
            emptyItem:{
                name:'',
                email:'',
                department:'',
                type:'Professor',
                password:'professor',
            },
            prof: {

            },
        };
    },
    methods:{
        pushProf: function(){
            this.professors.push(this.emptyItem);
        },
        deleteProfessor: function(index){
            let id = this.professors[index].id;
            axios.delete('/api/admin/manageProfessor/'+id);
            this.professors.splice(index,1)
        },
        addProf: function(item){
            console.log(item);
            axios.post('/api/admin/manageProfessor/addProf',item);
        },
        editProf: function(item){
            axios.post('/api/admin/manageProfessor/editProf',item);
        },
        editProfessor: function(item){
            this.prof = item;
        }
    }
}

</script>
<style scoped>
#list{
    border: solid;
}
</style>

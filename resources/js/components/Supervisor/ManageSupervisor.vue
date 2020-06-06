<template>
<div>

    <h3>List Of Supervisors</h3>

    <div class="container">
        <button data-toggle="modal" data-target="#AddSupervisor" @click="pushSuperv">+ Add Supervisor</button>
        <hr>
        <div class="row">
            <div id="list" class="col-md-4" v-for="(item, index) in supervisors" :key="item.id">
                <div @click="editSupervisor(item)" data-toggle="modal" data-target="#EditSupervisor">
                    <label for="name">Name:</label>{{item.name}} <br>
                    <label for="email">E-mail:</label>{{item.email}} <br>
                    <label for="department">Department:</label>{{item.department}} <br>
                </div>
                <button class="btn btn-danger" @click="deleteSupervisor(index)">
                        Delete
                </button>
            </div>
        </div>
    </div>
    <div class="modal fade" id="EditSupervisor" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="EditSupervisorLabel">Edit Supervisor</h5>
                </div>
                <div class="modal-body">
                    <edit-supervisor @editSuperv="editSuperv" :item="superv"></edit-supervisor>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="AddSupervisor" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AddSupervisorLabel">Add Supervisor</h5>
                </div>
                <div class="modal-body">
                    <add-supervisor @addSuperv="addSuperv" :item="emptyItem"></add-supervisor>
                </div>
            </div>
        </div>
    </div>

</div>
</template>

<script>
export default {
    props: ['supervisor'],
    data(){
        return {
            supervisors: _.cloneDeep(this.supervisor),
            msg: '',
            emptyItem:{
                name:'',
                email:'',
                department:'',
                type:'Supervisor',
                password:'supervisor',
            },
            superv: {

            },
        };
    },
    methods:{
        pushSuperv: function(){
            this.supervisors.push(this.emptyItem);
        },
        deleteSupervisor: function(index){
            let id = this.supervisors[index].id;
            axios.delete('/api/admin/manageSupervisor/'+id);
            this.supervisors.splice(index,1)
        },
        addSuperv: function(item){
            axios.post('/api/admin/manageSupervisor/addSuperv',item);
        },
        editSuperv: function(item){
            axios.post('/api/admin/manageSupervisor/editSuperv',item);
        },
        editSupervisor: function(item){
            this.superv = item;
        }
    }
}
</script>
<style scoped>
#list{
    border: solid;
}
</style>

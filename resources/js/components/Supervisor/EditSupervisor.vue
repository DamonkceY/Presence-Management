
<template>
    <div>
        <form method="post">
            <div class="list-group col-md-12">
                <label for="name" >Name:</label><input v-model="item.name" name="name" type="text">
                <label for="email" >E-mail:</label><input v-model="item.email" name="email" type="email">
                <label for="department" >Department:</label><input v-model="item.department" name="department" type="text">
            </div>
        </form>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" @click="editSuperv(item)" data-dismiss="modal">Save changes</button>
        </div>
    </div>
</template>
<script>
export default {
props: ['item'],
    data(){
        return {

        };
    },
    methods:{
        editSuperv: function(item){
            this.$emit('editSuperv',item);
        }
    },
}
</script>

<style scoped>

</style>

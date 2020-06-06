<template>
<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Today is <p id="bold">{{this.timetab[0].day}} {{this.presence.date}}</p> this is session Number <p id="bold">{{this.timetab[0].session_number}}</p>
                        ////// Department: <p id="bold">{{this.timetab[0].department}}</p>
                    </div>
                    <div class="card-body" v-if="this.presencetab.length==0">
                        <div v-for="(item,index) in timetab" :key="index" id="items">
                            <div v-if="item.professor_id == null">
                                <div class="row" id="empty">
                                    <div class="col-md-3">
                                        Classroom : {{ item.classroom_number }}
                                    </div>
                                    <div class="col-md-6" style="text-align: center;">
                                        <span>Empty</span>
                                    </div>
                                </div>
                            </div>
                            <div v-else>
                                <div class="row">
                                    <div class="col-md-3">
                                        Classroom : {{ item.classroom_number }}
                                    </div>
                                    <div class="col-md-3">
                                        {{ item.professor_name }}
                                    </div>
                                    <div class="col-md-3">
                                        {{ item.classgroup_name }}
                                    </div>
                                    <div class="col-md-3">
                                        Present : <input type="checkbox" name="checkbox" :id="index">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" @click="savePresence">Save Presence</button>
                    </div>
                    <div v-else class="card-body">
                        <p id="bold">You have already posted the presence of this session !!!</p>
                        <div v-for="(item,index) in timetab " :key="index" id="items">
                            <div v-if="item.professor_id == null">
                                <div class="row" id="empty">
                                    <div class="col-md-3">
                                        Classroom : {{ item.classroom_number }}
                                    </div>
                                    <div class="col-md-6" style="text-align: center;">
                                        <span>Empty</span>
                                    </div>
                                </div>
                            </div>
                            <div v-else>
                                <div class="row">
                                    <div class="col-md-3">
                                        Classroom : {{ item.classroom_number }}
                                    </div>
                                    <div class="col-md-3">
                                        {{ item.professor_name }}
                                    </div>
                                    <div class="col-md-3">
                                        {{ item.classgroup_name }}
                                    </div>
                                    <div class="col-md-3">
                                        Present : <input type="checkbox" name="checkbox" disabled :id="index">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</template>
<script>
export default {
    props:['timetable','presencetable'],
    data(){
        return{
            timetab: _.cloneDeep(this.timetable),
            presencetab: _.cloneDeep(this.presencetable),
            presence:{
                'day':this.timetable[0].day,
                'session':this.timetable[0].session_number,
                'department':this.timetable[0].department,
                'classroom_number':'',
                'professor_id':'',
                'professor_name':'',
                'classgroup_name':'',
                'presence':'',
            },
            tab:[],
        }
    },
    created(){

    },
    methods:{
        savePresence: function(){
            let index = 0;

            if (this.tab.length>0) {

            }else{
                do {
                    if (this.timetab[index].professor_id !=null) {
                        let p = _.cloneDeep(this.presence);
                        p.professor_id = this.timetab[index].professor_id;
                        p.professor_name = this.timetab[index].professor_name;
                        p.classgroup_name = this.timetab[index].classgroup_name;
                        p.classroom_number = this.timetab[index].classroom_number;
                        p.presence = document.getElementById(index).checked;
                        this.tab.push(p);
                    }
                    index++;
                }while(index < 12)
                if(confirm('Confirm Submition !')){
                    axios.post('/api/savePresence',this.tab);
                }
            }
        },
    },
}
</script>
<
<style scoped>
#bold{
    font-weight: bold;
    display: inline-block;
}
#empty{
    border: solid grey;
}
#items{
    padding: 5px;
}
</style>

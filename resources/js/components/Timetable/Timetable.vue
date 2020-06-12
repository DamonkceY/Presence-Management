<template>
    <div class="container">
        <div>
            <button data-toggle="modal" data-target="#AddSession">Add New Session</button>
            <div id="AddSession" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="AddSessionLabel">Add Session</h5>
                        </div>
                        <div class="modal-body">
                            <label for="department">Department</label>
                            <select class="custom-select" id="department" required>
                                <option @click="depS('Computer Science')" value="Computer Science">Computer Science</option>
                                <option @click="depS('Mechanical & Electrical engineering')" value="Mechanical & Electrical engineering">Mechanical & Electrical engineering</option>
                                <option @click="depS('Management')" value="Management">Management</option>
                            </select>

                            <label for="day">Day</label>
                            <select class="custom-select" id="day" required>
                                <option value="monday">Monday</option>
                                <option value="tuesday">Tuesday</option>
                                <option value="wednesday">Wednesday</option>
                                <option value="thursday">Thursday</option>
                                <option value="friday">Friday</option>
                                <option value="sunday">Sunday</option>
                            </select>

                            <label for="session">Session</label>
                            <select class="custom-select" id="session" required>
                                <option value="1">S1</option>
                                <option value="2">S2</option>
                                <option value="3">S3</option>
                                <option value="4">S4</option>
                                <option value="5">S5</option>
                                <option value="6">S6</option>
                            </select>

                            <label for="professor">Professors</label>
                            <select class="custom-select" id="professor" required>
                                <option v-for="(item,index) in this.professor" :key="index" :value="index">
                                    {{item.name}}
                                </option>
                            </select>
                            <label for="classrooms">Classroom</label>
                            <select class="custom-select" id="classroom" required>
                                <option v-for="(item,index) in this.classr" :key="index" :value="item.name">
                                    {{item.name}}
                                </option>
                            </select>
                            <label for="classgroup">Classgroup</label>
                            <select class="custom-select" id="classgroup" required>
                                <option v-for="(item,index) in this.classgroup" :key="index" :value="item.name">
                                    {{item.name}}
                                </option>
                            </select>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" @click="save" data-dismiss="modal">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <!-- ********************************************************* -->
                <show-timetable :timetab="this.timetab"></show-timetable>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props:['timetable','professor','classroom','classgroup'],
    data(){
        return{
            timetab: _.cloneDeep(this.timetable),
            t:{},
            classr:[],
        };
    },
    methods:{
        save: function(){
            let department = document.getElementById('department').value;
            let day = document.getElementById('day').value;
            let session = document.getElementById('session').value;
            let prof = document.getElementById('professor').value;
            let classroom = document.getElementById('classroom').value;
            let classgroup = document.getElementById('classgroup').value;
            let item = {
                'department':department,
                'day':day,
                'session_number':session,
                'professor_name':this.professor[prof].name,
                'professor_id':this.professor[prof].id,
                'classroom_number':classroom,
                'classgroup_name':classgroup
            };

            let x;
            for (let index = 0; index < this.timetab.length; index++) {
                if ((this.timetab[index].day == day)&&(this.timetab[index].session_number == session)&&(this.timetab[index].department == department)&&(this.timetab[index].classroom_number == classroom)) {
                    x = true;
                    break;
                }
            }
            if (x) {
                alert('There is a session registered in this time')
            }else{
                axios.post('/api/admin/timetable/save',item);
                this.timetab.push(item);
            }

            // console.log(this.timetab)

        },
        depS: function(string){
            this.classr=[];
            for (let index = 0; index < this.classroom.length; index++) {
                if (this.classroom[index].department == string) {
                    this.classr.push(this.classroom[index]);
                }
            }
        },
    },
    created(){

    }
}
</script>
<style>

</style>

<template>
    <div class="table-responsive">
        <h1>Monday</h1>

    </div>
</template>
<script>
export default {
    props:['timetab'],
    data: function(){
        return{
            // timetable: _.cloneDeep(this.timetab),
            monday: [],tuesday: [],wednesday: [],thursday: [],friday: [],sunday: [],
        };
    },
    methods:{

    },
    created(){
        for (let index = 0; index < this.timetab.length; index++) {
            if (this.timetab[index].day == 'monday') {
                this.monday.push(this.timetab[index]);
            }else if(this.timetab[index].day == 'tuesday'){
                this.tuesday.push(this.timetab[index]);
            }else if(this.timetab[index].day == 'wednesday'){
                this.wednesday.push(this.timetab[index]);
            }else if(this.timetab[index].day == 'thursday'){
                this.thursday.push(this.timetab[index]);
            }else if(this.timetab[index].day == 'friday'){
                this.friday.push(this.timetab[index]);
            }else if(this.timetab[index].day == 'sunday'){
                this.sunday.push(this.timetab[index]);
            }
        }
        // console.log(this.monday);
    },
}

</script>
<style scoped>

</style>

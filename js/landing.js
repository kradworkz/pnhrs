// when life is settled, load up the fun stuff
document.addEventListener('DOMContentLoaded', function () {
    
    new Vue({
        el: '#sg1',
        data: {
            title : '',
            show: true
        },
        methods: {
            openmodal(title){
                (this.show == false ) ? this.show = true : this.show = false;
                // this.title = title;
                // $("#openmodal").modal('show');
            },
        }
    })
})

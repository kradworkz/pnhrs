// when life is settled, load up the fun stuff
document.addEventListener('DOMContentLoaded', function () {
    new Vue({
        el: '#sg1',
        data: {
            type : 'main',
            link: '',
            date: ''
        },
        methods: {
            openhaha(val) {
               this.type = val;
            },

            openmodal(link,date){
                this.link = link;
                this.date = date;
                // $("#openmodal").modal('show');
                window.open(this.link, '_blank');
            },

            openmodal1(link,date){
                this.link = link;
                this.date = date;
                $("#openmodal").modal('show');
            },

            close(){
                $("#openmodal").modal('hide');
            },

            isMobile() {
                if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                    return true
                } else {
                    return false
                }
            }
        }
    })
})

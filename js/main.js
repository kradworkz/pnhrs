// when life is settled, load up the fun stuff
document.addEventListener('DOMContentLoaded', function () {
    new Vue({
        el: '#sg1',
        components: { 
            VueSlickCarousel : window['vue-slick-carousel'] 
        },
        data: {
            type : 'main',
            link: '',
            date: '',
            slickOptions: {
                infinite: true,
                slidesToShow: 1,
            },
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

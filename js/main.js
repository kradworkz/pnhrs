// when life is settled, load up the fun stuff

document.addEventListener('DOMContentLoaded', function () {
    new Vue({
        el: '#app',
        components: { 
            VueSlickCarousel : window['vue-slick-carousel'] 
        },
        data: {
            type : '',
            link: '',
            date: '',
            title: '',
            time: '',
            slickOptions: {
                infinite: true,
                slidesToShow: 1,
                speed: 1000,
                centerPadding: '100px'
            },
            lists: [],
            dates : ['August 09, 2021','August 10, 2021','August 11, 2021'],
            d1 : false,
            d2: false
        },

        created(){
            axios.get('./list.json')
            .then(response => {
                this.lists = response.data;
            })
            .catch((e) => {
                console.error(e)
            })
        },

        methods: {
            openhaha(val) {
               this.type = val;
            },

            openmodal(link){
                window.open(link, '_blank');
            },

            openmodal1(l){
                this.link = l.link;
                this.title = l.title;
                this.date = l.date;
                this.time = l.time;

                (l.option != '') ? '' : $("#openmodal").modal('show');
            },

            close(){
                $("#openmodal").modal('hide');
            },

            view(type){
                if(type == 'd1'){
                    if(this.d1 == true){
                        this.d1 =false;
                    }else{
                        this.d1 = true 
                        this.d2 = false;
                    }
                }else{
                    if(this.d2 == true){
                        this.d2 =false;
                    }else{
                        this.d2 = true;
                        this.d1 = false;
                    }
                }
            },

            desc(val){
                this.type = val;
                $("#desc").modal('show');
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

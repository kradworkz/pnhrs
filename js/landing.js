// when life is settled, load up the fun stuff
document.addEventListener('DOMContentLoaded', function () {
    new Vue({
        el: '#sg1',
        components: { 
            VueSlickCarousel : window['vue-slick-carousel'] 
        },
        data: {
            title : '',
            show: true,
            landmark: {},
            color: '#4ea8ff',
            slickOptions: {
                infinite: true,
                slidesToShow: 1,
                speed: 1000,
                centerPadding: '100px'
            },
            myStyle:{
                backgroundColor:"#16a085" 
            },
            image: "assets/images/landing/images/background.jpg",
            content: 'island',
            images : [],
            lists : [],
            lists2: []
        },

        created(){
          this.getL();
          this.getLi();
        },

        methods: {

            getL(){
                axios.get('./landmarks.json')
                .then(response => {
                    this.lists = response.data;
                })
                .catch((e) => {
                    console.error(e)
                });
            },

            getLi(){
                axios.get('./list.json')
                .then(response => {
                    this.lists2 = response.data;
                })
                .catch((e) => {
                    console.error(e)
                });
            },

            openmodal(id){
                (this.show == false ) ? this.show = true : this.show = false;
                // this.landmark = this.lists[id];
                this.color = '#eff2f7';
                this.landmark = this.lists.find(list => list.id === id)
                console.log(this.landmark);
                // $("#openmodal").modal('show');
            },

            view(type){
                this.content = type;
            },
            
            viewsession(images){
                this.images = images;
                $("#viewsession").modal('show');
            }
        }
    })
})



// when life is settled, load up the fun stuff
document.addEventListener('DOMContentLoaded', function () {
    new Vue({
        el: '#sg1',
        components: { 
            VueSlickCarousel : window['vue-slick-carousel'] 
        },
        data: {
            show : false,
            content: 'island',
            lists : [],
            lists2: [],
            images : [],
        },

        created(){
            this.getL();
            this.getLi();
        },
  
        methods: {
            view(type){
                this.content = type;
                (this.content != 'island') ? this.show = true : this.show = false;
            },

            getL(){
                axios.get('../landmarks.json')
                .then(response => {
                    this.lists = response.data;
                })
                .catch((e) => {
                    console.error(e)
                });
            },

            getLi(){
                axios.get('../list.json')
                .then(response => {
                    this.lists2 = response.data;
                })
                .catch((e) => {
                    console.error(e)
                });
            },

            viewsession(images){
                this.images = images;
                $("#viewsession").modal('show');
            },

            openmodal(id){
                
                // this.landmark = this.lists[id];
                this.landmark = this.lists.find(list => list.id === id)
                $("#openmodal").modal('show');
            },
        }
    })
})



<template>
    <div class="row">
       
            <div class="col-lg-4 col-md-6" v-for="blog in blogs" :key="blog.id">
               
                <div class="post-card">
                    <div class="post-card-image">
                        <a href="post-default.html">
                            <img  src="" alt="">
                        </a>
                    </div>
                    <div class="post-card-content">
                        <a href="blog-grid.html" class="categorie">Livestyle</a>
                        <h5>
                            <a href="post-default.html">{{ blog.title }}</a>
                        </h5>
                        <p v-html="blog.body">
                        </p>
                        <div class="post-card-info">
                            <ul class="list-inline">
                                <li>
                                    <a href="author.html">
                                        <img src="" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="author.html" v-if="blog.user_id === 1">Author</a>
                                </li>
                                <li class="dot"></li>
                                <li>{{ blog.created_at  }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
               
            </div>

  
    </div>


</template>

<script>

    import { mapGetters } from 'vuex';
    export default {
        name: 'blog-list-component',
        data() {
            return {
                blogs: []
            }
        },
        
        mounted() {
            // this.$store.dispatch('fetchBlogs');
            axios.get('/api/blogs')
                .then(res => {
                    this.blogs= res.data;
                    console.log(res.data);
                }).catch(err => {
                console.log(err)
            })
        },
        
        computed: {
            
        },
        methods: {
            
        }
    }

</script>

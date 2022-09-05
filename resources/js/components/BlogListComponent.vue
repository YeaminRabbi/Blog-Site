<template>
    <div class="row">
       
            <div class="col-lg-4 col-md-6" v-for="blog in blogs" :key="blog.id">
               
                <div class="post-card">
                    <div class="post-card-image">
                        <a @click="gotoBlog(blog.id)">
                            <img :src="blog.image" alt="IMG">
                        </a>
                    </div>
                    <div class="post-card-content">
                        <a href="#" class="categorie">{{ blog.category }}</a>
                        <h5>
                            <a @click="gotoBlog(blog.id)">{{ blog.title.substring(0,60)+'...'  }}</a>
                        </h5>
                        

                        <p v-html="blog.body.substring(0,80)+'...'" >
                        </p>
                        <div class="post-card-info">
                            <ul class="list-inline">
                                <li>
                                    <a href="#">
                                        <img :src="blog.author_image" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" v-if="blog.user_id === 1">Author</a>
                                </li>
                                <li class="dot"></li>
                                <li>{{ blog.published_at  }}</li>
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
            gotoBlog(blogid)
            {
                console.log(blogid);
                 window.location.href = "/blog/view/" + blogid;
            }
        }
    }

</script>

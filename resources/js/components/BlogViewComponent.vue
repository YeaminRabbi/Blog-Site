<template>
    <div class="col-lg-8 mb-20">

        <div class="post-single">
            <div class="post-single-image">
                <img :src="blog.image" alt="img">
            </div>
            <div class="post-single-content">
                <a href="" class="categorie">{{ this.blog?.category  }}</a>
                <h4> {{ this.blog?.title }}</h4>
                <div class="post-single-info">
                    <ul class="list-inline">
                        <li><a href="#"><img :src="blog.author_image " alt=""></a></li>
                        <li><a href="#" v-if="blog.user_id === 1">Author</a> </li>
                        <li class="dot"></li>
                        <li>January 15, 2021</li>
                        <!-- <li class="dot"></li>
                        <li>3 comments</li> -->
                    </ul>
                </div>
            </div>

            <div class="post-single-body">
                <div v-html="blog.body">
                </div>
            </div>

            <div class="post-single-footer">
                <div class="tags">
                    <ul class="list-inline">
                        <li>
                            <a href="blog-grid.html">Travel</a>
                        </li>
                        <li>
                            <a href="blog-grid.html">Nature</a>
                        </li>
                        <li>
                            <a href="blog-grid.html">tips</a>
                        </li>
                        <li>
                            <a href="blog-grid.html">forest</a>
                        </li>
                        <li>
                            <a href="blog-grid.html">beach</a>
                        </li>

                    </ul>
                </div>
                <div class="social-media">
                    <ul class="list-inline">
                        <li>
                            <a href="#" class="color-facebook">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="color-instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="color-twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="color-youtube">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="color-pinterest">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>





        <div class="widget mb-50">
            <div class="title">
                <h5>3 Comments</h5>

                
            </div>
            <ul class="widget-comments">
                <li class="comment-item" v-for="comment in fetchedcomments.comments" :key="comment.id">
                    <img :src="comment.author_image" alt="">
                    <div class="content">
                        <ul class="info list-inline">
                            <li>{{ comment.name }}</li>
                            <li class="dot"></li>
                            <li> {{ comment.published_at }}</li>
                        </ul>
                        <p>{{comment.text}}</p>
                        <div><a href="#" class="link"> <i class="arrow_back"></i> Reply</a></div>
                    </div>
                </li>
                
            </ul>


            <div class="title">
                <h5>Leave a Comment</h5>
            </div>
            <!-- {{ fetchedcomments }}
            
            
            -->
            
            
            <form @submit.prevent="addComment(blog.id)" class="widget-form" action="#" method="POST"
                id="main_contact_form">

                <p>Your email adress will not be published ,Requied fileds are marked*.</p>
                <div class="alert alert-success contact_msg" style="display: none" role="alert">
                    Your message was sent successfully.
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea name="message" id="CommentMessage" cols="30" rows="5" class="form-control"
                                placeholder="Message*" required="required" v-model="text" ref="text"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" id="CommentName" class="form-control" placeholder="Name*"
                                required="required" v-model="name" ref="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" name="email" id="CommentEmail" class="form-control" placeholder="Email*"
                                v-model="email" ref="email">
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn-custom" @click.prevent="addComment(blog.id)">
                            Post Comment
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</template>

<script>
    import {
        mapGetters
    } from 'vuex';
    export default {

        name: 'blog-view-component',
        data() {
            return {
                blog:[],
                fetchedcomments: [],
                text: '',
                name: '',
                email: ''
            }
        },
        props: {
            id: Number
        },
        created() {
            axios.get('/api/blogs/' + this.id)
                .then(res => {
                    this.blog = res.data.data;
                    this.getComments(this.id);
                }).catch(err => {
                    console.log(err)
                });          

        },

        mounted() {

        },

        computed: {

        },
        methods: {
            addComment(blog_id) {

                const comment = {};
                comment.text = this.text;
                comment.name = this.name;
                comment.email = this.email;
                comment.blog_id = blog_id;

                axios.post('http://127.0.0.1:8000/api/comments', comment)
                    .then(res => {
                        // console.log(res.data);
                    }).catch(err => {
                        console.log(err.response.data)
                    });

                this.getComments(this.id);
                this.resetForm();
            },

            getComments(blog_id) {
                axios.get('http://127.0.0.1:8000/api/comments/' + blog_id)
                    .then(res => {
                        this.fetchedcomments = res.data;
                    }).catch(err => {
                        console.log(err.response.data)
                    });
            },
            resetForm()
            {
                this.name ='';
                this.text = '';
                this.email='';

            }
        }
    }

</script>

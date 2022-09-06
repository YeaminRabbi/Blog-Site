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
                        <li><a href="#"><img :src="blog.author_image "
                                    alt=""></a></li>
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
       

      

        <!--widget-comments-->
        <!-- <div class="widget mb-50">
            <div class="title">
                <h5>3 Comments</h5>
            </div>
            <ul class="widget-comments">
                <li class="comment-item">
                    <img src="assets/img/user/1.jpg" alt="">
                    <div class="content">
                        <ul class="info list-inline">
                            <li>Mohammed Ali</li>
                            <li class="dot"></li>
                            <li> January 15, 2021</li>
                        </ul>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus at doloremque adipisci
                            eum placeat
                            quod non fugiat aliquid sit similique!
                        </p>
                        <div><a href="#" class="link"> <i class="arrow_back"></i> Reply</a></div>
                    </div>
                </li>
                <li class="comment-item">
                    <img src="assets/img/author/1.jpg" alt="">
                    <div class="content">
                        <ul class="info list-inline">
                            <li>Simon Albert</li>
                            <li class="dot"></li>
                            <li> January 15, 2021</li>
                        </ul>

                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus at doloremque adipisci
                            eum placeat quod non
                            fugiat aliquid sit similique!
                        </p>
                        <div>
                            <a href="#" class="link">
                                <i class="arrow_back"></i> Reply</a>
                        </div>
                    </div>
                </li>
                <li class="comment-item">
                    <img src="assets/img/user/2.jpg" alt="">
                    <div class="content">

                        <ul class="info list-inline">
                            <li>Adam bobly</li>
                            <li class="dot"></li>
                            <li> January 15, 2021</li>
                        </ul>

                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus at doloremque adipisci
                            eum placeat
                            quod non fugiat aliquid sit similique!
                        </p>

                        <div>
                            <a href="#" class="link">
                                <i class="arrow_back"></i> Reply</a>
                        </div>
                    </div>
                </li>
            </ul>
         
            
            <div class="title">
                <h5>Leave a Reply</h5>
            </div>
            <form class="widget-form" action="#" method="POST" id="main_contact_form">
                <p>Your email adress will not be published ,Requied fileds are marked*.</p>
                <div class="alert alert-success contact_msg" style="display: none" role="alert">
                    Your message was sent successfully.
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea name="message" id="message" cols="30" rows="5" class="form-control"
                                placeholder="Message*" required="required"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name*"
                                required="required">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email*"
                                required="required">
                        </div>
                    </div>
                    <div class="col-12 mb-20">
                        <div class="form-group">
                            <input type="text" name="website" id="website" class="form-control" placeholder="website">
                        </div>
                        <label>
                            <input name="name" type="checkbox" value="1" required="required">
                            <span>save my name , email and website in this browser for the next time I comment.</span>
                        </label>
                    </div>
                    <div class="col-12">
                        <button type="submit" name="submit" class="btn-custom">
                            Post Comment
                        </button>
                    </div>
                </div>
            </form>
        </div> -->
    </div>
</template>

<script>

    import { mapGetters } from 'vuex';
    export default {

        name: 'blog-view-component',
        data() {
            return {
                blog: []
            }
        },
        props:{
            id: Number
        },
        created() {
                axios.get('/api/blogs/'+this.id)
                    .then(res => {
                        this.blog= res.data.data;
                        // console.log(this.blog);
                    }).catch(err => {
                    console.log(err)
                });
            

        },

        mounted() {
            
           
        },
        
        computed: {
            
        },
        methods: {
            
        }
    }

</script>

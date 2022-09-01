<template>
     <div class="row">       
        <div class="col-md-6">
            <form  @submit="createBlog()" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" v-model="title"  ref="title">
                </div>
                 <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control"  @change="onChange" ref="image">
                </div>
                <div class="form-group">
                    <label>Detais</label>
                   <textarea v-model="body" name="body"  class="form-control" cols="30" rows="10" ref="body" ></textarea>
                </div>
              
                <button type="submit" @click.prevent="createBlog()" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</template>


<script>
    import {ref} from 'vue'
        export default {
            name: "createBlog",
            data() {
                return {
                    image: '',
                    title: '',
                    body: ''
                }
            },
            methods: {
                resetForm() {
                    this.$refs["body"].value = "";
                    this.$refs["title"].value = "";
                    this.$refs["image"].value = "";
                },
                onChange(e){
                     this.image = e.target.files[0];
                },
                createBlog() {
                    
                    const config = {
                        headers: {
                            'content-type': 'multipart/form-data'
                        }
                    }

                    let blog = new FormData();
                    blog.append('image', this.image);
                    blog.append('title', this.title);
                    blog.append('body', this.body); 

                    this.$store.dispatch('createBlog', blog, config);
                    this.resetForm();
                }
            },
            computed: {
                // isValid() {
                //     return this.blog.title !== '' && this.blog.body !== ''
                // }
            }
        }
    </script>
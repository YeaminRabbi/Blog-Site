<template>
     <div class="row">       
        <div class="col-md-6">
            <form  @submit="createBlog(blog)">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" v-model="blog.title"  ref="title">
                </div>
                <div class="form-group">
                    <label>Detais</label>
                   <textarea v-model="blog.body" name="body"  class="form-control ckeditor" cols="30" rows="10" ref="body" ></textarea>
                </div>
              
                <button type="submit" @click.prevent="createBlog(blog)" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</template>


<script>
        export default {
            name: "createBlog",
            data() {
                return {
                    blog: {
                        title: '',
                        body: ''
                    }
                }
            },
            methods: {
                resetForm() {
                    this.$refs["body"].value = "";
                    this.$refs["title"].value = "";
                },
                createBlog(blog) {
                    this.$store.dispatch('createBlog', blog);
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
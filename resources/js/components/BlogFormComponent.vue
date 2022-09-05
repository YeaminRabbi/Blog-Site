<template>
     <div class="row">       
        <div class="col-md-6">
            <form  @submit="createBlog()" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" v-model="title"  ref="title">
                </div>
                <div class="form-group">
                     <label>Category</label>
                    <select class="form-control" v-model="category" ref="category">
                        
                        <option value="fashion">fashion</option>
                        <option value="entertainment">entertainment</option>
                        <option value="sports">sports</option>
                        <option value="technology">technology</option>
                        <option value="business">business</option>
                        <option value="youth">youth</option>
                        <option value="society">society</option>
                    </select>
                </div>
                 <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control"  @change="onChange" ref="image">
                </div>
                <div class="form-group">
                    <label>Detais</label>
                    <ckeditor :editor="editor" v-model="body" :config="editorConfig" value="" ref="body"></ckeditor>
                   <!-- <textarea v-model="body" name="body"  class="form-control" cols="30" rows="10" ref="body" ></textarea> -->
                </div>
              
                <button type="submit" @click.prevent="createBlog()" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</template>


<script>
    import {ref} from 'vue';
     import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
        export default {
            name: "createBlog",
            data() {
                return {
                    image: '',
                    title: '',
                    category: '',
                    editor: ClassicEditor,
                    body: '',
                    editorConfig: {
                        // The configuration of the editor.
                    }
                }
            },
            methods: {
                resetForm() {
                    this.$refs["title"].value = "";
                    this.$refs["image"].value = "";
                    this.$refs["category"].value = "";
                    // this.$refs["body"].value = "Content";
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
                    blog.append('category', this.category); 

                    this.$store.dispatch('createBlog', blog, config);
                    // this.resetForm();
                    window.location.reload();
                }
            },
            computed: {
                // isValid() {
                //     return this.blog.title !== '' && this.blog.body !== ''
                // }
            }
        }
    </script>
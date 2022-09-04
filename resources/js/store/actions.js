// import Vue from 'vue';

// let loader = null;
// function showLoader(text = 'loading'){
//     loader = Vue.prototype.$loading({
//         lock:true,
//         text:text,
//         spinner: 'el-icon-loading',
//         background: "rgba(255,255,255,0.85)",
//     });
// }

// function hideLoader(){
//     loader.close();
// }

// export const getStudents = ({commit}, payload) => {
//      let url = `/get-studentsdata`;

     
//       axios.post(url, payload)
//       .then(res => {
//             commit('setTableData', res.data);
//         });
// }

// export const saveStudent = ({commit}, payload) => {
//     let url = `/save-student`;

//     showLoader('Saving Student');
//     axios.post(url, payload).then(res => {
//         Vue.prototype.$notify({
//             title:"Success",
//             message:"Student Created Successfully!",
//             type: "success",
//         });

//         hideLoader();
//         windows.location.href = '/add-students';
//     });
// }


// export const updateStudent = ({commit}, payload) => {
//     let url = `/update-student/${payload.id}`;

//     showLoader('Updating Student Information');
//     axios.put(url, payload.model).then(res => {
//         Vue.prototype.$notify({
//             title:"Success",
//             message:"Student Updated Successfully!",
//             type: "success",
//         });

//         hideLoader();
//         windows.location.href = '/students';
//     });
// }


// export const deleteStudent = ({commit}, payload) => {
//        let url = `/delete-student/${payload.id}`;
//     showLoader('Deleting Student Information');
//     axios.get(url, payload.model).then(res => {
//         Vue.prototype.$notify({
//             title:"Success",
//             message:"Student Deleted Successfully!",
//             type: "Success",
//         });

//         hideLoader();
//         windows.location.href = '/students';
//     });
// }




// export const saveBlog = ({commit}, payload) => {
//     let url = `/blog-insert`;
   
//     axios.post(url, payload).then(res => {
//         console.log('Blog Created Successfully!');
//         windows.location.href = '/blog-create';
//     });
    
// }
// export const getStudents = ({commit}, payload) => {
//      let url = `/get-studentsdata`;

     
//       axios.post(url, payload)
//       .then(res => {
//             commit('setTableData', res.data);
//         });
// }
// export const getBlogs = ({commit}, payload) => {
//      let url = `http://127.0.0.1:8000/api/blogs`;

     
//       axios.get(url, payload)
//       .then(res => {
//             console.log(res.data);

//             // commit('blogData', res.data);
//         });
// }
let actions = {
        createBlog({commit}, blog, config) {
            axios.post('http://127.0.0.1:8000/api/blogs', blog, config)
                .then(res => {
                    console.log(res.data);
                    
                    // commit('CREATE_BLOG', res.data);
                }).catch(err => {
                console.log(err)
            })
          
        },
        fetchBlogs({commit}) {
            axios.get('/api/blogs')
                .then(res => {
                    commit('FETCH_BLOGS', res.data)
                    console.log(res.data);
                }).catch(err => {
                console.log(err)
            })
        },
        deleteBlog({commit}, blog) {
            axios.delete(`/api/blogs/${blog.id}`)
                .then(res => {
                    if (res.data === 'ok')
                        commit('DELETE_BLOG', blog)
                }).catch(err => {
                console.log(err)
            })
        }
    }
    
    export default actions
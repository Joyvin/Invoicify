<template>
    <div>
        <div class="d-flex ms-sm-1 ps-1 ps-sm-3 row">
            <div class="col">
                <h4 class="text-dark"><strong>My Files</strong></h4>
            </div>
        </div>
        <div class="d-block d-sm-flex ms-0 ms-sm-2 my-3 ps-sm-3 row" v-if="!dots" style="">
            <div class="col-auto p-1">
                <form id="uploadFile" enctype="multipart/form-data">
                    <input type="hidden" name="_token" :value="token">
                    <input id="files" name="files" type="file" @change="sendFile()" multiple hidden>
                </form>
                <button class="bg-white btn rounded-3 shadow" @click="openExplorer('file')">
                    <i class="bigi fa fa-file-upload me-2 text-primary"></i>Upload Files
                </button>
                
            </div>
            <div class="col-auto p-1">
                <form id="uploadFolders" enctype="multipart/form-data">
                    <input type="hidden" name="_token" :value="token">
                    <input type="file" name="files" id="folders" @change="sendFolder()" multiple directory="" webkitdirectory="" mozdirectory="" hidden>
                </form>
                <button class="bg-white btn rounded-3 shadow" @click="openExplorer('folder')">
                    <i class="bigi fa fa-folder-open me-2 text-primary"></i>Upload Folder
                </button>
                
            </div>
            <div class="col-auto p-1">
                <button class="bg-white btn rounded-3 shadow" @click="createFolder()">
                    <i class="bigi fa fa-folder-plus me-2 text-primary"></i>Create Folder
                </button>
            </div>
            <div class="col-auto p-1 me-5 ms-auto">
                <button class="align-items-center bg-white btn d-flex rounded-3 shadow">
                    <i class="bigi mdi mdi-trash-can-outline me-2 text-danger"></i>Delete
                </button>
            </div>
        </div>
        <div class="row ps-sm-4 mb-3" v-if="!dots">
            <div class="d-flex">
                <div class="cursor-pointer" v-for="(crumbs, index) in bread" :key="index">
                    <span class="pointer mx-2" @click="changeDir(crumbs.url)">{{crumbs.name}}</span>
                    <i v-if="index != bread.length - 1" class="fas fa-chevron-right"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-md-3">
        <div class="col">
            <div class="card round-30 min-vh-100">
                <div v-if="dots" style="position: absolute; padding: 30% 50%">
                    <div class="dot-flashing"></div>
                </div>
                <div v-if="!dots" class=" card-body rounded min-vh-100 px-0 p-md-3">
                    <div class="table-responsive table-borderless min-vh-100">
                        <div class="align-items-center col-11 col-lg-3 col-md-4 d-flex ms-3 my-2 px-2 py-1 round-30" style="border: 1px solid #ced4da">
                            <i class="me-2 text-black-50 uil-search"></i>
                            <input type="search" @input="searchDocs()" v-model="searchVal" class="border-0 w-100" placeholder="Search" style="outline: none;">
                        </div>
                        <table id="allDocs" class="table table-borderless table-hover pointer">
                            <thead>
                                <tr>
                                    <th class="col-1 no-sort pe-0"><input @change="ctrlBox()" v-model="ctrl" class="bigi form-check-input border-primary border-1" id="ctrlBox" type="checkbox" style="border-radius:1em" /></th>
                                    <th>Name</th>
                                    <th class="col-2 no-sort">Settings</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(dir, index) in dirs" :key="index">
                                    <td><input class="bigi altBox form-check-input border-primary border-1" type="checkbox" style="border-radius:1em" /></td>
                                    <td class="d-flex" @click="changeDir(dloc[index])"><i style="font-size: 1.5em;" class="me-2 bigi text-primary fas fa-folder"></i>{{dir}}</td>
                                    <td>
                                        <i data-bs-toggle="dropdown" data-bs-target="#drop-settings" class="bigi fa-ellipsis-h fas"></i>
                                        <div class="dropdown">
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" id="drop-settings" style="">
                                                <a class="dropdown-item" @click="renameFile(dloc[index])" href="#">Rename</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr v-for="(file, index) in files" :key="index">
                                    <td><input class="bigi altBox form-check-input border-primary border-1" type="checkbox" style="border-radius:1em" /></td>
                                    <td><i class="me-2 bigi text-primary far fa-file-pdf"></i>{{file}}</td>
                                    <td>
                                        <i data-bs-toggle="dropdown" data-bs-target="#drop-settings" class="bigi fa-ellipsis-h fas"></i>
                                        <div class="dropdown">
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" id="drop-settings" style="">
                                                <a class="dropdown-item" @click="renameFile(floc[index])" href="#">Rename</a>
                                                <a class="dropdown-item text-danger" href="#" @click="askConfirm(floc[index])">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: 'Storage',

    props: ['user', 'project'],
    
    data(){
        return{
            token: getToken(),
            currDir: this.user.name,
            dirs: '',
            files: '',
            dloc: '',
            floc: '',
            ctrl: '',
            dots: true,
            del: false,
            tabs: '',
            searchVal: '',
            bread: [{name: 'Root', url: this.user.name}],
        }
    },

    methods: {
        async getDocs(){
            var form = {_token: this.token, dir: this.currDir}
            const response = await axios.post(route("storage.getDocs"), form).then(function(e){return e.data})
            this.cleanDocs(response)
        },

        cleanDocs(docs){
            var temp_dirs = []
            var temp_files = []

            $.each(docs.files, function(index, value){
                temp_files.push(value.split('/').pop())
            })
            this.files = temp_files

            $.each(docs.dirs, function(index, value){
                temp_dirs.push(value.split('/').pop().split('-')[0])
            })
            this.dirs = temp_dirs
            this.dloc = docs.dirs
            this.floc = docs.files
        },

        async changeDir(dir){
            this.dots = true
            if(this.dots){
            this.currDir = dir
            console.log(dir)
            await this.getDocs()

            if(dir != this.user.name){
                var temp_crumb = this.currDir.split('/')
                temp_crumb.splice(temp_crumb.indexOf(this.user.name), 1)
                var temp_bread = [{name: 'Root', url: this.user.name}]

                for(var i = 0; i < temp_crumb.length; i++){
                    var url = this.user.name + '/' + temp_crumb.slice(0, i+1).join('/')
                    var name = temp_crumb[i]
                    temp_bread.push({name: name, url: url})
                }

                this.bread = temp_bread
                console.log(this.bread)
            }
            else{
                this.bread = [{name: 'Root', url: this.user.name}]
            }
            }
            this.dots = false
            $("#allDocs").DataTable({ "paging": false, "info": false })
        },

        async askConfirm(file){
            var form = {_token: this.token, file: file, prj: this.user.name}
            var res = Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#34c38f',
                cancelButtonColor: '#f46a6a',
                confirmButtonText: 'Yes, delete it!'
                })
                .then((result) => {
                    
                    if(result.isConfirmed){
                        axios.post(route("storage.deleteFile"), form).then(
                            Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                            ),
                            this.changeDir(this.currDir)
                        )
                    }
                })
        },

        async renameFile(file){
            var tfname = file.split('/')
            var fname = tfname[tfname.length - 1].split('.')[0]
            var ext = tfname[tfname.length - 1].split('.')[1] ? tfname[tfname.length - 1].split('.')[1] : ''
            var doc = ext ? 'File' : 'Folder'
            const { value: val } = await Swal.fire({
                title: 'Rename ' + doc,
                input: 'text',
                inputLabel: 'Enter '+doc.toLowerCase()+' name',
                inputValue: fname,
                showCancelButton: true,
                inputValidator: (value) => {
                    if (!value) {
                        return 'You need to write something!'
                    }
                    else if(!/^[a-zA-Z0-9_]*$/.test(value)){
                        return doc + ' name must only contain letters, strings, and underscore'
                    }
                }
            })
            if(val){
                tfname.pop()
                var newName = ext ? tfname.join('/') + '/' + val + '.' + ext : tfname.join('/') + '/' + val
                var form = {_token: this.token, oldName: file, newName: newName}
                axios.post(route("storage.renameFile"), form).then(
                            Swal.fire(
                            'Updated!',
                            'Your '+doc.toLowerCase()+' has been renamed.',
                            'success'
                            ),
                            this.changeDir(this.currDir)
                        )
            }
        },

        openExplorer(doc){
            if(doc == 'file'){
                $("#files").click()
                $("#files").val('')
            }
            else if(doc == 'folder'){
                $("#folders").click()
                $("#folders").val('')
            }
        },

        async sendFile(){
            if($('#files').val() != ''){
                var formData = new FormData(document.getElementById("uploadFile"))
                let TotalFiles = $('#files')[0].files.length;
                let files = $('#files')[0];
                for (let i = 0; i < TotalFiles; i++) {
                formData.append('files' + i, files.files[i]);
                }
                formData.append('TotalFiles', TotalFiles);
                formData.append('parent', this.currDir);
                this.dots = true
                var rep = await axios.post(route('storage.uploadFile'), formData).then((e)=>{return e.status})
                if(rep == 200){
                    Swal.fire(
                            'Uploaded!',
                            'Your files have been uploaded.',
                            'success'
                            ),
                    this.changeDir(this.currDir)
                }
            }
        },

        async sendFolder(){
            if ($('#folders').val() != ''){
                var formData = new FormData(document.getElementById("uploadFolders"));
                let TotalFiles = $('#folders')[0].files.length;
                let files = $('#folders')[0];
                for (let i = 0; i < TotalFiles; i++) {
                    formData.append('files' + i, files.files[i]);
                }
                formData.append('TotalFiles', TotalFiles);
                formData.append('parent', this.currDir);
                this.dots = true
                var rep = await axios.post(route('storage.uploadFile'), formData).then((e)=>{return e.status})
                if(rep == 200){
                    Swal.fire(
                            'Uploaded!',
                            'Your Folder has been uploaded.',
                            'success'
                            ),
                    this.changeDir(this.currDir)
                }
            }
        },

        async createFolder(){
            const { value: val } = await Swal.fire({
                title: 'New Folder',
                input: 'text',
                inputLabel: 'Enter folder name',
                inputPlaceholder: 'Enter folder name',
                showCancelButton: true,
                inputValidator: (value) => {
                    if (!value) {
                        return 'You need to write something!'
                    }
                    else if(!/^[a-zA-Z0-9_]*$/.test(value)){
                        return 'File name must only contain letters, strings, and underscore'
                    }
                }
            })

            if(val){
                var dir = this.currDir ? this.currDir + '/' + val : val
                this.dots = true
                var rep = await axios.post(route('storage.createFolder'), {_token: this.token, dir: dir}).then((e)=>{return e.status})
                if(rep == 200){
                    Swal.fire(
                            'Created!',
                            'Folder created succesfully',
                            'success'
                            ),
                    this.changeDir(this.currDir)
                }
            }
        },

        ctrlBox(){
            $(".altBox").prop('checked', this.ctrl)
        },

        searchDocs(){
            this.tabs.search(this.searchVal).draw()
            $(".no-sort").removeClass("sorting_asc")
        }
    },

    mounted(){
        this.changeDir(this.currDir)
    },

    updated(){
        this.tabs = $("#allDocs").DataTable({ "paging": false, "retrieve": true, "info": false,  columnDefs: [
            {
                orderable: false,
                targets: "no-sort"
            }
        ] 
        })
        $(".no-sort").removeClass("sorting_asc")
        $(".dataTables_filter").addClass("hidden")
    }
}
</script>

<style>

</style>
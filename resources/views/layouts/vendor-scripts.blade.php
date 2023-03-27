<!-- JAVASCRIPT -->
 <script src="{{ URL::asset('/assets/libs/jquery/jquery.min.js')}}"></script>
 <script src="{{ URL::asset('/assets/libs/metismenu/metismenu.min.js')}}"></script>
 <script src="{{ URL::asset('/assets/libs/simplebar/simplebar.min.js')}}"></script>
 <script src="{{ URL::asset('/assets/libs/node-waves/node-waves.min.js')}}"></script>
 <script src="{{ URL::asset('/assets/libs/waypoints/waypoints.min.js')}}"></script>
 <script src="{{ URL::asset('/assets/libs/jquery-counterup/jquery-counterup.min.js')}}"></script>
<script src="{{ URL::asset('/assets/libs/toastr/toastr.min.js')}}"></script>
<script src="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js')}}"></script>
<script src="{{ URL::asset('/assets/libs/table-edits/table-edits.min.js')}}"></script>

 @yield('script')
 
 @vite('resources/js/app.js')

 <!-- App js -->
 <script src="{{ URL::asset('/assets/js/app.min.js')}}"></script>
 <script>

    function assetPath(path){
        return $("meta[name=asset-path]").attr('content') + 'assets' + path;
    }

    function getToken(){
        return $("meta[name=csrf-token]").attr('content');
    }

 </script>
 
 @yield('script-bottom')
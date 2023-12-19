        <!DOCTYPE html>
        <html lang="en">
             @include('layout.header')
                    <body class="sb-nav-fixed">
             @include('layout.navbar')
                    <div id="layoutSidenav">
                    <div id="layoutSidenav_nav">
             @include('layout.sidebar')
                    </div>
                    <div id="layoutSidenav_content">
                  @yield('container') 
            @include('layout.footer')
                    </div>
                </div>


                
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
                <script src="public/scripts.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
                <script src="assets/demo/chart-area-demo.js"></script>
                <script src="assets/demo/chart-bar-demo.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
                <script src="{{asset('datatables-simple-demo.js')}}"></script>
            </body>
        </html>

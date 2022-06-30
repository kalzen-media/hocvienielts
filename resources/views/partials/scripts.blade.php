
    <!-- Modal Form -->
    <div id="modal-form" class="modal-form">
        <p class="modal-form-ttl">Contact Us</p>
        <form action="{{route('contact')}}" method="POST" class="">
            @csrf
            <input data-required="text" type="text" placeholder="Họ tên" name="name">
            <input data-required="text" type="text" placeholder="Số điện thoại" name="mobile">
            <textarea placeholder="Lời nhắn" name="content"></textarea>
            <input type="submit" value="Gửi">
        </form>
    </div>
    <script src="{{ asset('frontend/js/jquery-1.12.3.min.js') }}"></script>
    <script src="{{ asset('frontend/js/fancybox/fancybox.js') }}"></script>
    <script src="{{ asset('frontend/js/fancybox/helpers/jquery.fancybox-thumbs.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.flexslider-min.js') }}"></script>
    <script src="{{ asset('frontend/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.fractionslider.min.js') }}"></script>
    <script src="{{ asset('frontend/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        toastr.options.timeOut = 0;
        toastr.options.progressBar = true;
        toastr.options.extendedTimeOut = 0;
    </script>
    @if (session('message'))
        <script>
            $(function(){
                toastr['success']('{{ session('message') }}')
            })
        </script>
    @endif
    <script>
        "use strict";
        // Range Slider
        $(document).ready(function() {
            var $range_cost = $("#range_cost");
            $range_cost.ionRangeSlider({
                type: "double",
                grid: true,
                min: 0,
                max: 20000,
                from: 200,
                to: 14000,
                prefix: "$",
            });
            $range_cost.on("change", function() {
                var $this = $(this)
                    , value = $this.prop("value").split(";");

                $('#range_cost_ttl').html("$" + value[0] + " - $" + value[1]);
            });
            var $range_year = $("#range_year");
            $range_year.ionRangeSlider({
                type: "double",
                grid: true,
                min: 1990,
                max: 2016,
                from: 2013,
                to: 2016,
            });
            $range_year.on("change", function() {
                var $this = $(this)
                    , value = $this.prop("value").split(";");

                $('#range_year_ttl').html(value[0] + " - " + value[1]);
            });
        });
    </script>
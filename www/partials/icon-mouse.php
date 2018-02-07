<a href="#" class="icon icon-mouse" data-scroll="#lenndy"></a>
<script type="text/javascript">
    $(document).ready(function(){
        $('[data-scroll]').click(function(){
            var scrollTo = $(this).data('scroll');
            $('html, body').animate({ scrollTop:  $(scrollTo).offset().top }, 'slow');
        });
    });
</script>

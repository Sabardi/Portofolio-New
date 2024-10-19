<!DOCTYPE html>
<html lang="en">
@include('front.include.meta')
@include('front.include.styles')

<body> 
    <!---header-and-banner-section-->
    <div class="header-and-banner-con w-100 float-left position-relative">
        <div class="header-and-banner-inner-con">
            @include('front.include.navbar')

        </div>
    </div>
    <!---header-and-banner-section-->
    {{ $slot }}
    @include('front.include.contact')
    @include('front.include.footer')
    @include('front.include.script')
</body>

</html>

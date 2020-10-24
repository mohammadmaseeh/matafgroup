@extends('layouts.layoutother')
@section('content')

<div class="in_toppart">
    <div class="in_banner"><img src="{{asset('svg/hbanner-future.jpg')}}" border="0"></div>
    <div class="in_topcont">
        <div class="inlogo"><a href="../index-2.html"><img src="../images/logo.png" border="0"></a></div><div class="links" style="display:none;"> <a href="http://www.air90suk.info/">Cheap Nike Air Max 90 UK</a> <a href="http://www.fireshoestore.com/">Official Adidas NMD R1 Online</a> <a href="http://www.jerseyfanstore.com/">New Nike NBA jersey</a></div>			<div class="bread"><a href="../index-2.html">Home</a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;About Us&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;Policies</div>
        <div class="intitle">About Us</div>
    </div>
    
    <div class="in_links_back"></div><div class="links" style="display:none;"> <a href="http://www.fireshoestore.com/">Official Adidas NMD R1 Online</a> <a href="http://www.jerseyfanstore.com/">New Nike NBA jersey</a> <a href="http://www.air90suk.info/">Cheap Nike Air Max 90 UK</a></div>
<div class="smallnavdiv">
<div class="smallnavcont">
    <a class="smallnav" href="javascript:;"></a>
</div>

<ul class="in_links">
    <li><a href="{{route('about.us')}}">Profile</a></li>
        <li><a href="{{route('history')}}">History</a></li>
        <li><a href="{{route('philosophy')}}">Philosophy</a></li>
        <li><a href="{{route('csr')}}">CSR</a></li>
        <li><a href="{{route('our.team')}}">Team</a></li>
        <li><a href="{{route('quality.policy')}}">Quality Policy</a></li>
        <li><a href="{{route('future.plan')}}">Future Plan</a></li>
        <li><a href="{{route('policies')}}">Policies</a></li>
    </ul>
</div>		
</div>

<div class="in_container">
    <div class="in_padding">
        <div id="text">
            <div class="title">Policies </div>
            
            <div class="subtitle1">CSR Policy</div>
            <p>Size: 2.66MB&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="{{asset('pdf/csr-policy.pdf')}}" target="_blank" class="pdf">Download PDF</a></p>
            <hr />
            
            <div class="subtitle1">Vigil Mechanism / Whistle Blower Policy </div>
            <p>Size: 3.8MB&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="{{asset('pdf/vigil-mechanism-whistle-blower-policy.pdf')}}" target="_blank" class="pdf">Download PDF</a></p>
            <hr />
            
            <div class="subtitle1">Policy on Prevention of Sexual Harassment at Workplace </div>
            <p>Size: 2.73MB&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="{{asset('pdf/policy-prevention-sexual-harassment.pdf')}}" target="_blank" class="pdf">Download PDF</a></p>
            <hr />
            
        </div>
    </div>
</div>

</div>
@endsection
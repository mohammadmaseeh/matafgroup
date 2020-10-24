@extends('layouts.layoutother')
@section('content')
<div class="in_toppart">
    <div class="in_banner"><img src="{{asset('svg/hbanner-history.jpg')}}" border="0"></div>
    <div class="in_topcont">
        <div class="inlogo"><a href=""><img src="" border="0"></a></div>
    <div class="bread"><a href="{{url('/')}}">Home</a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;About Us&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;History</div>
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
            <div class="title">History</div>
            <p>Supertech Limited was founded in 1988. The company has developed some of the modern and finest residential and commercial complexes in Delhi, National Capital Region (NCR) and new urban settlements like Meerut, Moradabad, Haridwar and Rudrapur. Since inception, the company has been responsible for the development of many of Delhi's other well known urban housing colonies.</p>
            <p>Company's foray into real estate and construction industry led to the creation of various landmark real estate projects - Crossings Republik, Emerald Court, Avant-Garde, Shopprix Mall are few examples.</p>
            <p>Supertech has crafted architectural masterpieces like Emerald Court at Sector 93, NOIDA, high end residential project with 7 star living facilities  and a 7,00000 square feet commercial hub at 34 Pavilion, Sector-34 NOIDA and Uttarakhand's largest mall-The Pentagon Mall in Haridwar. </p>
        
            <p>Supertech has tied up with international hotel chains to set up 5 star hotels at Rudrapur, Haridwar, Meerut and NOIDA. The company is also tieing-up with a major health care to open a medical facility in different format at its projects.</p>

        </div>
    </div>
</div>
@endsection
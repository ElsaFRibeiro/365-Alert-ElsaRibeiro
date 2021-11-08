{{-- Extending the template --}}
@extends('layouts.mytemplate')

{{-- Setting the Page title --}}
@section('title', 'Terms and Conditions')

{{-- CSS Link --}}
@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/terms.css'); }}">
@endsection

{{-- Main Content Section --}}
@section('content')
<h1 id="terms_title">Terms and Conditions</h1>
<br> <br>
<div class="form-group">
    <h2 id="we_are_title" >Who we are</h2>
    <br>
    <p>The flood information service is managed by the Environment Agency and will be referred to as ‘we’ from now on. The web pages and the services they operate will be referred to as ‘the site'.</p>
    <br>
    <hr>
    <br>
    <h2>Using the site</h2>
    <br>
    <p>You agree to use the site only for lawful purposes. You must also use it in a way that doesn’t infringe the rights of, or restrict or inhibit the use and enjoyment of, the site by anyone else. <br> <br>

        We update the site all the time. We can change or remove content at any time without notice. <br> <br>

        Most content and data on the site is subject to Environment Agency copyright protection and is published under the Open Government Licence (OGL), unless we indicate otherwise. <br> <br>

        Our logo is exempt from the OGL, except when it forms an integral part of a document or dataset. <br> <br>

        If any content isn’t subject to Environment Agency copyright protection or published under the OGL, we’ll usually credit the author or copyright holder. <br> <br>

        You can reproduce content published on our pages under the OGL as long as you follow the conditions of the licence. <br> <br>

        Contact us if you want to reproduce a piece of content but aren’t sure if it’s covered by Environment Agency copyright or the OGL. <br> <br>

        We make most of the content on our pages available through feeds for other websites and applications to use. The websites and applications that use our feeds aren’t our products, and they might use versions of our content that have been edited and stored for later use (‘cached’). <br> <br>

        We don’t give any guarantees, conditions or warranties about the accuracy or completeness of any content used by these products. We’re not liable for any loss or damage that may come from your use of these products. <br> <br>

        The most up to date version of our content and data will always be on our pages.</p>
    <br>
    <hr>
    <br>
    <h2>Linking to the flood information service</h2>
    <br>
    <p>We welcome and encourage other websites to link to the flood information service.
        <br> <br>
        You must contact us for permission if you want to either:
        <br> <br>
        <span>&#183;</span>charge your website’s users to click on a link to any page on the site <br>
        <span>&#183;</span>say your website is associated with or endorsed by the Environment Agency or another government department or agency
    </p>
    <br>
    <hr>
    <br>
    <h2>Disclaimer</h2>
    <br>
    <p>While we make every effort to keep our content and data up to date, we don’t provide any guarantees, conditions or warranties that the information will be:
        <br> <br>
        <span>&#183;</span>current <br>
        <span>&#183;</span>secure <br>
        <span>&#183;</span>accurate <br>
        <span>&#183;</span>complete <br>
        <span>&#183;</span>free from bugs or viruses <br> <br>

        We’re not liable for any loss or damage that may come from using our content or data. This includes:
        <br> <br>
        <span>&#183;</span>any direct, indirect or consequential losses <br>
        <span>&#183;</span>any loss or damage caused by civil wrongs (‘tort’, including negligence), breach of contract or otherwise <br>
        <span>&#183;</span>the use of our content or data and any websites that are linked to or from it <br>
        <span>&#183;</span>the inability to use our content or data and any websites that are linked to or from it <br> <br>
        This applies if the loss or damage was foreseeable, arose in the normal course of things or you advised us that it might happen.
        <br> <br>
        This includes (but isn’t limited to) the loss of your:
        <br> <br>
        <span>&#183;</span>income or revenue <br>
        <span>&#183;</span>salary, benefits or other payments <br>
        <span>&#183;</span>business <br>
        <span>&#183;</span>profits or contracts <br>
        <span>&#183;</span>opportunity <br>
        <span>&#183;</span>anticipated savings <br>
        <span>&#183;</span>data <br>
        <span>&#183;</span>goodwill or reputation <br>
        <span>&#183;</span>tangible property <br>
        <span>&#183;</span>intangible property, including loss, corruption or damage to data or any computer system <br>
        <span>&#183;</span>wasted management or office time <br> <br>

        We may still be liable for: <br> <br>

        <span>&#183;</span>death or personal injury arising from our negligence <br>
        <span>&#183;</span>fraudulent misrepresentation <br>
        <span>&#183;</span> any other liability which cannot be excluded or limited under applicable law
    </p>
    <br>
    <hr>
    <br>
    <h2>Requests to remove content</h2>
    <br>
    <p>You can ask for content to be removed from our pages. We’ll only do this in certain cases, for example if it breaches copyright laws, contains sensitive personal data or material that may be considered obscene or defamatory. <br>

        Contact us to ask for content to be removed. You’ll need to send us the web address (URL) of the content and explain why you think it should be removed. We’ll reply to let you know whether we’ll remove it. <br>

        We remove content at our discretion. You can still request information under the Freedom of Information Act and the Data Protection Act.</p>
    <br>
    <hr>
    <br>
    <h2>Information about you and your visits to our pages</h2>
    <br>
    <p>We collect information about you in accordance with our privacy policy and our cookie policy. By using the site, you agree to us collecting this information and confirm that any data you provide is accurate.</p>
    <br>
    <hr>
    <br>
    <h2>Virus protection</h2>
    <br>
    <p>We make every effort to check and test our pages for viruses at every stage of production. You must make sure that the way you use our pages doesn’t expose you to the risk of viruses, malicious computer code or other forms of interference which can damage your computer system. <br>

        We’re not responsible for any loss, disruption or damage to your data or computer system that might happen when you use our content or data.</p>
    <br>
    <hr>
    <br>
    <h2>Viruses, hacking and other offences</h2>
    <br>
    <p>When using our content or data, you must not introduce viruses, trojans, worms, logic bombs or any other material that’s malicious or technologically harmful. <br>

        You must not try to gain unauthorised access to our content or data, the server on which it’s stored or any server, computer or database connected to it. <br>

        You must not attack the site in any way. This includes denial-of-service attacks. We’ll report any attacks or attempts to gain unauthorised access to our servers to the relevant law enforcement authorities and share information about you with them.</p>
    <br>
    <hr>
    <br>
    <h2>Governing law</h2>
    <br>
    <p>These terms and conditions are governed by and construed in accordance with the laws of Luxembourg. <br>

        Any dispute you have which relates to these terms and conditions, or your use of the site (whether it be contractual or non-contractual), will be subject to the exclusive jurisdiction of the courts of England and Wales.</p>
    <br>
    <hr>
    <br>
    <h2>General</h2>
    <br>
    <p>We might decide not to exercise or enforce any right available to us under these terms and conditions. We can always decide to exercise or enforce that right at a later date. <br>

        Doing this once won’t mean we automatically waive the right on any other occasion. <br>

        If any of these terms and conditions are held to be invalid, unenforceable or illegal for any reason, the remaining terms and conditions will still apply.</p>
    <br>
    <hr>
    <br>
    <h2>Use of long term flood risk information</h2>
    <br>
    <p>It is not possible to say for certain what the flood risk is at any specific place or time, but we use the best information available to provide an indication. We do this to help people and insurers make informed choices about living with or managing flood risk. <br>

        As our information relates to an area rather than a specific property, not all properties within that area (which could be a street or a postcode) will necessarily be at the same risk of flooding. This might be the case if the property is on higher land or the floor levels are high. <br>

        The flood information we provide is for sites in or near an area at risk of flooding from rivers, the sea and/or surface water. It does not cover other sources of flooding such as from local drains. However our records on historic flooding can include flooding from groundwater. <br>

        We log historic flooding where we have adequate records and do not have a record of all past flooding. If an area of land is shown outside the extent of recorded flooding it doesn't mean it has never flooded, simply that we don’t hold a record of the area of land being flooded. <br>

        Any information provided in respect of proposed improvements to flood defences or natural river channels should be considered as general information for the area in which your property/site is located. It is not specific to individual properties or sites.</p>
    <br>
    <hr>
    <br>
    <h2>Flood map for planning</h2>
    <br>
    <p>The flood map for planning shows river and sea flooding data, ignoring the presence of defences. It doesn’t include other sources of flooding. It is only for use in development planning and flood risk assessments.</p>
    <br>
    <hr>
    <br>
    <h2>Changes to these terms and conditions</h2>
    <br>
    <p>Please check these terms and conditions regularly. We can update them at any time without notice. <br>

        You’ll agree to any changes if you continue to use the site after the terms and conditions have been updated.</p>

</div>
@endsection

{{-- Footer Section --}}
@section('footer')

@endsection

{{-- Scripts links --}}
@section('scripts')

@endsection
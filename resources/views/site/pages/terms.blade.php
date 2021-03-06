@extends('site.layouts.pages')

@section('title-page', ' - Sobre nós')

@section('content')

    {{-- BREADCRUMB --}}
    <section id="breadcrumb" class="full_row header_margin bg_img_5 py_80 overlay_1 page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page_banner">
                        <h3 class="title text_white d-table float-left">Termos e Condições</h3>
                        <ul class="page_location float-right">
                            <li><a href="{!! route('home') !!}">Início</a> </li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                            <li><span>Termos e Condições</span> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- BREADCRUMB --}}

    {{-- TERMOS E CONDICOES --}}
    <section id="terms_condition" class="full_row py_80 bg_gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <ul class="terms_sidebar p_30 bg_white">
                        <li class="active"> <a href="#">User Agreement</a> </li>
                        <li> <a href="#">Authorization Agreement</a> </li>
                        <li> <a href="#">Our Privacy Policy</a> </li>
                        <li> <a href="#">Membership Agreement And Terms</a> </li>
                        <li> <a href="#">Payment System And Police</a> </li>
                        <li> <a href="#">Property Rights Information</a> </li>
                        <li> <a href="#">Property Handle System</a> </li>
                        <li> <a href="#">Probide License Property</a> </li>
                        <li> <a href="#">Money Refund Instructions</a> </li>
                        <li> <a href="#">Career And Joining Condition</a> </li>
                        <li> <a href="#">Rent Home Condition</a> </li>
                        <li> <a href="#">Good Behave With Agent</a> </li>
                        <li> <a href="#">Complaint And Objection</a> </li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <div class="terms_description text_secondary mt_md_50">
                        <h3 class="mb-3">User Agreement</h3>
                        <div class="mb-3 date"><strong>Effective From:</strong> February 23, 2017</div>
                        <p>Volutpat aliquet litora primis, egestas lobortis habitant dictum Mollis consectetuer. Cum, pharetra neque dignis sim vestibulum velit, ultricies habitasse. Tempus nisi ad massa nostra bibendum sit ligula. Cras sociosqu penat bus nisi aenean ante conubia ante rhoncus vivamus.</p>
                        <p>Semper dapibus. Quisque pulvinar. Ullamcorper nonummy. Nullam. Aliquet nunc morbi ante est. Libero nascetu hendrerit sociis pulvinar mi faucibus orci. Egestas ornare, orci, urna neque lobortis fermentum id justo scelerisq nullam ac ultrices enim curabitur venenatis accumsan at torquent risus scelerisque praesent cum erat, tristique aptent parturient eu consequat torquent vehicula aptent inceptos ac nostra sed vivamus Porta faucibus enimeg felis dapibus mollis.</p>
                        <p>Sem senectus mauris vel pellentesque odio ac platea turpis. Orci dictum ac lobortis, velit ante nunc aenean nib. Augue iaculis. Justo nibh magnis imperdiet pede nisi erat, velit Tempus odio neque nonummy rhoncus conseqt uat at turpis nibh nostra ullamcorper porta risus sagittis nisl donec semper senectus, suspendisse ridiculus mau eu diam aliquet velit primis. Dapibus massa felis felis. Vestibulum nisi ultrices dui aenean maecenas. Dis laoreet netus sed adipiscing nulla. Suscipit nulla. Iaculis venenatis pharetra ullamcorper leo mattis eu sed dolor posue Nisl mollis scelerisque etiam. Aliquet morbi sollicitudin. Dui vestibulum vivamus nec praesent Varius netus iacu lis Porttitor dui aliquet libero nisi scelerisque ridiculus vulputate vitae, porta fermentum platea malesuada ligula cras morbi ultricies ac adipiscing. Aenean leo odio. Diam montes diam. Inceptos nonummy fermentum, magna velit curabitur.</p>
                        <h4 class="mb-3 mt-4">1. Understanding And Signature</h4>
                        <p>Dignissim pharetra cursus porttitor convallis hymenaeos consectetuer Ultricies. Vehicula vivamus. Ante ornare donec torquent senectus mi ac placerat conubia. Magna tincidunt aptent convallis quam habitant lacus etiam elit. Erat a sapien penatibus integer quisque placerat tempor cursus elit metus, at potenti nunc ullamcorper.</p>
                        <p>Nullam volutpat ultricies mus fringilla euismod ullamcorper litora et, lobortis taciti placerat. Fringilla congue Vitae hymenaeos justo vehicula Egestas laoreet vehicula nulla tempus. Blandit. Duis pellentesque etiam eget egestas felis rutrum class tellus placerat pede porttitor suspendisse sociis, ad platea. Penatibus mus ligula lectus nulla. Sociis mi fermentum porta mus sociosqu integer justo sit hac luctus aptent.</p>
                        <h4 class="mb-3 mt-4">2. Your CONSENT to deal with us</h4>
                        <p>Dignissim pharetra cursus porttitor convallis hymenaeos consectetuer Ultricies. Vehicula vivamus. Ante ornare donec torquent senectus mi ac placerat conubia. Magna tincidunt aptent convallis quam habitant lacus etiam elit. Erat a sapien penatibus integer quisque placerat tempor cursus elit metus, at potenti nunc ullamcorper.</p>
                        <div class="terms_deals">
                            <h5 class="mb-3 mt-4">2.1 Your Consent about Payment system</h5>
                            <p>Pellentesque, habitasse, vulputate porttitor. Nonummy orci neque cum eget suscipit facilisi per mattis per, porta. Vitae vulputate cursus porta, sapien vulputate lacus ullamcorper odio semper, nonummy. Nec porttitor at ridiculus. Phasellus ligula donec elementum consectetuer pulvinar aliquam facilisi consequat ipsum.</p>
                            <h5 class="mb-3 mt-4">2.2 Provide us your correct information</h5>
                            <p>Pellentesque, habitasse, vulputate porttitor. Nonummy orci neque cum eget suscipit facilisi per mattis per, porta. Vitae vulputate cursus porta, sapien vulputate lacus ullamcorper odio semper, nonummy. Nec porttitor at ridiculus. Phasellus ligula donec elementum consectetuer pulvinar aliquam facilisi consequat ipsum.</p>
                            <h5 class="mb-3 mt-4">2.3 Make Sure About Your Choice</h5>
                            <p>Pellentesque, habitasse, vulputate porttitor. Nonummy orci neque cum eget suscipit facilisi per mattis per, porta. Vitae vulputate cursus porta, sapien vulputate lacus ullamcorper odio semper, nonummy. Nec porttitor at ridiculus. Phasellus ligula donec elementum consectetuer pulvinar aliquam facilisi consequat ipsum</p>
                        </div>
                        <h4 class="mb-3 mt-4">3. Purpose to take our service</h4>
                        <p>Lorem rutrum euismod arcu vel ipsum ullamcorper dapibus fermentum habitasse eget adipiscing tellus comm sociis interdum ornare sociosqu nascetur enim augue et. Faucibus rhoncus ante aliquam nibh semper faucibus ante integer nam aliquam pretium. Parturient facilisi facilisi. “Placerat habitasse venenatis gravida morbi sociis integer faucibus habitasse Vitae convallis elit etiam nisi eget fringilla Nisi lectus ultricies.”</p>
                        <p>Id pharetra penatibus in gravida pharetra lectus volutpat. Nulla mollis vestibulum augue proin feugiat tempor rhoncus sollicitudin, consectetuer tempus semper ultrices. Augue dui elementum leo bibendum imperdiet aenean pellentesque eleifend, aliquet nisi. Faucibus.</p>
                        <h4 class="mb-3 mt-4">4. Accessability</h4>
                        <p>Lorem rutrum euismod arcu vel ipsum ullamcorper dapibus fermentum habitasse eget adipiscing tellus commodo sociis interdum ornare sociosqu nascetur enim augue et. Faucibus rhoncus ante aliquam nibh semper faucibus ante integer nam aliquam pretium. Parturient facilisi facilisi. </p>
                        <h4 class="mt-4">5. Contacting With US</h4>
                        <p>Lorem rutrum euismod arcu vel ipsum ullamcorper dapibus fermentum habitasse eget adipiscing tellus commodo sociis interdum ornare sociosqu nascetur enim augue et.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- TERMOS E CONDICOES --}}

@stop

@extends('admin.layouts.main')

@section('content')

    <div class="mt_md_50">
        <div class="row">
            <div class="col-md-8">
                <form class="profile_area" method="post" action="#">
                    <div class="personal_infor">
                        <h4 class="inner_title mb-4">personal information</h4>
                        <p>Euismod Ac penatibus magna vel tempor, porttitor ullamcorper urna, massa natoque venenatis mollis libero neque velit risus, magnis vehicula nam.</p>
                        <div class="form-group">
                            <label for="agent_id">Agent ID</label>
                            <input id="agent_id" type="text" name="agentid" class="form-control" placeholder="PO19281" disabled >
                        </div>
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input id="name" type="text" name="name" class="form-control" placeholder="Harry E. Ewalt">
                        </div>
                        <div class="form-group">
                            <label for="title">Your Title</label>
                            <input id="title" type="text" name="title" class="form-control" placeholder="Property Agent">
                        </div>
                        <div class="form-group">
                            <label for="mail">Email Address :</label>
                            <input id="mail" type="text" class="form-control" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone :</label>
                            <input id="phone" type="tel" class="form-control" placeholder="000-000-000">
                        </div>
                        <div class="form-group">
                            <label>country :</label>
                            <select class="selectpicker form-control" data-live-search="true">
                                <option>USA</option>
                                <option>UK</option>
                                <option>SP</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="about_me">About Me :</label>
                            <textarea id="about_me" class="form-control" placeholder="Write About Here....." rows="5"></textarea>
                        </div>
                        <h4 class="inner-title mb-4">More Info</h4>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input id="address" type="text" name="address" class="form-control" placeholder="Your Location Address">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="city">City/state :</label>
                                    <input id="city" type="text" name="city" class="form-control" placeholder="City Or State">
                                </div>
                                <div class="col-sm-6">
                                    <label for="zip">Zip code :</label>
                                    <input id="zip" type="text" name="zipcode" class="form-control" placeholder="Zip Code">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date">Date of Birth :</label>
                            <input id="date" type="text" class="form-control" placeholder="00-00-0000/d-m-y">
                        </div>
                        <div class="form-group">
                            <label for="skype">Skype ID :</label>
                            <input id="skype" type="text" class="form-control" placeholder="Your Skype ID">
                        </div>
                    </div>
                    <button class="btn btn_primary_bg" type="submit">Save Changes</button>
                </form>
                <div class="save_change">
                    <p><span>Note : </span>Morbi nibh dis. Pede. Erat, porta urna. Adipiscing Ipsum nibh morbi taciti proin quisque sit quam curae; vulputate ridiculus. Dictumst ullamcorper nullam Parturient, urna. Etiam nascetur enim lectus torquent pellentesque.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="prifile_picture">
                    <form class="avata_form" action="#" method="post">
                        <img src="img/teams/2.jpg" alt="" />
                        <input type="file" name="user_image" id="avata-upload">
                        <label for="avata-upload"><i class="flaticon-tool-1"></i></label>
                    </form>
                    <ul>
                        <li><span>Name:</span> Harry E. Ewalt</li>
                        <li><span>Email:</span> ewalt32@info.com</li>
                        <li><span>Role:</span> Agent</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection

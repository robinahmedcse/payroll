
@extends('supper_admin.master')

@section('title','Add Emp|R-PMS')


@section('x')

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Employee Manangement</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

 


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-align-left"></i> Add employee<small>information</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- start accordion -->

                    {!! Form::open(['url'=>'supper/admin/master/employee/save','method'=>'POST','enctype'=>'multipart/form-data', 'class'=>'form-horizontal form-label-left']) !!}  
                   
                    <div class="container-fluid">
                        <div class ="row">
                             @if(Session::get('fail'))
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color:red"> {{ session::get('fail') }} </strong>
                                </span>
                              @endif
                          </div>  
                       </div> 




                       <!-- Basic Info #1 -->

                       
                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="panel">
                        <a class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <h4 class="panel-title">Basic Info #1</h4>
                        </a>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">

                                <div class="">
                                             <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Name<span class="required">*</span>
                                                </label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                       <input name="name" type="text" class="form-control" >
                                                  </div>
                                              </div>

                                              <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Fatther Name<span class="required">*</span>
                                                </label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                       <input name="f_name" type="text" class="form-control" >
                                                  </div>
                                              </div>


                                              <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Date of Birth</label>
                                                   <div class="col-md-6 col-sm-6 col-xs-12">
                                                      <input type="text" name="dob" class="form-control" data-inputmask="'mask': '99/99/9999'">
                                                      <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                      <div id="gender" name="gender" class="btn-group" data-toggle="buttons">
                                                        <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                          <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                                                        </label>
                                                        <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                          <input type="radio" name="gender" value="female"> Female
                                                        </label>
                                                      </div>
                                                    </div>
                                               </div>

                                              <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">phone<span class="required">*</span>
                                                </label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                       <input name="phone" type="text" class="form-control" >
                                                  </div>
                                              </div>


                                              <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">email<span class="required">*</span>
                                                </label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                       <input name="email" type="email" class="form-control" >
                                                  </div>
                                              </div>


                                              <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Nationality<span class="required">*</span>
                                                </label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                       <input name="nationality" type="text" class="form-control" >
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Religion</label>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <select name="religion" class="form-control">
                                                            <option value="null" selected="selected" >Select Religion</option>
                                                            <option value="Islam">Islam</option>
                                                            <option value="Hinduism">Hinduism</option>
                                                            <option value="Christianity">Christianity</option>
                                                            <option value="Buddhism">Buddhism</option>
                                                            <option value="Others">Others</option>
                                                        </select>
                                                    </div>
                                              </div> 


                                              <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Marital Status</label>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <select name="marital_status"   class="form-control">
                                                            <option value="null" selected="selected" >Select Status</option>
                                                            <option value="Married ">Married</option>
                                                            <option value="Widowed ">Widowed</option>
                                                            <option value="Widowed ">Separated</option>
                                                            <option value="Widowed ">Divorced</option>
                                                            <option value="Widowed ">Single</option>
                                                        </select>
                                                    </div>
                                              </div> 

                                              <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Blood Groups</label>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <select name="blood_groups"   class="form-control">
                                                            <option value="null" selected="selected" >Select Group</option>
                                                            <option value="A+">A+</option>
                                                            <option value="A-">A-</option>
                                                            <option value="B+">B+</option>
                                                            <option value="B-">B-</option>
                                                            <option value="O+">O+</option>
                                                            <option value="O-">O-</option>
                                                            <option value="AB+">AB+</option>
                                                            <option value="AB-">AB-</option>  
                                                        </select>
                                                    </div>
                                              </div> 

                                              <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Local Address<span class="required">*</span>
                                                </label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                  <textarea id="textarea"   name="local_address" class="form-control col-md-7 col-xs-12"></textarea>
                                                  </div>
                                              </div>

                                              <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Present Address<span class="required">*</span>
                                                </label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                  <textarea id="textarea"   name="present_address" class="form-control col-md-7 col-xs-12"></textarea>
                                                  </div>
                                              </div>



                                              <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Photo<span class="required">*</span>
                                                </label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                     <input type="file" id="" name="emp_image" class="form-control" accept="image/*" /><br>
                                                  </div>
                                              </div>

                                </div>

                          </div>
                        </div>
                      </div>








                      <!-- Qualification Record #2 -->

                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <h4 class="panel-title">Qualification Record #2</h4>
                        </a>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                             
                             <div class="row" style="background-color:white">
                                
                                <div class="col-sm-6">
                                  <div class="card" style="background-color:#F4FFFB">
                                    <div class="card-header" style="height:30px; background-color:#231f40;">
                                       <h4 class="text-center" style="padding: 6px;  color: white ">SSC or Equivalent Level</h4> 
                                    </div>

                                    <div class="card-body" style="margin-top:20px;" >

                                        <div class="form-group">
                                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Examination</label>
                                               <div class="col-md-6 col-sm-6 col-xs-6">
                                                   <select name="examination_scc"   class="form-control">
                                                         <option value="null" selected="selected">Select Examination</option>
                                                          <option value="1">S.S.C</option>
                                                          <option value="2" >Dakhil</option>
                                                          <option value="3">S.S.C Vocational</option>
                                                          <option value="4">O Level/Cambridge</option>
                                                          <option value="5">S.S.C Equivalent</option>  
                                                     </select>
                                                </div>
                                          </div>

                                          <div class="form-group">
                                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Board</label>
                                               <div class="col-md-6 col-sm-6 col-xs-6">
                                                   <select name="board_ssc"   class="form-control">
                                                         <option value="null" selected="selected">Select Board</option>
                                                         <option value="1">Dhaka</option>
                                                         <option value="2">Cumilla</option>
                                                         <option value="3">Rajshahi</option>
                                                         <option value="4">Jashore</option>
                                                         <option value="5">Chittagong</option>
                                                         <option value="6">Barishal</option>
                                                         <option value="7">Sylhet</option>
                                                         <option value="8">Dinajpur</option>
                                                         <option value="9">Madrasah</option>
                                                         <option value="11">Mymensingh</option>
                                                         <option value="15">Cambridge International - IGCE</option>
                                                         <option value="16">Edexcel International</option>
                                                         <option value="17">Bangladesh Technical Education Board (BTEB)</option>
                                                         <option value="20">Others</option>
                                                     </select>
                                                </div>
                                          </div>

                                          <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Result<span class="required">*</span>
                                                </label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                       <input name="result_ssc" type="text" class="form-control" >
                                                  </div>
                                          </div>
                                          <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Subject<span class="required">*</span>
                                                </label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                       <input name="subject_ssc" type="text" class="form-control" >
                                                  </div>
                                          </div>

                                          <div class="form-group">
                                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Passing Year</label>
                                               <div class="col-md-6 col-sm-6 col-xs-6">
                                                   <select name="passing_year_scc"   class="form-control">
                                                      <option value="0" selected="selected">Select One</option>
                                                      <option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option>
                                                     </select>
                                                </div>
                                          </div>

                                         



                                         <!-- card body      -->
                                    </div>
                                  </div>
                                </div>
                                
                                
                                 <!-- SSC end of col-sm-6 -->
                                
                                
                                 <div class="col-sm-6">
                                 <div class="card" style="background-color:#F4FFFB">
                                    <div class="card-header" style="height:30px; background-color:#231f40;">
                                       <h4 class="text-center" style="padding:6px;  color: white ">HSC or Equivalent Level</h4> 
                                    </div>

                                    <div class="card-body" style="margin-top:20px;" >

                                        <div class="form-group">
                                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Examination</label>
                                               <div class="col-md-6 col-sm-6 col-xs-6">
                                                   <select name="examination_hsc"   class="form-control">
                                                      <option value="0" selected="selected">Select One</option>
						                                        	<option value="1">H.S.C</option><option value="2">Alim</option><option value="3">Business Management</option><option value="4">Diploma Engineering</option><option value="5">A Level/Sr. Cambridge</option><option value="6">H.S.C Equivalent</option><option value="7">Diploma in Pharmacy</option>
                          
                                                     </select>
                                                </div>
                                          </div>

                                          <div class="form-group">
                                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Board</label>
                                               <div class="col-md-6 col-sm-6 col-xs-6">
                                                   <select name="board_hsc"   class="form-control">
                                                         <option value="null" selected="selected">Select Board</option>
                                                         <option value="1">Dhaka</option>
                                                         <option value="2">Cumilla</option>
                                                         <option value="3">Rajshahi</option>
                                                         <option value="4">Jashore</option>
                                                         <option value="5">Chittagong</option>
                                                         <option value="6">Barishal</option>
                                                         <option value="7">Sylhet</option>
                                                         <option value="8">Dinajpur</option>
                                                         <option value="9">Madrasah</option>
                                                         <option value="11">Mymensingh</option>
                                                         <option value="15">Cambridge International - IGCE</option>
                                                         <option value="16">Edexcel International</option>
                                                         <option value="17">Bangladesh Technical Education Board (BTEB)</option>
                                                         <option value="20">Others</option>
                                                     </select>
                                                </div>
                                          </div>

                                          <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Result<span class="required">*</span>
                                                </label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                       <input name="result_hsc" type="text" class="form-control" >
                                                  </div>
                                          </div>
                                          <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Subject<span class="required">*</span>
                                                </label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                       <input name="subject_hsc" type="text" class="form-control" >
                                                  </div>
                                          </div>

                                          <div class="form-group">
                                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Passing Year</label>
                                               <div class="col-md-6 col-sm-6 col-xs-6">
                                                   <select name="passing_year_hsc"   class="form-control">
                                                      <option value="0" selected="selected">Select One</option>
                                                      <option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option>
                                                     </select>
                                                </div>
                                          </div>

                                         



                                         <!-- card body      -->
                                    </div>
                                  </div>
                                </div>
                                <!-- Hsc end of col-sm-6 -->

                                <!-- Graduation/Equivalent Level -->
                                <div class="col-sm-6">
                                  <div class="card" style="background-color:#F4FFFB">
                                    <div class="card-header" style="height:26px; background-color:#231f40;" >
                                        <h4 class="text-center" style=" padding: 5px;  color: white; ">Graduation/Equivalent Level</h4> 
                                    </div>

                                    <div class="card-body" style="margin-top:20px;" >

                                        <div class="form-group">
                                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Examination</label>
                                               <div class="col-md-6 col-sm-6 col-xs-6">
                                                   <select name="examination_graduation"   class="form-control">
                                                       <option value="0" selected="selected">Select One</option>
                                                       <option value="1">B.Sc(Engineering/Architecture)</option><option value="2">B.Sc(Agricultural Science)</option><option value="3">M.B.B.S./B.D.S</option><option value="4">Honors</option><option value="5">Pass Course</option><option value="6">Fazil</option><option value="8">Graduation Equivalent</option>
      
                                                     </select>
                                                </div>
                                          </div>

                                          <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Subject/Degree<span class="required">*</span>
                                                </label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                       <input name="subject_graduation" type="text" class="form-control" >
                                                  </div>
                                          </div>


                                          <div class="form-group">
                                           <label class="control-label col-md-3 col-sm-3 col-xs-12">University/Institute</label>
                                               <div class="col-md-6 col-sm-6 col-xs-6">
                                                   <select name="university_graduation"   class="form-control">
                                                       <option value="0" selected="selected">Select One</option>
                                                        <option value="110">Bangabandhu Sheikh Mujibur Rahman Science and Technology University</option><option value="111">Bangabandhu Sheikh Mujib Medical University</option><option value="112">Bangabandhu Sheikh Mujibur Rahman Agricultural University</option><option value="113">Bangladesh Agricultural University,Mymensingh</option><option value="114">Bangladesh Open University</option><option value="115">Bangladesh University of Engineering &amp; Technology</option><option value="116">Bangladesh University of Professionals</option><option value="117">Chattogram University of Engineering &amp; Technology</option><option value="118">Chattogram Veterinary and Animal Sciences University</option><option value="119">Comilla University</option><option value="120">Dhaka University</option><option value="121">Dhaka University of Engineering &amp; Technology</option><option value="122">Hajee Mohammad Danesh Science &amp; Technology University</option><option value="123">Islamic University, Kushtia </option><option value="124">Jagannath University</option><option value="125">Jahangirnagar University</option><option value="126">Jatiya Kabi Kazi Nazrul Islam University</option><option value="127">Jessore Science &amp; Technology University</option><option value="128">Khulna University</option><option value="129">Khulna University of Engineering and Technology</option><option value="130">Mawlana Bhashani Science &amp; Technology University</option><option value="131">National University</option><option value="132">Noakhali Science &amp; Technology University</option><option value="133">Pabna University of Science and Technology</option><option value="134">Patuakhali Science And Technology University</option><option value="135">Rajshahi University</option><option value="136">Rajshahi University of Engineering &amp; Technology</option><option value="137">Rangpur University</option><option value="138">Shahjalal University of Science &amp; Technology</option><option value="139">Sher-e-Bangla Agricultural University</option><option value="140">Sylhet Agricultural University</option><option value="141">University of Chittagong</option><option value="142">Faridpur Engineering College</option><option value="143">Mymensingh Engineering College</option><option value="144">Sylhet Engineering College</option><option value="145">Barishal Engineering College</option><option value="222">Ahsanullah University of Science and Technology</option><option value="223">America Bangladesh University</option><option value="224">American International University Bangladesh</option><option value="225">ASA University Bangladesh</option><option value="226">Asian University of Bangladesh</option><option value="227">Atish Dipankar University of Science &amp; Technology</option><option value="228">Bangladesh Islami University</option><option value="229">Bangladesh University</option><option value="230">Bangladesh University of Business &amp; Technology (BUBT)</option><option value="231">BGC Trust University Bangladesh, Chittagong</option><option value="232">BRAC University</option><option value="233">Central Women's University</option><option value="234">City University</option><option value="235">Daffodil International University</option><option value="236">Darul Ihsan University</option><option value="237">Dhaka International University</option><option value="238">East Delta University , Chittagong</option><option value="239">East West University</option><option value="240">Eastern University</option><option value="241">Gono Bishwabidyalay</option><option value="242">Green University of Bangladesh</option><option value="243">IBAIS University</option><option value="244">Independent University, Bangladesh</option><option value="245">International Islamic University, Chittagong</option><option value="246">International University of Business Agriculture &amp; Technology</option><option value="247">Leading University, Sylhet</option><option value="248">Manarat International University</option><option value="249">Metropolitan University, Sylhet</option><option value="250">North South University</option><option value="251">Northern University Bangladesh</option><option value="252">Premier University, Chittagong</option><option value="253">Presidency University</option><option value="254">Prime University</option><option value="255">Primeasia University</option><option value="256">Queens University</option><option value="257">Royal University of Dhaka</option><option value="258">Shanto Mariam University of Creative Technology</option><option value="259">Southeast University</option><option value="260">Southern University of Bangladesh , Chittagong</option><option value="261">Stamford University, Bangladesh</option><option value="262">State University Of Bangladesh</option><option value="263">Sylhet International University, Sylhet</option><option value="264">The Millenium University</option><option value="265">The Peoples University of Bangladesh</option><option value="266">The University of Asia Pacific</option><option value="267">United International University</option><option value="268">University of Development Alternative</option><option value="269">University of Information Technology &amp; Sciences</option><option value="270">University of Liberal Arts Bangladesh</option><option value="271">University of Science &amp; Technology, Chittagong</option><option value="272">University of South Asia</option><option value="273">Uttara University</option><option value="274">Victoria University of Bangladesh</option><option value="275">World University of Bangladesh</option><option value="333">Asian University for Women</option><option value="334">Islamic University of Technology</option><option value="335">South Asian University</option><option value="401">Dhaka Medical College</option><option value="402">Sir Salimullah Medical College</option><option value="403">Mymensingh Medical College</option><option value="404">Chattogram Medical College</option><option value="405">Rajshahi Medical College</option><option value="406">MAG Osmani Medical College</option><option value="407">Sher-E-Bangla Medical College</option><option value="408">Rangpur Medical College</option><option value="409">Comilla Medical College</option><option value="410">Khulna Medical College</option><option value="411">Shaheed Ziaur Rahman Medical College</option><option value="412">Dinajpur Medical College</option><option value="413">Faridpur Medical College</option><option value="414">Shaheed Suhrawardy Medical College</option><option value="415">Pabna Medical College</option><option value="416">Noakhali Medical College</option><option value="417">Cox's Bazar Medical College</option><option value="418">Jessore Medical College</option><option value="419">Shaheed Nazrul Islam Medical College</option><option value="420">Kushtia Medical College</option><option value="421">Satkhira Medical College</option><option value="422">Sheikh Sayera Khatun Medical College, Gopalganj</option><option value="501">Feni Medical College,Feni</option><option value="502">Gono Bishwabidyalay, Savar, Dhaka</option><option value="503">Ad-din Womens Medical College, Dhaka</option><option value="504">Anwer Khan Modern Medical College, Dhaka</option><option value="505">Bangladesh Medical College</option><option value="506">Jalalabad Rageb-Rabeya Medical College,Sylhet</option><option value="507">BGC Trust Medical College, Chittagong</option><option value="508">Central Medical College, Comilla</option><option value="509">Chottagram Ma-O-Shishu Hospital Medical College</option><option value="510">Community Based Medical College (cbmc), Mymensingh</option><option value="511">Community Medical College, Dhaka</option><option value="512">Delta Medical College, Dhaka</option><option value="513">Dhaka National Medical College</option><option value="514">Durra Samad Rahman Red Crescent Women`s Medical College, Sylhet</option><option value="515">Eastern Medical College, Comilla</option><option value="516">Enam Medical College, Savar, Dhaka</option><option value="517">Sylhet Women`s Medical College, Sylhet</option><option value="518">Green Life Medical College,Dhaka</option><option value="519">Holy Family Red Crescent Medical College, Dhaka</option><option value="520">Ibrahim Medical College, Dhaka</option><option value="521">Ibn Sina Medical College, Dhaka</option><option value="522">International Medical College, Gazipur</option><option value="523">Islami Bank Medical College, Rajshahi</option><option value="524">Jahurul Islam Medical College, Kishoregonj</option><option value="525">Jalalabad Ragib-Rabeya Medical College Sylhet</option><option value="526">Khawja Yunus Ali Medical College, Sirajganj</option><option value="527">Kumudini Medical College, Tangail</option><option value="528">Labaid Medical College[6] Dhanmondi, Dhaka</option><option value="529">Maulana Bhasani Medical College</option><option value="530">Medical College for Women and Hospital, Dhaka</option><option value="531">Nightingale Medical College, Dhaka</option><option value="532">North Bengal Medical College, Sirajganj</option><option value="533">North East Medical College, Sylhet</option><option value="534">Northern International Medical College, Dhaka</option><option value="535">Northern Private Medical College, Rangpur</option><option value="536">Popular Medical College &amp; Hospital, Dhaka</option><option value="537">Prime Medical College, Rangpur</option><option value="538">Rangpur Community Hospital Medical College</option><option value="539">Sahabuddin Medical College and Hospital</option><option value="540">Samaj Vittik Medical College, Mirzanagar, Savar</option><option value="541">Shahabuddin Medical College, Dhaka</option><option value="542">Z. H. Sikder Women`s Medical College</option><option value="543">Southern Medical College, Chittagong</option><option value="544">Tairunnessa Memorial Medical College, Gazipur</option><option value="545">TMSS Medical College,Bogra</option><option value="546">University Of Science and Technology Chittagong. IAMS</option><option value="547">Uttara Adhunik Medical College,Dhaka</option><option value="548">Military Institute of Science and Technology (MIST)</option><option value="549">Sonargaon University</option><option value="600">Anwer Khan Modern University </option><option value="601">Bandarban University </option><option value="602">Bangabandhu Sheikh Mujibur Rahman Digital University</option><option value="603">Bangabandhu Sheikh Mujibur Rahman Maritime University</option><option value="604">Bangabandhu Sheikh Mujibur Rahman Science &amp; Technology University</option><option value="605">Bangamata Sheikh Fojilatunnesa Mujib Science and Technology University</option><option value="606">Bangladesh Agricultural University</option><option value="607">Bangladesh Army International University of Science &amp; Technology(BAIUST) ,Comilla</option><option value="608">Bangladesh Army University of Engineering and Technology (BAUET), Qadirabad</option><option value="609">Bangladesh Army University of Science and Technology(BAUST), Saidpur </option><option value="610">Bangladesh University of Health Sciences</option><option value="611">Bangladesh University of Textiles </option><option value="612">Barishal University</option><option value="613">Begum Rokeya University</option><option value="614">BGMEA University of Fashion &amp; Technology(BUFT)</option><option value="615">Canadian University of Bangladesh</option><option value="616">CCN University of Science &amp; Technology</option><option value="617">Chattogram Independent University </option><option value="618">Chattogram Medical University</option><option value="619">Cox's Bazar International University</option><option value="620">East Delta University </option><option value="621">European University of Bangladesh</option><option value="622">Exim Bank Agricultural University, Bangladesh</option><option value="623">Fareast International University</option><option value="624">Feni University</option><option value="625">First Capital University of Bangladesh</option><option value="626">German University Bangladesh</option><option value="627">Global University Bangladesh</option><option value="628">Hamdard University Bangladesh</option><option value="629">Ishakha International University, Bangladesh</option><option value="630">Islamic Arabic University</option><option value="631">Islamic University</option><option value="632">Jessore University of Science &amp; Technology</option><option value="633">Khulna Agricultural University</option><option value="634">Khwaja Yunus Ali University </option><option value="635">N.P.I University of Bangladesh</option><option value="636">North Bengal International University</option><option value="637">North East University Bangladesh</option><option value="638">North Western University</option><option value="639">Northern University of Business &amp; Technology, Khulna</option><option value="640">Notre Dame University Bangladesh</option><option value="641">Port City International University</option><option value="642">Rabindra Maitree University, Kushtia</option><option value="643">Rabindra University, Bangladesh</option><option value="644">Rajshahi Medical University </option><option value="645">Rajshahi Science &amp; Technology University (RSTU), Natore</option><option value="646">Ranada Prasad Shaha University</option><option value="647">Rangamati Science and Technology University</option><option value="648">Sheikh Fazilatunnesa Mujib University</option><option value="649">Sheikh Hasina University </option><option value="650">Sonargaon University</option><option value="651">Sylhet Medical University</option><option value="652">The International University of Scholars</option><option value="653">Times University, Bangladesh</option><option value="654">University of Creative Technology, Chittagong</option><option value="655">University of Global Village</option><option value="656">Varendra University</option><option value="657">Z.H Sikder University of Science &amp; Technology</option><option value="658">Z.N.R.F. University of Management Sciences</option><option value="999">Others</option>
                        
                                                     </select>
                                                </div>
                                          </div>

                                          <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Result<span class="required">*</span>
                                                </label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                       <input name="result_graduation" type="text" class="form-control" >
                                                  </div>
                                          </div>
                                         

                                          <div class="form-group">
                                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Passing Year</label>
                                               <div class="col-md-6 col-sm-6 col-xs-6">
                                                   <select name="passing_year_graduation"   class="form-control">
                                                      <option value="0" selected="selected">Select One</option>
                                                      <option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option>
                                                     </select>
                                                </div>
                                          </div>

                                          <div class="form-group">
                                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Course Duration</label>
                                               <div class="col-md-6 col-sm-6 col-xs-6">
                                                   <select name="course_duration_graduation"   class="form-control">
                                                      <option value="0" selected="selected">Select One</option>
                                                        <option value="01">01 Year</option>
                                                        <option value="1.5">1.5 Years</option>
                                                        <option value="02">02 Years</option>
                                                        <option value="2.5">2.5 Years</option>
                                                        <option value="03">03 Years</option>
                                                        <option value="3">03 Years</option>
                                                        <option value="4">04 Years</option>
                                                        <option value="5">05 Years</option>
                    
                                                      </select>
                                                </div>
                                          </div>

                                         



                                         <!-- card body      -->
                                    </div>
                                  </div>
                                </div>

                                  <!-- grau end of col-sm-6 -->

                                  <!-- Master/Equivalent Level  -->
                                  <div class="col-sm-6">
                                  <div class="card" style="background-color:#F4FFFB">
                                    <div class="card-header" style="height:30px; background-color:#231f40;">
                                       <h4 class="text-center" style="padding: 2px;  color: white ">Master/Equivalent Level 
                                       <input name="masters" type="checkbox" id="masters" value="1"
                                        onclick="master_result_control();"> 
                                       <span class="black11">if applicable</span> 
                                       </h4>   
                                    </div>

                                    <div class="card-body" style="margin-top:20px;" >

                                        <div class="form-group">
                                           <label class="control-label col-md-3 col-sm-3 col-xs-12">
                                                Examination 
                                           </label>
                                               <div class="col-md-6 col-sm-6 col-xs-6">
                                                   <select name="examination_master" id="examination_master" class="form-control" disabled="disabled">
                                                       <option value="0" selected="selected">Select One</option>
                                                       <option value="1">M.A</option><option value="2">M.S.S</option><option value="3">M.Sc</option><option value="4">M.Com</option><option value="5">M.B.A</option><option value="6">L.L.M</option><option value="7">M.Phil</option><option value="8">Kamil</option><option value="9">Others</option><option value="10">Masters Equivalent</option>
                    
                                                     </select>
                                                </div>
                                          </div>

                                          <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Subject/Degree<span class="required">*</span>
                                                </label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                       <input name="subject_master" id="subject_master" type="text" class="form-control" disabled="disabled">
                                                  </div>
                                          </div>


                                          <div class="form-group">
                                           <label class="control-label col-md-3 col-sm-3 col-xs-12">University/Institute</label>
                                               <div class="col-md-6 col-sm-6 col-xs-6">
                                                   <select name="university_master" id="university_master"  class="form-control" disabled="disabled">
                                                       <option value="0" selected="selected">Select One</option>
                                                        <option value="101">Accounting</option><option value="102">Anthropology</option><option value="103">Applied Chemistry</option><option value="104">Applied Physics</option><option value="105">Applied Mathematics</option><option value="106">Arabic</option><option value="107">Archaeology</option><option value="108">Bangla</option><option value="109">Banking</option><option value="110">Biochemistry</option><option value="111">Botany</option><option value="112">Business Administration</option><option value="113">Chemistry</option><option value="114">Computer Science</option><option value="115">Clinical Psychology</option><option value="116">Drama &amp; Music</option><option value="117">Development Studies</option><option value="118">Economics</option><option value="119">Education</option><option value="120">English</option><option value="121">Finance</option><option value="122">Fine Arts</option><option value="123">Folklore</option><option value="124">Geography</option><option value="125">Geography and Environmental Science</option><option value="126">History</option><option value="127">Home Economics</option><option value="128">Hadith</option><option value="129">International Relations</option><option value="130">Islamic History and Culture</option><option value="131">Islamic Studies</option><option value="132">Information and Communication Technology</option><option value="133">Mass Comm. &amp; Journalism</option><option value="134">Law/Jurisprudence</option><option value="135">Information Science and Library Management</option><option value="136">Language/Linguistic</option><option value="137">Management</option><option value="138">Marketing</option><option value="139">Mathematics</option><option value="140">Microbiology</option><option value="141">Marine Science</option><option value="142">Medical Technology</option><option value="143">Pali</option><option value="144">Persian</option><option value="145">Pharmacy</option><option value="146">Philosophy</option><option value="147">Physics</option><option value="148">Political Science</option><option value="149">Psychology</option><option value="150">Public Administration</option><option value="151">Public Finance</option><option value="152">Population Science</option><option value="153">Peace &amp; Conflict</option><option value="154">Pharmaceutical Chemistry</option><option value="155">Sanskrit</option><option value="156">Social Welfare/Social Work</option><option value="157">Department of Sociology</option><option value="158">Soil Water and Environment Science</option><option value="159">Statistics</option><option value="160">Tafsir</option><option value="161">Urdu</option><option value="162">Urban Development</option><option value="163">World Religion</option><option value="164">Women Studies</option><option value="165">Water &amp; Environment Science</option><option value="166">Zoology</option><option value="167">Genetic and Breeding</option><option value="168">International Law</option><option value="169">Akaid</option><option value="170">Graphics</option><option value="171">Fikha</option><option value="172">Modern Arabic</option><option value="173">History of Music</option><option value="174">Drawing and Printing</option><option value="175">Industrial Arts</option><option value="176">Ethics</option><option value="177">Forestry</option><option value="179">Criminology &amp; Police Science</option><option value="180">Department of Television, Film and Photography</option><option value="181">Department of Women and Gender Studies</option><option value="182">Department of Criminology</option><option value="183">Department of Communication Disorders</option><option value="184">Computer Engineering</option><option value="185">Computer Science &amp; Engineering</option><option value="186">Computer Science &amp; Information Technology</option><option value="187">Information Technology</option><option value="188">Geology/Geology and Mining</option><option value="189">Environmental science</option><option value="190">Genetic Engineering and Biotechnology</option><option value="191">Materials Science &amp; Engineering</option><option value="201">Agriculture</option><option value="202">Agriculture Chemistry</option><option value="203">Agriculture Co-operatives</option><option value="204">Agriculture Economics</option><option value="205">Agriculture Engineering</option><option value="206">Agriculture Finance</option><option value="207">Agriculture Marketing</option><option value="208">Agriculture Science</option><option value="209">Agriculture Soil Science</option><option value="210">Animal Husbandry</option><option value="211">Agronomy &amp; Aquaculture</option><option value="212">Agronomy &amp; Aquaculture Extension</option><option value="213">Anatomy &amp; Histology</option><option value="214">Agronnomy</option><option value="215">Anatomology</option><option value="216">Animal Breeding &amp; Genetic</option><option value="217">Animal Science</option><option value="218">Animal Nutrition</option><option value="220">Agriculture Water Management</option><option value="221">Agriculture Extension</option><option value="223">Agro Forestry</option><option value="225">Agriculture Statistics</option><option value="226">Agr.Co-operative &amp; Marketing</option><option value="227">Bio-Technology</option><option value="228">Corp Botany</option><option value="229">Dairy Science</option><option value="230">Doc.of Veterinary Science</option><option value="231">Fisheries</option><option value="232">Fisheries &amp; Aquaculture</option><option value="233">Fisheries Biology</option><option value="234">Fisheries Management</option><option value="235">Fisheries Technology</option><option value="236">Forestry</option><option value="237">Farm Power &amp; Machinery</option><option value="238">Food Tech. &amp; Rural Industry</option><option value="239">Farm Structure</option><option value="241">Horticulture</option><option value="242">Livestock</option><option value="243">Microbiology &amp; Hygenic</option><option value="244">Production Economics</option><option value="245">Plant Pathology</option><option value="246">Paratrology</option><option value="247">Poultry Science</option><option value="248">Rural Sociology</option><option value="249">Surgery &amp; Obstate</option><option value="250">Business Studies</option><option value="301">Architecture</option><option value="302">Chemical</option><option value="303">Civil</option><option value="305">Electrical</option><option value="306">Electrical &amp; Electronics</option><option value="307">Electronic</option><option value="308">Genetic Engineering</option><option value="309">Industrial</option><option value="310">Leather Technology</option><option value="311">Marine</option><option value="312">Mechanical</option><option value="313">Metallurgy</option><option value="314">Mineral</option><option value="315">Mining</option><option value="316">Naval Architecture</option><option value="317">Physical Planning</option><option value="318">Regional Planning</option><option value="319">Structural</option><option value="320">Textile Technology</option><option value="321">Town Planning</option><option value="322">Urban &amp; Regional Planning</option><option value="323">Telecommunication Engineering</option><option value="324">Computer Science</option><option value="325">Microwave Engineering</option><option value="326">A &amp; B Section of A.M.I.E</option><option value="327">Environmental Engineering</option><option value="328">Aeronautical Engineering</option><option value="329">Software Engineering</option><option value="391">Medicine &amp; Surgery</option><option value="392">Dental Surgery</option><option value="393">Computer Engineering</option><option value="394">Computer Science &amp; Engineering</option><option value="395">Computer Science &amp; Information Technology</option><option value="396">Information and Communication Technology</option><option value="397">Electronics &amp; Communication Engineering</option><option value="398">Water Resource Engineering</option><option value="399">Materials Science &amp; Engineering</option><option value="999">Others</option>
                   
                                                     </select>
                                                </div>
                                          </div>

                                          <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Result<span class="required">*</span>
                                                </label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                       <input name="result_master" id="result_master" type="text" class="form-control" disabled="disabled" >
                                                  </div>
                                          </div>
                                         

                                          <div class="form-group">
                                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Passing Year</label>
                                               <div class="col-md-6 col-sm-6 col-xs-6">
                                                   <select name="passing_year_master" id="passing_year_master"  class="form-control" disabled="disabled">
                                                      <option value="0" selected="selected">Select One</option>
                                                      <option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option>
                                                     </select>
                                                </div>
                                          </div>

                                          <div class="form-group">
                                           <label class="control-label col-md-3 col-sm-3 col-xs-12">Course Duration</label>
                                               <div class="col-md-6 col-sm-6 col-xs-6">
                                                   <select name="course_duration_master" id="course_duration_master"  class="form-control" disabled="disabled">
                                                      <option value="0" selected="selected">Select One</option>
                                                        <option value="01">01 Year</option>
                                                        <option value="1.5">1.5 Years</option>
                                                        <option value="02">02 Years</option>
                                                        <option value="2.5">2.5 Years</option>
                                                        <option value="03">03 Years</option>
                                                        <option value="3+">03+ Years</option>
                                                       
                    
                                                      </select>
                                                </div>
                                          </div>

                                         



                                         <!-- card body      -->
                                    </div>
                                  </div>
                                </div>






                              </div>

                             <!-- panel-body -->
                          </div>
                        </div>
                      </div>




<!--            Employment Info #3 -->

                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <h4 class="panel-title">Employment Info #3</h4>
                        </a>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body">
                             
                             
                              <!-- <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">
                                            Employee Id   <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="emp_id" type="text" class="form-control" >
                                    </div>
                               </div> -->


                               <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Department</label>
                                         <div class="col-md-6 col-sm-6 col-xs-6">
                                             <select name="emp_department"   class="form-control">
                                                <option value="0" selected="selected">----Select Department----</option>
                                                @foreach($department_all as $department)
                                                   <option value="{{$department ->emp_department_code}}" selected="selected">{{$department ->emp_department_name}}</option>
                                                @endforeach
                                             </select>
                                         </div>
                                 </div>


                                 <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Designation</label>
                                         <div class="col-md-6 col-sm-6 col-xs-6">
                                             <select name="emp_designation"   class="form-control">
                                                  <option value="0" selected="selected">----Select Designation----</option>
                                                    @foreach($designation_all as $designation)
                                                       <option value="{{$designation ->emp_designation_id}}" selected="selected">{{$designation ->emp_designation_name}}</option>
                                                    @endforeach
                                             </select>
                                         </div>
                                 </div>

                                 <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Branch</label>
                                         <div class="col-md-6 col-sm-6 col-xs-6">
                                             <select name="emp_branch"class="form-control">
                                                  <option value="0" selected="selected">----Select Branch----</option>
                                                    @foreach($branch_all as $branch)
                                                       <option value="{{$branch ->emp_branch_code}}" selected="selected">{{$branch ->emp_branch_name}}</option>
                                                    @endforeach
                                             </select>
                                         </div>
                                 </div>

                                 <div class="form-group">
                                       <label class="control-label col-md-3 col-sm-3 col-xs-12">Jobs Types</label>
                                         <div class="col-md-6 col-sm-6 col-xs-6">
                                             <select name="emp_job_types" class="form-control">
                                                  <option value="0" selected="selected">----Select Jobs Types----</option>
                                                  <option value="Contractual">Contractual</option>
                                                  <option value="Hourly">Hourly</option>
                                                  <option value="Monthly">Monthly</option>
                                                  <option value="Part Time">Part-Time</option>
                                             </select>
                                         </div>
                                      </div>



                                  <div class="form-group">
                                       <label class="control-label col-md-3 col-sm-3 col-xs-3">Agreement Date</label>
                                           <div class="col-md-6 col-sm-6 col-xs-12">
                                                 <input type="text" name="emp_agreement_date" class="form-control" data-inputmask="'mask': '99/99/9999'">
                                                  <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                            </div>
                                    </div>

                                    <div class="form-group">
                                       <label class="control-label col-md-3 col-sm-3 col-xs-12">Working Hours</label>
                                         <div class="col-md-6 col-sm-6 col-xs-6">
                                             <select name="emp_working_hour" class="form-control">
                                                  <option value="0" selected="selected">----Select One----</option>
                                                  <option value="1">1 hour </option>
                                                  <option value="2">2 hour </option>
                                                  <option value="3">3 hour </option>
                                                  <option value="4">4 hour </option>
                                                  <option value="5">5 hour </option>
                                                  <option value="6">6 hour </option>
                                                  <option value="7">7 hour </option>
                                                  <option value="8">8 hour </option>
                                                  <option value="9">9 hour </option>
                                                  <option value="10">10 hour </option>
                                                  <option value="11">11 hour </option>
                                                  <option value="12">12 hour </option>
                                             </select>
                                         </div>
                                      </div>

                                    <div class="form-group">
                                       <label class="control-label col-md-3 col-sm-3 col-xs-3">Joining Date</label>
                                           <div class="col-md-6 col-sm-6 col-xs-12">
                                                 <input type="text" name="emp_joining_date" class="form-control" data-inputmask="'mask': '99/99/9999'">
                                                  <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                            </div>
                                     </div>


                                      <div class="item form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">
                                               Basic Salary  <span class="required">*</span>
                                          </label>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                                  <input name="emp_salary" type="text" class="form-control" >
                                          </div>
                                       </div>


                                      <div class="form-group">
                                       <label class="control-label col-md-3 col-sm-3 col-xs-12"> Over Time Eligibility</label>
                                         <div class="col-md-6 col-sm-6 col-xs-6">
                                             <select name="emp_over_time" class="form-control">
                                                  <option value="0" selected="selected">----Select One----</option>
                                                  <option value="Yes">Yes</option>
                                                  <option value="No">No</option>
                                             </select>
                                         </div>
                                      </div>


                                      <div class="form-group">
                                       <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                                         <div class="col-md-6 col-sm-6 col-xs-6">
                                             <select name="emp_status" class="form-control">
                                                  <option value="0" selected="selected">----Select One----</option>
                                                  <option value="Active">Active</option>
                                                  <option value="Deactive">De-Active</option>
                                             </select>
                                         </div>
                                      </div>

                                 





                             <!-- panel-body -->
                          </div>
                        </div>
                      </div>



                      <!-- Bank Accounts Details #4 -->
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingFour" data-toggle="collapse" 
                            data-parent="#accordion" href="#collapseFour" aria-expanded="false" 
                            aria-controls="collapseFour">
                          <h4 class="panel-title">Bank Accounts Details #4</h4>
                        </a>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                          <div class="panel-body">


                               <div class="item form-group">
                                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">
                                          Account Holder Name  <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="b_acc_holder_name" type="text" class="form-control" >
                                      </div>
                                 </div>


                                 <div class="item form-group">
                                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">
                                          Bank Name  <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="bank_name" type="text" class="form-control" >
                                      </div>
                                 </div>


                                 <div class="item form-group">
                                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">
                                         Account Number <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="bank_account_number" type="text" class="form-control" >
                                      </div>
                                 </div>

                                 <div class="item form-group">
                                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">
                                        Branch <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="bank_branch" type="text" class="form-control" >
                                      </div>
                                 </div>

                                 <div class="item form-group">
                                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">
                                        Bank Code <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="bank_code" type="text" class="form-control" >
                                      </div>
                                 </div>




                          <!-- panel-body -->
                          </div>
                        </div>
                      </div>



                      <!-- Login Information #5 -->
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingFive" data-toggle="collapse" 
                            data-parent="#accordion" href="#collapseFive" aria-expanded="false" 
                            aria-controls="collapseFive">
                          <h4 class="panel-title">Login Information #5</h4>
                        </a>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                          <div class="panel-body">

                                <div class="item form-group">
                                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">
                                        Username <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="username" type="text" class="form-control" >
                                      </div>
                                 </div>


                                 <div class="item form-group">
                                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">
                                        Password <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="password" type="password" class="form-control" >
                                      </div>
                                 </div>




                                 <!-- panel-body -->  
                          </div>
                        </div>
                      </div>



                      <!-- Reference Information #6 -->
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingSix" data-toggle="collapse" 
                            data-parent="#accordion" href="#collapseSix" aria-expanded="false" 
                            aria-controls="collapseSix">
                          <h4 class="panel-title">Reference Info #6</h4>
                        </a>
                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                          <div class="panel-body">

                                <div class="item form-group">
                                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">
                                        Reference 1  <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="ref_name_1" type="text" class="form-control" >
                                      </div>
                                 </div>


                                 <div class="item form-group">
                                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">
                                         Reference 1 phone <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="ref_phone_2" type="text" class="form-control" >
                                      </div>
                                 </div>

                                 <div class="item form-group">
                                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">
                                          Reference 1 Address<span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                           <textarea id="textarea"   name="ref_address_1" class="form-control col-md-7 col-xs-12"></textarea>
                                       </div>
                                 </div>


                                 <div class="item form-group">
                                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">
                                        Reference 2  
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="ref_name_2" type="text" class="form-control" >
                                      </div>
                                 </div>


                                 <div class="item form-group">
                                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">
                                         Reference 2 phone  
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="ref_phone_2" type="text" class="form-control" >
                                      </div>
                                 </div>

                                 <div class="item form-group">
                                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">
                                          Reference 2 Address 
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                           <textarea id="textarea"   name="ref_address_2" class="form-control col-md-7 col-xs-12"></textarea>
                                       </div>
                                 </div>




                                 <!-- panel-body -->  
                          </div>
                        </div>
                      </div>




                      <div class="form-group">
                                      <div class="col-md-6 col-md-offset-3">
                                           {{Form::submit('Save',['class'=>'btn btn-success ','name'=>'btn'])}}  
                                      </div>
                                  </div> 
                       {!! Form::close() !!}

                    </div>
                    <!-- end of accordion -->


                  </div>
                </div>
              </div>

 

            </div>







            <div class="clearfix"></div>
          </div>




             <div class="clearfix"></div>
    
      
      
        </div>
        <!-- /page content -->











 @endsection
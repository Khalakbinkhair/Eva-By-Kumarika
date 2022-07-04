@extends('layouts.user-latouts')
<style>
 
  /* Styling h1 and links
  ––––––––––––––––––––––––––––––––– */
  
  
  .mocha_click > input, .vanilla_click  > input, .mint_click > input 
   {display: none;}  /* Remove radio buttons */
  
  .mocha_click > label:before, .vanilla_click  > label:before, .mint_click > label:before  { 
    content: "\f005"; /* Star */
    margin: -5px;
    font-size: 10px;
    font-family: FontAwesome;
    /* display: inline-block;  */
  }
  
  .mocha_click > label,.vanilla_click > label, .mint_click > label
  {
    color: #222222; /* Start color when not clicked */
  }
  
  .mocha_click > input:checked ~ label,.vanilla_click  > input:checked ~ label,.mint_click > input:checked ~ label
  { color: #ffca08 ; } /* Set yellow color when star checked */
  
  .mocha_click > input:hover ~ label,.vanilla_click  > input:hover ~ label, .mint_click > input:hover ~ label
  { color: #ffca08 ;  } /* Set yellow color when star hover */
  
  
      </style>
@section('content')
 <section class="content">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-10 mx-auto">
            <div class="card card-primary">
              <div class="card-header submit-Btn">
                <h3 class="card-title ">Update Info</h3>
              </div>
              <form action="{{ route('user.update_memberinfo',$memberInfo['id'])}}" method="POST">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter ..." required=""value="{{$memberInfo->name}}">
                  </div>

                  <div class="form-group">
                    <fieldset>
                      <label>Club Name</label>
                      <select name="club_name" class="form-control selectpicker" aria-label="Default select example">
                          <option value="Uttara">Uttara</option>
                          <option  value="Gulshan">Gulshan</option>
                          <option value="Banani">Banani</option>                     
                      </select>
                    </fieldset>
                  </div>


                  <div class="form-group">
                    <label>Member ID</label>
                    <input type="text" name="member_id" class="form-control" value="{{$memberInfo->member_id}}">
                  </div>
                  <div class="form-group">
                    <label>Gender &nbsp</label>
                    <input type="radio" name="gender" value="male" <?php if($memberInfo->gender == "male") print "checked"; ?> > Male &nbsp
                    <input type="radio" name="gender" value="female" <?php if($memberInfo->gender == "female") print "checked";?> >&nbsp Female
                  </div>
                  <div class="form-group">
                    <label>Area</label>
                    <select name="area" class="form-control selectpicker" data-live-search="true" aria-label="Default select example">
                      <option selected>{{$memberInfo->area}}</option>
                      @foreach($area as $info)
                        <option>{{ $info->area }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Contact No.</label>
                    <input type="number" name="phone" class="form-control" placeholder="Enter ..." value="{{$memberInfo->phone}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email"value="{{$memberInfo->email}}">
                  </div>

                   {{-- //______ Checker___________ --}}
                  <div class="field check-box">
                    <div class="row">
                      <div class="col-4 col-md-4">
                        <fieldset>
                          <input type="checkbox" name="mocha" class="form-check-input" id="mocha_rating" onclick="Mocha_function()" <?php if($memberInfo->mocha == "on") print "checked"; ?> style="left:66%">
                          <label class="form-check-label" for="exampleCheck1"><img style="width: 5rem;" class="img-fluid" src="{{asset('frontend/image/Raffinato_Mocha.png')}}"/></label>
                          <div id="mocha_click" style="display:none">
                            <div class="mocha_click d-flex justify-content-center flex-row-reverse">
                            <input type="radio" id="mocha_star5" name="mocha_rating" value="5" /><label for="mocha_star5" title="5 star"></label>
                            <input type="radio" id="mocha_star4" name="mocha_rating" value="4" /><label for="mocha_star4" title="4 star"></label>
                            <input type="radio" id="mocha_star3" name="mocha_rating" value="3" /><label for="mocha_star3" title="3 star"></label>
                            <input type="radio" id="mocha_star2" name="mocha_rating" value="2" /><label for="mocha_star2" title="2 star"></label>
                            <input type="radio" id="mocha_star1" name="mocha_rating" value="1" /><label for="mocha_star1" title="1 star"></label>
                            </div>                 
                </div>              
                        
                        
                        </fieldset>
                      </div>
                      <div class="col-4 col-md-4">
                        <fieldset>
                          <input type="checkbox" name="natural_vanilla" class="form-check-input" id="vanilla_rating" onclick="Vanilla_function()" <?php if($memberInfo->natural_vanilla == "on") print "checked"; ?> style="left:66%">
                          <label class="form-check-label" for="vanilla_rating"><img style="width: 5rem;" class="img-fluid" src="{{asset('frontend/image/Raffinato_Vanilla.png')}}"/></label>
                          <div id="vanilla_click" style="display:none">
                            <div class="vanilla_click d-flex justify-content-center flex-row-reverse">
                                <input type="radio" id="vanilla_star5" name="vanilla_rating" value="5" /><label for="vanilla_star5" title="5 star"></label>
                                <input type="radio" id="vanilla_star4" name="vanilla_rating" value="4" /><label for="vanilla_star4" title="4 star"></label>
                                <input type="radio" id="vanilla_star3" name="vanilla_rating" value="3" /><label for="vanilla_star3" title="3 star"></label>
                                <input type="radio" id="vanilla_star2" name="vanilla_rating" value="2" /><label for="vanilla_star2" title="2 star"></label>
                                <input type="radio" id="vanilla_star1" name="vanilla_rating" value="1" /><label for="vanilla_star1" title="1 star"></label>
                            </div>
                             </div>
                        
                        </fieldset>
                      </div>
                      <div class="col-4 col-md-4">
                        <fieldset>
                          <input type="checkbox" name="mint_chocolate" class="form-check-input" id="mint_rating" onclick="Mint_function()" <?php if($memberInfo->mint_chocolate == "on") print "checked"; ?> style="left:66%">
                          <label class="form-check-label" for="mint_rating"><img style="width: 5rem;" class="img-fluid" src="{{asset('frontend/image/Raffinato_Mint.png')}}"/></label>
                          <div id="mint_click" style="display:none">              
                            <div class="mint_click d-flex justify-content-center flex-row-reverse">
                                <input type="radio" id="mint_star5" name="mint_rating" value="5" /><label for="mint_star5" title="5 star"></label>
                                <input type="radio" id="mint_star4" name="mint_rating" value="4" /><label for="mint_star4" title="4 star"></label>
                                <input type="radio" id="mint_star3" name="mint_rating" value="3" /><label for="mint_star3" title="3 star"></label>
                                <input type="radio" id="mint_star2" name="mint_rating" value="2" /><label for="mint_star2" title="2 star"></label>
                                <input type="radio" id="mint_star1" name="mint_rating" value="1" /><label for="mint_star1" title="1 star"></label>
                            </div>                       
                            </div>
       
                        </fieldset>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary submit-Btn">Submit</button>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>


 
      <script type="text/javascript">
 
 
        function Mocha_function() {
          var checkBox = document.getElementById("mocha_rating");
          var text = document.getElementById("mocha_click");
          if (checkBox.checked == true){
            text.style.display = "block";
          } else {
             text.style.display = "none";
          }
          
        }
        function Vanilla_function() {
          var checkBox = document.getElementById("vanilla_rating");
          var text = document.getElementById("vanilla_click");
          if (checkBox.checked == true){
            text.style.display = "block";
          } else {
             text.style.display = "none";
          }
        
          
        }
        
        function Mint_function() {
          var checkBox = document.getElementById("mint_rating");
          var text = document.getElementById("mint_click");
          if (checkBox.checked == true){
            text.style.display = "block";
        
            
          } else {
             text.style.display = "none";
          }
          
        }
        
        
        </script>
             
    </section>
@endsection
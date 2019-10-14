@extends('layouts.app')
@section('pageTitle', 'Take a survey')
@section('content')
@include('component.leftsidebar')
<style>
    /* Style the form
    #regForm {
      background-color: #ffffff;
      margin: 100px auto;
      padding: 40px;
      width: 70%;
      min-width: 300px;
    } */

    /* Style the input fields */
    input {
      padding: 10px;
      width: 100%;
      font-size: 17px;
      font-family: Raleway;
      border: 1px solid #aaaaaa;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
      background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
      display: none;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbbbbb;
      border: none;
      border-radius: 50%;
      display: inline-block;
      opacity: 0.5;
    }

    /* Mark the active step: */
    .step.active {
      opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
      background-color: #4CAF50;
    } 
</style>
<div class="col-lg-9">
    <div class="loadMore">
        <div class="central-meta item">
            <div class="editing-info">
                    <div class="box box-default" style="height: 420px;">
                        
                        <form id="regForm" method="POST" action="{{ route('storesurvey') }}" enctype="multipart/form-data">
                            <div class="box-body">      
                              {{ csrf_field() }}
                                <div class="tab">
                                    <div class="box-header with-border" style="text-align: center">
                                      <h3>Hurray!, you made it. Let us know how far you can go.</h3>
                                    </div>
                                    <h5 class="f-title"><i class="ti-info-alt"></i> What is your current reading rate?</h5>
                                    <input type="hidden" name="id"  value="{{ $survey->id }}">
                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-6">
                                            <div class="form-radio">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" checked="checked" name="reading_rate" value="2 bpw"><i class="check-box"></i>2 bpw
                                                    </label>
                                                </div><br>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="reading_rate"><i class="check-box" value="1 bpw"></i>1 bpw
                                                    </label>
                                                </div><br>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="reading_rate" value="2 bpm"><i class="check-box"></i>2 bpm
                                                    </label>
                                                </div><br>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="reading_rate"><i class="check-box" value="1 bpm"></i>1 bpm
                                                    </label>
                                                </div><br>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="reading_rate" value="10 bpy"><i class="check-box"></i>10bpy
                                                    </label>
                                                </div><br>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="reading_rate"><i class="check-box" value="6 bpy"></i>6 bpyw
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  

                                <div class="tab">
                                    <h5 class="f-title"><i class="ti-info-alt"></i> How Long Do You Read Uninteruptable?</h5>
                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-8">
                                            <div class="form-radio">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" checked="checked" name="reading hour" value="1"><i class="check-box"></i>1 Hour
                                                    </label>
                                                </div><br>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="reading hour"><i class="check-box" value="2"></i>2 Hours
                                                    </label>
                                                </div><br>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="reading hour" value="5"><i class="check-box"></i>5 Hours
                                                    </label>
                                                </div><br>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="reading hour"><i class="check-box" value="10"></i>10 Hours
                                                    </label>
                                                </div><br>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="reading_hour" value="20"><i class="check-box"></i>20 Hours
                                                    </label>
                                                </div><br>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="reading_hour"><i class="check-box" value="40"></i>40 Hours
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                              <div class="tab">
                                <h5 class="f-title"><i class="ti-info-alt"></i>Why you want to embark on this quest (what success means for you on this quest)?</h5>
                                <div class="form-group">
                                    <textarea class="form-control" name="reason" required=""></textarea>
                                </div>
                              </div> 

                              <div class="tab">
                                <h5 class="f-title"><i class="ti-info-alt"></i>How this quest can improve your life, career or business?</h5>
                                <div class="form-group">
                                    <textarea class="form-control" name="quest" required=""></textarea>
                                </div>
                              </div> 

                                <div class="tab">
                                    <h5 class="f-title"><i class="ti-info-alt"></i>What kind of books interest you?</h5>
                                    <div class="form-group">
                                        <select class="mdb-select colorful-select dropdown-primary md-form" multiple searchable="Search here.." name="books_read[]">
                                            <option>Choose your interest</option>
                                            @forelse($category as $cat)
                                            <option value="{{ $cat->id }}" @if(in_array($cat->id , $exploded )) selected @endif>{{ $cat->cat }}</option>
                                            @empty
                                            @endforelse
                                       
                                      </select>
                                    </div>
                                </div> 

                                <div class="tab">
                                    <h5 class="f-title"><i class="ti-info-alt"></i>Your favourite author(s)? List and separate them with comma</h5>
                                <div class="form-group">
                                    <textarea class="form-control" name="author" required=""></textarea>
                                </div>
                                </div>

                                <div class="tab">
                                    <h5 class="f-title"><i class="ti-info-alt"></i>What do you want to develop?</h5>
                                    <div class="form-group">
                                        <select class="mdb-select colorful-select dropdown-primary md-form form-control" multiple searchable="Search here.." name="book_interest[]">
                                            <option>Choose your interest</option>
                                            
                                            <option value="Aptitude Development" @if(in_array("Aptitude Development", $explodedd )) selected @endif>Aptitude Development</option>
                                            <option value="Skills Acquisition" @if(in_array("Skills Acquisition" , $explodedd )) selected @endif>Skills Acquisition</option>
                                            <option value="Career Path" @if(in_array("Career Path" , $explodedd )) selected @endif>Career Path</option>
                                        </select>
                                    </div>
                                </div>

                              <div class="col-lg-12 form-group">
                                <div style="overflow:auto;">
                                  <div style="float:right;">
                                    <button type="button" id="prevBtn" class="btn btn-info" onclick="nextPrev(-1)">Previous</button>
                                    <button type="button" id="nextBtn" class="btn btn-info"  onclick="nextPrev(1)">Next</button>
                                  
                                  </div>
                                </div>

                                <!-- Circles which indicates the steps of the form: -->
                                <div style="text-align:center;margin-top:40px;">
                                  <span class="step"></span>
                                  <span class="step"></span>
                                  <span class="step"></span>
                                  <span class="step"></span>
                                  <span class="step"></span>
                                  <span class="step"></span>
                                  <span class="step"></span>
                                </div>
                              </div>
                            </div>
                        </form>



                    </div>
            </div>
        </div>
    </div>
</div>
<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
      // This function will display the specified tab of the form ...
      var x = document.getElementsByClassName("tab");
      x[n].style.display = "block";
      // ... and fix the Previous/Next buttons:
      if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "inline";
      }
      if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
      } else {
        document.getElementById("nextBtn").innerHTML = "Next";
      }
      // ... and run a function that displays the correct step indicator:
      fixStepIndicator(n)
    }

    function nextPrev(n) {
      // This function will figure out which tab to display
      var x = document.getElementsByClassName("tab");
      // Exit the function if any field in the current tab is invalid:
      if (n == 1 && !validateForm()) return false;
      // Hide the current tab:
      x[currentTab].style.display = "none";
      // Increase or decrease the current tab by 1:
      currentTab = currentTab + n;
      // if you have reached the end of the form... :
      if (currentTab >= x.length) {
        //...the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
    }

    function validateForm() {
      // This function deals with validation of the form fields
      var x, y, i, valid = true;
      x = document.getElementsByClassName("tab");
      y = x[currentTab].getElementsByTagName("input");
      // A loop that checks every input field in the current tab:
      for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
          // add an "invalid" class to the field:
          y[i].className += " invalid";
          // and set the current valid status to false:
          valid = false;
        }
      }
      // If the valid status is true, mark the step as finished and valid:
      if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
      }
      return valid; // return the valid status
    }

    function fixStepIndicator(n) {
      // This function removes the "active" class of all steps...
      var i, x = document.getElementsByClassName("step");
      for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
      }
      //... and adds the "active" class to the current step:
      x[n].className += " active";
    }
</script>
@endsection
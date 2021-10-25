<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <title>Register Form</title>

   <style>
      body{
        background-color:#f2dea5;
     
    }
    
     .header{
       background:#e60000;
       color:white;
       margin:0px 0px 30px 0px;
       padding:10px 500PX 10PX 500PX;
       
     }
     .header1{
       background:#e60000;
       color:white;
       margin:30px 0px 30px 0px;
       padding:0px 300PX 0PX 500PX;
       
     }
     .footer{
       margin:30px 0px 30px 0px;
      text-align:center;
       
     }
   </style>
     </head>
  
  <body>  
    <div class="header">
    <h2 >NOMINATION FORM</h2>
    </div>
   <div class="container">
          <div > 
               <label for="inputEmail4" class="form-label">Full Name:</label>
               <input type="text" class="form-control" id="full_name">
          </div>
 
  <div >
    <label for="inputPassword5" class="form-label">Name of the Organisation:</label>
    <input type="text" class="form-control" id="org_name">
  </div>
  <div class="row g-3">
  <div class="col-md-8">
    <label for="inputPassword5" class="form-label">Date of Birth:</label>
    <input type="text" class="form-control" id="dob_name">
  </div>
  <div class="col-md-4">
  <label for="inputgender" class="form-label">Sex:</label>
    <p> Male <input type="radio" name="gender"id="gender">  &nbsp; &nbsp; &nbsp;
     Female<input type="radio" name="gender"id="gender"></p>
  
  <!-- <input type="check" class="form-control" id="gender"> -->
  <!-- <select id="inputgendere" class="form-select">
      <option selected></option>
      <option value="1">Male</option>
<option value="2">Female</option>
</select> -->
  </div>
 </div>
  <div  >
    <label for="inputAddress2" class="form-label">Father's/Husband's Name:</label>
    <input type="text" class="form-control" id="f_h_name">
  </div>

  <div >
    <label for="inputEmail4" class="form-label">Mailing Address:</label>
    <input type="email" class="form-control" id="mail">
  </div>
 
 <div class="row g-3">
 <div class="col-md-4">
    <label for="inputCity" class="form-label">City:</label>
    <input type="text" class="form-control" id="city">
  </div>
  <div class="col-md-4">
    <label for="inputCity" class="form-label">District:</label>
    <input type="text" class="form-control" id="district">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State:</label>
    <select id="inputState" class="form-select">
      <option selected>Choose Your state</option>
      <option value="11">ANDHRA PRADESH</option>
<option value="32">ANDOMAN NIKOBAR</option>
<option value="27">ARUNACHAL PRADESH</option>
<option value="28">ASSAM</option>
<option value="6">BIHAR</option>
<option value="30">CHANDIGARH</option>
<option value="18">CHHATTISGARH</option>
<option value="79">DAMAN</option>
<option value="78">DELHI</option>
<option value="20">GUJRAT</option>
<option value="7">HARYANA</option>
<option value="17">HIMANCHAL PRADESH</option>
<option value="13">J &amp; K</option>
<option value="12">JHAR KHAND</option>
<option value="14">KARNATAKA</option>
<option value="15">KERALA</option>
<option value="31">LAKSHADWEEP</option>
<option value="3">M.P.</option>
<option value="9">MAHARASHTRA</option>
<option value="26">MANIPUR</option>
<option value="22">MEGHALAYA</option>
<option value="23">MIJORAM</option>
<option value="24">NAGALAND</option>
<option value="5">NEW DELHI</option>
<option value="10">ORISSA</option>
<option value="2">PUNJAB</option>
<option value="8">RAJASTHAN</option>
<option value="21">SIKKIM</option>
<option value="16">TAMIL NADU</option>
<option value="80">TELANGANA</option>
<option value="25">TRIPURA</option>
<option value="1">UTTAR PRADESH</option>
 <option value="4">UTTARAKHAND</option>
<option value="19">WEST BENGAL</option>
    </select>
  </div>
  </div>
  
  <div class="row g-3">
  <div class="col-md-6">
    <label for="inputZip" class="form-label">Pin/Zip Code:</label>
    <input type="number" class="form-control" id="zip">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Mobile No:</label>
    <input type="phonenumber" class="form-control" id="mobile_no">
  </div>
   </div>
   <div class="row g-3">
  <div class="col-md-8">
    <label for="inputPassword4" class="form-label">Email id:</label>
    <input type="mail" class="form-control" id="email">
  </div>
  <div class="col-md-4">
    <label for="inputPassword4" class="form-label">Qulification:</label>
    <input type="text" class="form-control" id="quli">
  </div>
    </div>
  <div class="col-md-4">
    <label for="inputAddress" class="form-label">Year of Experiance:</label>
    <input type="text" class="form-control" id="exp">
  </div>
   <div class="col-12">
   <label for="ach" class="form-lable">Your Achivements(in any field), you may attach cerificate sheets:</label>
    <textarea name="mytext"cols="70" rows="5" class="form-control" id="achivements"></textarea>
   </div>
    </div>
   <div class="header1">
    <h2 >CATEGORIES(Tick any one)</h2>
    </div>
    <div class="container">
    <div>
<label for="catagories" class="form-label" id="cata">
    <p><strong>BUSINESSMAN <input type="radio" name="cata">  &nbsp; &nbsp; &nbsp;
       SOCIAL WORK<input type="radio" name="cata">  &nbsp; &nbsp; &nbsp;
       SOCIAL MEDIA<input type="radio" name="cata">  &nbsp; &nbsp; &nbsp;
       ARTIST/SINGER<input type="radio" name="cata">  &nbsp; &nbsp; &nbsp;
       FASHION/MODELING<input type="radio" name="cata">  &nbsp; &nbsp; &nbsp;
       FILM/TV SERIAL<input type="radio" name="cata">  &nbsp; &nbsp; &nbsp;
       SPORTS<input type="radio" name="cata">  &nbsp; &nbsp; &nbsp;
       ENTERPRENEUR<input type="radio" name="cata">  &nbsp; &nbsp; &nbsp;
       NGO/TRUST<input type="radio" name="cata">  &nbsp; &nbsp; &nbsp;
       INDUSTRIES<input type="radio" name="cata">  &nbsp; &nbsp; &nbsp;
       SERVICE PROVIDER<input type="radio" name="cata">  &nbsp; &nbsp; &nbsp;
       FASHION DESIGNER<input type="radio" name="cata">  &nbsp; &nbsp; &nbsp;
       MEDIA/TV<input type="radio" name="cata">  &nbsp; &nbsp; &nbsp;
       OTHERS<input type="radio" name="cata">  &nbsp; &nbsp; &nbsp;
       </label> 
       </strong> </p>
       </div>
  <p ><strong>Isntructions:Self-attested documents to be attached along with the application form: All Educational Certificates, Additional Certificates and achivements, Photo ID proof, Address proof, Small registration Fees Including Venue Expenditure Will Be Needed</strong> </p>

  <div class="row g-3">
  <div class="col-md-6">
    <label for="inputPassword5" class="form-label">Date :</label>
    <input type="text" class="form-control" id="date">
  </div>
  <div class="col-md-6">
    <label for="inputPassword5" class="form-label">Signature :</label>
    <input type="text" class="form-control" >
  </div>
 </div>
  <br> 
 <div class="row g-3">
  <div class="col-12">
    <label for="inputPassword5" class="form-label">Referance (Local with Mobile Number):</label>
    <!-- <input type="text" class="form-control" id="ref" > -->
 
  <div class="col-md-6">
    <label for="inputPassword5" class="form-label">Signature1:</label>
    <input type="text" class="form-control" id="sign1">
  </div>
  <div class="col-md-6">
    <label for="inputPassword5" class="form-label">Signature2:</label>
    <input type="text" class="form-control" id="sign2">
  </div>
 </div>
    </div>
<br>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
       Agree to terms and conditions
      </label>
    </div>
  </div>
  <br>
  <div class="col-12">
    <button type="button" class="btn btn-primary" id="new_btn">Submit</button>
  </div>
</div>
</div>
</form>
    </div>
    </div>
    <div class="footer">
    <p><strong>Address:G-8,GK House, 187 A, Sant Nagar, East Of Kailash, New Delhi-110065<br>Phone-9377100100,9477100100,7205100100, Mail ID:pkbhoot@gmail.com</strong></p>
    </div>
  

   <script type="text/javascript">
       $(document).ready(function(){

    $('#new_btn').click(function(e){
    e.preventDefault();
    var full_name = $("#full_name").val();
    var org_name = $("#org_name").val();
    var dob_name = $("#dob_name").val();
    var gender = $("#gender").val();
    var f_h_name = $("#f_h_name").val();
    var mail = $("#mail").val();
    var city = $("#city").val();
    var district = $("#district").val();
    var address = $("#address").val();
    var inputState = $("#inputState :option").val();
    var zip = $("#zip").val();
    var mobile_no = $("#mobile_no").val();
    var email = $("#email").val();
    var quli = $("#quli").val();
    var exp = $("#exp").val();
    var achivements = $("#achivements").val();
    var cata = $("#cata").val();
    var date = $("#date").val();
    var sign1 = $("#sign1").val();
    var sign2 = $("#sign2").val();



    var datastring = {
      full_name: full_name,
      org_name: org_name,
      dob_name: dob_name,
      gender: gender,
      f_h_name: f_h_name,
      mail: mail,
      city: city,
      district: district,
      address: address,
      inputState: inputState,
      zip: zip,
      mobile_no: mobile_no,
      email: email,
      quli: quli,
      exp: exp,
      achivements: achivements,
      cata: cata,
      date: date,
      sign1: sign1,
      sign2: sign2,
     
    };
     

        $.ajax({
                url:"<?=base_url();?>home/inserteventdata/",
                dataType: 'json',
                method:"POST",
                data:datastring,
                catch:false,
                success:function(data){
                    alert(data);
                  location.reload(true);
                }
           });
    });
    )};
    </scrip>
  </body>

  </html>
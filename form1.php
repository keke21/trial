<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ministry of Social Development</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="calendar.js"></script>
</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Ministry of Social Development</a></h1>
		<form id="form_1162837" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Ministry of Social Development</h2>
                        <p>Domestic violence unit</p>

<p>Data collection Form</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Date of incident </label>
		<span>
			<input id="element_1_1" name="element_1_1" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_1_1">MM</label>
		</span>
		<span>
			<input id="element_1_2" name="element_1_2" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_1_2">DD</label>
		</span>
		<span>
	 		<input id="element_1_3" name="element_1_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_1_3">YYYY</label>
		</span>
	
		<span id="calendar_1">
			<img id="cal_img_1" class="datepicker" src="calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_1_3",
			baseField    : "element_1",
			displayArea  : "calendar_1",
			button		 : "cal_img_1",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>		<li id="li_22" >
		<label class="description" for="element_22">Type of Abuse </label>
		<div>
		<select class="element select medium" id="element_22" name="element_22"> 
			<option value="" selected="selected"></option>
<option value="1" >Verbal Abuse</option>
<option value="2" >Sexual Abuse</option>
<option value="3" >Emotional Abuse</option>
<option value="4" >Physical Abuse</option>
<option value="5" >Discriminatory Abuse</option>

		</select>
		</div> 
		</li>		<li class="section_break">
			<h3>Client Information</h3>
			<p></p>
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Name </label>
		<span>
			<input id="element_2_1" name= "element_2_1" class="element text" maxlength="255" size="8" value=""/>
			<label>First</label>
		</span>
		<span>
			<input id="element_2_2" name= "element_2_2" class="element text" maxlength="255" size="14" value=""/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Date of Birth </label>
		<span>
			<input id="element_4_1" name="element_4_1" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_4_1">MM</label>
		</span>
		<span>
			<input id="element_4_2" name="element_4_2" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_4_2">DD</label>
		</span>
		<span>
	 		<input id="element_4_3" name="element_4_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_4_3">YYYY</label>
		</span>
	
		<span id="calendar_4">
			<img id="cal_img_4" class="datepicker" src="calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_4_3",
			baseField    : "element_4",
			displayArea  : "calendar_4",
			button		 : "cal_img_4",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>		<li id="li_23" >
		<label class="description" for="element_23">Sex </label>
		<div>
		<select class="element select medium" id="element_23" name="element_23"> 
			<option value="" selected="selected"></option>
<option value="1" >Male</option>
<option value="2" >Female</option>

		</select>
		</div> 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Contact Number </label>
		<span>
			<input id="element_5_1" name="element_5_1" class="element text" size="3" maxlength="3" value="" type="text"> -
			<label for="element_5_1">(###)</label>
		</span>
		<span>
			<input id="element_5_2" name="element_5_2" class="element text" size="3" maxlength="3" value="" type="text"> -
			<label for="element_5_2">###</label>
		</span>
		<span>
	 		<input id="element_5_3" name="element_5_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_5_3">####</label>
		</span>
		 
		</li>		<li id="li_24" >
		<label class="description" for="element_24">Marital Status </label>
		<div>
		<select class="element select medium" id="element_24" name="element_24"> 
			<option value="" selected="selected"></option>
<option value="1" >Single</option>
<option value="2" >Married</option>
<option value="3" >Widowed</option>
<option value="4" >Divorced</option>

		</select>
		</div> 
		</li>		<li id="li_6" >
		<label class="description" for="element_6">Address </label>
		
		<div>
			<input id="element_6_1" name="element_6_1" class="element text large" value="" type="text">
			<label for="element_6_1">Street Address</label>
		</div>
	
		<div>
			<input id="element_6_2" name="element_6_2" class="element text large" value="" type="text">
			<label for="element_6_2">Address Line 2</label>
		</div>
	
		<div class="left">
			<input id="element_6_3" name="element_6_3" class="element text medium" value="" type="text">
			<label for="element_6_3">City</label>
		</div>
	
		<div class="right">
			<input id="element_6_4" name="element_6_4" class="element text medium" value="" type="text">
			<label for="element_6_4">State / Province / Region</label>
		</div>
	
		<div class="left">
			<input id="element_6_5" name="element_6_5" class="element text medium" maxlength="15" value="" type="text">
			<label for="element_6_5">Postal / Zip Code</label>
		</div>
	
		<div class="right">
			<select class="element select medium" id="element_6_6" name="element_6_6"> 
			<option value="" selected="selected"></option>
<option value="Afghanistan" >Afghanistan</option>
<option value="Albania" >Albania</option>
<option value="Algeria" >Algeria</option>
<option value="Andorra" >Andorra</option>
<option value="Antigua and Barbuda" >Antigua and Barbuda</option>
<option value="Argentina" >Argentina</option>
<option value="Armenia" >Armenia</option>
<option value="Australia" >Australia</option>
<option value="Austria" >Austria</option>
<option value="Azerbaijan" >Azerbaijan</option>
<option value="Bahamas" >Bahamas</option>
<option value="Bahrain" >Bahrain</option>
<option value="Bangladesh" >Bangladesh</option>
<option value="Barbados" >Barbados</option>
<option value="Belarus" >Belarus</option>
<option value="Belgium" >Belgium</option>
<option value="Belize" >Belize</option>
<option value="Benin" >Benin</option>
<option value="Bhutan" >Bhutan</option>
<option value="Bolivia" >Bolivia</option>
<option value="Bosnia and Herzegovina" >Bosnia and Herzegovina</option>
<option value="Botswana" >Botswana</option>
<option value="Brazil" >Brazil</option>
<option value="Brunei" >Brunei</option>
<option value="Bulgaria" >Bulgaria</option>
<option value="Burkina Faso" >Burkina Faso</option>
<option value="Burundi" >Burundi</option>
<option value="Cambodia" >Cambodia</option>
<option value="Cameroon" >Cameroon</option>
<option value="Canada" >Canada</option>
<option value="Cape Verde" >Cape Verde</option>
<option value="Central African Republic" >Central African Republic</option>
<option value="Chad" >Chad</option>
<option value="Chile" >Chile</option>
<option value="China" >China</option>
<option value="Colombia" >Colombia</option>
<option value="Comoros" >Comoros</option>
<option value="Congo" >Congo</option>
<option value="Cook Islands and Niue" >Cook Islands and Niue</option>
<option value="Costa Rica" >Costa Rica</option>
<option value="Côte d'Ivoire" >Côte d'Ivoire</option>
<option value="Croatia" >Croatia</option>
<option value="Cuba" >Cuba</option>
<option value="Cyprus" >Cyprus</option>
<option value="Czech Republic" >Czech Republic</option>
<option value="Denmark" >Denmark</option>
<option value="Djibouti" >Djibouti</option>
<option value="Dominica" >Dominica</option>
<option value="Dominican Republic" >Dominican Republic</option>
<option value="East Timor" >East Timor</option>
<option value="Ecuador" >Ecuador</option>
<option value="Egypt" >Egypt</option>
<option value="El Salvador" >El Salvador</option>
<option value="Equatorial Guinea" >Equatorial Guinea</option>
<option value="Eritrea" >Eritrea</option>
<option value="Estonia" >Estonia</option>
<option value="Ethiopia" >Ethiopia</option>
<option value="Fiji" >Fiji</option>
<option value="Finland" >Finland</option>
<option value="France" >France</option>
<option value="Gabon" >Gabon</option>
<option value="Gambia" >Gambia</option>
<option value="Georgia" >Georgia</option>
<option value="Germany" >Germany</option>
<option value="Ghana" >Ghana</option>
<option value="Greece" >Greece</option>
<option value="Grenada" >Grenada</option>
<option value="Guatemala" >Guatemala</option>
<option value="Guinea" >Guinea</option>
<option value="Guinea-Bissau" >Guinea-Bissau</option>
<option value="Guyana" >Guyana</option>
<option value="Haiti" >Haiti</option>
<option value="Honduras" >Honduras</option>
<option value="Hong Kong" >Hong Kong</option>
<option value="Hungary" >Hungary</option>
<option value="Iceland" >Iceland</option>
<option value="India" >India</option>
<option value="Indonesia" >Indonesia</option>
<option value="Iran" >Iran</option>
<option value="Iraq" >Iraq</option>
<option value="Ireland" >Ireland</option>
<option value="Israel" >Israel</option>
<option value="Italy" >Italy</option>
<option value="Jamaica" >Jamaica</option>
<option value="Japan" >Japan</option>
<option value="Jordan" >Jordan</option>
<option value="Kazakhstan" >Kazakhstan</option>
<option value="Kenya" >Kenya</option>
<option value="Kiribati" >Kiribati</option>
<option value="North Korea" >North Korea</option>
<option value="South Korea" >South Korea</option>
<option value="Kuwait" >Kuwait</option>
<option value="Kyrgyzstan" >Kyrgyzstan</option>
<option value="Laos" >Laos</option>
<option value="Latvia" >Latvia</option>
<option value="Lebanon" >Lebanon</option>
<option value="Lesotho" >Lesotho</option>
<option value="Liberia" >Liberia</option>
<option value="Libya" >Libya</option>
<option value="Liechtenstein" >Liechtenstein</option>
<option value="Lithuania" >Lithuania</option>
<option value="Luxembourg" >Luxembourg</option>
<option value="Macedonia" >Macedonia</option>
<option value="Madagascar" >Madagascar</option>
<option value="Malawi" >Malawi</option>
<option value="Malaysia" >Malaysia</option>
<option value="Maldives" >Maldives</option>
<option value="Mali" >Mali</option>
<option value="Malta" >Malta</option>
<option value="Marshall Islands" >Marshall Islands</option>
<option value="Mauritania" >Mauritania</option>
<option value="Mauritius" >Mauritius</option>
<option value="Mexico" >Mexico</option>
<option value="Micronesia" >Micronesia</option>
<option value="Moldova" >Moldova</option>
<option value="Monaco" >Monaco</option>
<option value="Mongolia" >Mongolia</option>
<option value="Montenegro" >Montenegro</option>
<option value="Morocco" >Morocco</option>
<option value="Mozambique" >Mozambique</option>
<option value="Myanmar" >Myanmar</option>
<option value="Namibia" >Namibia</option>
<option value="Nauru" >Nauru</option>
<option value="Nepal" >Nepal</option>
<option value="Netherlands" >Netherlands</option>
<option value="New Zealand" >New Zealand</option>
<option value="Nicaragua" >Nicaragua</option>
<option value="Niger" >Niger</option>
<option value="Nigeria" >Nigeria</option>
<option value="Norway" >Norway</option>
<option value="Oman" >Oman</option>
<option value="Pakistan" >Pakistan</option>
<option value="Palau" >Palau</option>
<option value="Panama" >Panama</option>
<option value="Papua New Guinea" >Papua New Guinea</option>
<option value="Paraguay" >Paraguay</option>
<option value="Peru" >Peru</option>
<option value="Philippines" >Philippines</option>
<option value="Poland" >Poland</option>
<option value="Portugal" >Portugal</option>
<option value="Puerto Rico" >Puerto Rico</option>
<option value="Qatar" >Qatar</option>
<option value="Romania" >Romania</option>
<option value="Russia" >Russia</option>
<option value="Rwanda" >Rwanda</option>
<option value="Saint Kitts and Nevis" >Saint Kitts and Nevis</option>
<option value="Saint Lucia" >Saint Lucia</option>
<option value="Saint Vincent and the Grenadines" >Saint Vincent and the Grenadines</option>
<option value="Samoa" >Samoa</option>
<option value="San Marino" >San Marino</option>
<option value="Sao Tome and Principe" >Sao Tome and Principe</option>
<option value="Saudi Arabia" >Saudi Arabia</option>
<option value="Senegal" >Senegal</option>
<option value="Serbia and Montenegro" >Serbia and Montenegro</option>
<option value="Seychelles" >Seychelles</option>
<option value="Sierra Leone" >Sierra Leone</option>
<option value="Singapore" >Singapore</option>
<option value="Slovakia" >Slovakia</option>
<option value="Slovenia" >Slovenia</option>
<option value="Solomon Islands" >Solomon Islands</option>
<option value="Somalia" >Somalia</option>
<option value="South Africa" >South Africa</option>
<option value="Spain" >Spain</option>
<option value="Sri Lanka" >Sri Lanka</option>
<option value="Sudan" >Sudan</option>
<option value="Suriname" >Suriname</option>
<option value="Swaziland" >Swaziland</option>
<option value="Sweden" >Sweden</option>
<option value="Switzerland" >Switzerland</option>
<option value="Syria" >Syria</option>
<option value="Taiwan" >Taiwan</option>
<option value="Tajikistan" >Tajikistan</option>
<option value="Tanzania" >Tanzania</option>
<option value="Thailand" >Thailand</option>
<option value="Togo" >Togo</option>
<option value="Tonga" >Tonga</option>
<option value="Trinidad and Tobago" >Trinidad and Tobago</option>
<option value="Tunisia" >Tunisia</option>
<option value="Turkey" >Turkey</option>
<option value="Turkmenistan" >Turkmenistan</option>
<option value="Tuvalu" >Tuvalu</option>
<option value="Uganda" >Uganda</option>
<option value="Ukraine" >Ukraine</option>
<option value="United Arab Emirates" >United Arab Emirates</option>
<option value="United Kingdom" >United Kingdom</option>
<option value="United States" >United States</option>
<option value="Uruguay" >Uruguay</option>
<option value="Uzbekistan" >Uzbekistan</option>
<option value="Vanuatu" >Vanuatu</option>
<option value="Vatican City" >Vatican City</option>
<option value="Venezuela" >Venezuela</option>
<option value="Vietnam" >Vietnam</option>
<option value="Yemen" >Yemen</option>
<option value="Zambia" >Zambia</option>
<option value="Zimbabwe" >Zimbabwe</option>
	
			</select>
		<label for="element_6_6">Country</label>
	</div> 
		</li>		<li id="li_7" >
		<label class="description" for="element_7">Occupation </label>
		<div>
			<input id="element_7" name="element_7" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_8" >
		<label class="description" for="element_8">Number of Dependancies </label>
		<div>
			<input id="element_8" name="element_8" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li class="section_break">
			<h3>Perpretrator Information</h3>
			<p></p>
		</li>		<li id="li_10" >
		<label class="description" for="element_10">Name </label>
		<span>
			<input id="element_10_1" name= "element_10_1" class="element text" maxlength="255" size="8" value=""/>
			<label>First</label>
		</span>
		<span>
			<input id="element_10_2" name= "element_10_2" class="element text" maxlength="255" size="14" value=""/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_11" >
		<label class="description" for="element_11">Date of Birth </label>
		<span>
			<input id="element_11_1" name="element_11_1" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_11_1">MM</label>
		</span>
		<span>
			<input id="element_11_2" name="element_11_2" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_11_2">DD</label>
		</span>
		<span>
	 		<input id="element_11_3" name="element_11_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_11_3">YYYY</label>
		</span>
	
		<span id="calendar_11">
			<img id="cal_img_11" class="datepicker" src="calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_11_3",
			baseField    : "element_11",
			displayArea  : "calendar_11",
			button		 : "cal_img_11",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>		<li id="li_25" >
		<label class="description" for="element_25">Sex </label>
		<div>
		<select class="element select medium" id="element_25" name="element_25"> 
			<option value="" selected="selected"></option>
<option value="1" >Male</option>
<option value="2" >Female</option>

		</select>
		</div> 
		</li>		<li id="li_12" >
		<label class="description" for="element_12">Conact Number </label>
		<span>
			<input id="element_12_1" name="element_12_1" class="element text" size="3" maxlength="3" value="" type="text"> -
			<label for="element_12_1">(###)</label>
		</span>
		<span>
			<input id="element_12_2" name="element_12_2" class="element text" size="3" maxlength="3" value="" type="text"> -
			<label for="element_12_2">###</label>
		</span>
		<span>
	 		<input id="element_12_3" name="element_12_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_12_3">####</label>
		</span>
		 
		</li>		<li id="li_26" >
		<label class="description" for="element_26">Marital Status </label>
		<div>
		<select class="element select medium" id="element_26" name="element_26"> 
			<option value="" selected="selected"></option>
<option value="1" >Single</option>
<option value="2" >Married</option>
<option value="3" >Widowed</option>
<option value="4" >Divorced</option>

		</select>
		</div> 
		</li>		<li id="li_13" >
		<label class="description" for="element_13">Address </label>
		
		<div>
			<input id="element_13_1" name="element_13_1" class="element text large" value="" type="text">
			<label for="element_13_1">Street Address</label>
		</div>
	
		<div>
			<input id="element_13_2" name="element_13_2" class="element text large" value="" type="text">
			<label for="element_13_2">Address Line 2</label>
		</div>
	
		<div class="left">
			<input id="element_13_3" name="element_13_3" class="element text medium" value="" type="text">
			<label for="element_13_3">City</label>
		</div>
	
		<div class="right">
			<input id="element_13_4" name="element_13_4" class="element text medium" value="" type="text">
			<label for="element_13_4">State / Province / Region</label>
		</div>
	
		<div class="left">
			<input id="element_13_5" name="element_13_5" class="element text medium" maxlength="15" value="" type="text">
			<label for="element_13_5">Postal / Zip Code</label>
		</div>
	
		<div class="right">
			<select class="element select medium" id="element_13_6" name="element_13_6"> 
			<option value="" selected="selected"></option>
<option value="Afghanistan" >Afghanistan</option>
<option value="Albania" >Albania</option>
<option value="Algeria" >Algeria</option>
<option value="Andorra" >Andorra</option>
<option value="Antigua and Barbuda" >Antigua and Barbuda</option>
<option value="Argentina" >Argentina</option>
<option value="Armenia" >Armenia</option>
<option value="Australia" >Australia</option>
<option value="Austria" >Austria</option>
<option value="Azerbaijan" >Azerbaijan</option>
<option value="Bahamas" >Bahamas</option>
<option value="Bahrain" >Bahrain</option>
<option value="Bangladesh" >Bangladesh</option>
<option value="Barbados" >Barbados</option>
<option value="Belarus" >Belarus</option>
<option value="Belgium" >Belgium</option>
<option value="Belize" >Belize</option>
<option value="Benin" >Benin</option>
<option value="Bhutan" >Bhutan</option>
<option value="Bolivia" >Bolivia</option>
<option value="Bosnia and Herzegovina" >Bosnia and Herzegovina</option>
<option value="Botswana" >Botswana</option>
<option value="Brazil" >Brazil</option>
<option value="Brunei" >Brunei</option>
<option value="Bulgaria" >Bulgaria</option>
<option value="Burkina Faso" >Burkina Faso</option>
<option value="Burundi" >Burundi</option>
<option value="Cambodia" >Cambodia</option>
<option value="Cameroon" >Cameroon</option>
<option value="Canada" >Canada</option>
<option value="Cape Verde" >Cape Verde</option>
<option value="Central African Republic" >Central African Republic</option>
<option value="Chad" >Chad</option>
<option value="Chile" >Chile</option>
<option value="China" >China</option>
<option value="Colombia" >Colombia</option>
<option value="Comoros" >Comoros</option>
<option value="Congo" >Congo</option>
<option value="Cook Islands and Niue" >Cook Islands and Niue</option>
<option value="Costa Rica" >Costa Rica</option>
<option value="Côte d'Ivoire" >Côte d'Ivoire</option>
<option value="Croatia" >Croatia</option>
<option value="Cuba" >Cuba</option>
<option value="Cyprus" >Cyprus</option>
<option value="Czech Republic" >Czech Republic</option>
<option value="Denmark" >Denmark</option>
<option value="Djibouti" >Djibouti</option>
<option value="Dominica" >Dominica</option>
<option value="Dominican Republic" >Dominican Republic</option>
<option value="East Timor" >East Timor</option>
<option value="Ecuador" >Ecuador</option>
<option value="Egypt" >Egypt</option>
<option value="El Salvador" >El Salvador</option>
<option value="Equatorial Guinea" >Equatorial Guinea</option>
<option value="Eritrea" >Eritrea</option>
<option value="Estonia" >Estonia</option>
<option value="Ethiopia" >Ethiopia</option>
<option value="Fiji" >Fiji</option>
<option value="Finland" >Finland</option>
<option value="France" >France</option>
<option value="Gabon" >Gabon</option>
<option value="Gambia" >Gambia</option>
<option value="Georgia" >Georgia</option>
<option value="Germany" >Germany</option>
<option value="Ghana" >Ghana</option>
<option value="Greece" >Greece</option>
<option value="Grenada" >Grenada</option>
<option value="Guatemala" >Guatemala</option>
<option value="Guinea" >Guinea</option>
<option value="Guinea-Bissau" >Guinea-Bissau</option>
<option value="Guyana" >Guyana</option>
<option value="Haiti" >Haiti</option>
<option value="Honduras" >Honduras</option>
<option value="Hong Kong" >Hong Kong</option>
<option value="Hungary" >Hungary</option>
<option value="Iceland" >Iceland</option>
<option value="India" >India</option>
<option value="Indonesia" >Indonesia</option>
<option value="Iran" >Iran</option>
<option value="Iraq" >Iraq</option>
<option value="Ireland" >Ireland</option>
<option value="Israel" >Israel</option>
<option value="Italy" >Italy</option>
<option value="Jamaica" >Jamaica</option>
<option value="Japan" >Japan</option>
<option value="Jordan" >Jordan</option>
<option value="Kazakhstan" >Kazakhstan</option>
<option value="Kenya" >Kenya</option>
<option value="Kiribati" >Kiribati</option>
<option value="North Korea" >North Korea</option>
<option value="South Korea" >South Korea</option>
<option value="Kuwait" >Kuwait</option>
<option value="Kyrgyzstan" >Kyrgyzstan</option>
<option value="Laos" >Laos</option>
<option value="Latvia" >Latvia</option>
<option value="Lebanon" >Lebanon</option>
<option value="Lesotho" >Lesotho</option>
<option value="Liberia" >Liberia</option>
<option value="Libya" >Libya</option>
<option value="Liechtenstein" >Liechtenstein</option>
<option value="Lithuania" >Lithuania</option>
<option value="Luxembourg" >Luxembourg</option>
<option value="Macedonia" >Macedonia</option>
<option value="Madagascar" >Madagascar</option>
<option value="Malawi" >Malawi</option>
<option value="Malaysia" >Malaysia</option>
<option value="Maldives" >Maldives</option>
<option value="Mali" >Mali</option>
<option value="Malta" >Malta</option>
<option value="Marshall Islands" >Marshall Islands</option>
<option value="Mauritania" >Mauritania</option>
<option value="Mauritius" >Mauritius</option>
<option value="Mexico" >Mexico</option>
<option value="Micronesia" >Micronesia</option>
<option value="Moldova" >Moldova</option>
<option value="Monaco" >Monaco</option>
<option value="Mongolia" >Mongolia</option>
<option value="Montenegro" >Montenegro</option>
<option value="Morocco" >Morocco</option>
<option value="Mozambique" >Mozambique</option>
<option value="Myanmar" >Myanmar</option>
<option value="Namibia" >Namibia</option>
<option value="Nauru" >Nauru</option>
<option value="Nepal" >Nepal</option>
<option value="Netherlands" >Netherlands</option>
<option value="New Zealand" >New Zealand</option>
<option value="Nicaragua" >Nicaragua</option>
<option value="Niger" >Niger</option>
<option value="Nigeria" >Nigeria</option>
<option value="Norway" >Norway</option>
<option value="Oman" >Oman</option>
<option value="Pakistan" >Pakistan</option>
<option value="Palau" >Palau</option>
<option value="Panama" >Panama</option>
<option value="Papua New Guinea" >Papua New Guinea</option>
<option value="Paraguay" >Paraguay</option>
<option value="Peru" >Peru</option>
<option value="Philippines" >Philippines</option>
<option value="Poland" >Poland</option>
<option value="Portugal" >Portugal</option>
<option value="Puerto Rico" >Puerto Rico</option>
<option value="Qatar" >Qatar</option>
<option value="Romania" >Romania</option>
<option value="Russia" >Russia</option>
<option value="Rwanda" >Rwanda</option>
<option value="Saint Kitts and Nevis" >Saint Kitts and Nevis</option>
<option value="Saint Lucia" >Saint Lucia</option>
<option value="Saint Vincent and the Grenadines" >Saint Vincent and the Grenadines</option>
<option value="Samoa" >Samoa</option>
<option value="San Marino" >San Marino</option>
<option value="Sao Tome and Principe" >Sao Tome and Principe</option>
<option value="Saudi Arabia" >Saudi Arabia</option>
<option value="Senegal" >Senegal</option>
<option value="Serbia and Montenegro" >Serbia and Montenegro</option>
<option value="Seychelles" >Seychelles</option>
<option value="Sierra Leone" >Sierra Leone</option>
<option value="Singapore" >Singapore</option>
<option value="Slovakia" >Slovakia</option>
<option value="Slovenia" >Slovenia</option>
<option value="Solomon Islands" >Solomon Islands</option>
<option value="Somalia" >Somalia</option>
<option value="South Africa" >South Africa</option>
<option value="Spain" >Spain</option>
<option value="Sri Lanka" >Sri Lanka</option>
<option value="Sudan" >Sudan</option>
<option value="Suriname" >Suriname</option>
<option value="Swaziland" >Swaziland</option>
<option value="Sweden" >Sweden</option>
<option value="Switzerland" >Switzerland</option>
<option value="Syria" >Syria</option>
<option value="Taiwan" >Taiwan</option>
<option value="Tajikistan" >Tajikistan</option>
<option value="Tanzania" >Tanzania</option>
<option value="Thailand" >Thailand</option>
<option value="Togo" >Togo</option>
<option value="Tonga" >Tonga</option>
<option value="Trinidad and Tobago" >Trinidad and Tobago</option>
<option value="Tunisia" >Tunisia</option>
<option value="Turkey" >Turkey</option>
<option value="Turkmenistan" >Turkmenistan</option>
<option value="Tuvalu" >Tuvalu</option>
<option value="Uganda" >Uganda</option>
<option value="Ukraine" >Ukraine</option>
<option value="United Arab Emirates" >United Arab Emirates</option>
<option value="United Kingdom" >United Kingdom</option>
<option value="United States" >United States</option>
<option value="Uruguay" >Uruguay</option>
<option value="Uzbekistan" >Uzbekistan</option>
<option value="Vanuatu" >Vanuatu</option>
<option value="Vatican City" >Vatican City</option>
<option value="Venezuela" >Venezuela</option>
<option value="Vietnam" >Vietnam</option>
<option value="Yemen" >Yemen</option>
<option value="Zambia" >Zambia</option>
<option value="Zimbabwe" >Zimbabwe</option>
	
			</select>
		<label for="element_13_6">Country</label>
	</div> 
		</li>		<li id="li_14" >
		<label class="description" for="element_14">Occupation </label>
		<div>
			<input id="element_14" name="element_14" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_15" >
		<label class="description" for="element_15">Relation to Victim </label>
		<div>
			<input id="element_15" name="element_15" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_27" >
		<label class="description" for="element_27">Use of Alcohol </label>
		<span>
			<input id="element_27_1" name="element_27_1" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_27_1">Yes</label>
<input id="element_27_2" name="element_27_2" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_27_2">No</label>

		</span> 
		</li>		<li id="li_28" >
		<label class="description" for="element_28">Use of Drugs </label>
		<span>
			<input id="element_28_1" name="element_28_1" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_28_1">Yes</label>
<input id="element_28_2" name="element_28_2" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_28_2">No</label>

		</span> 
		</li>		<li id="li_16" >
		<label class="description" for="element_16">Weapon used </label>
		<div>
			<input id="element_16" name="element_16" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_17" >
		<label class="description" for="element_17">Date(s) of previous incidents </label>
		<span>
			<input id="element_17_1" name="element_17_1" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_17_1">MM</label>
		</span>
		<span>
			<input id="element_17_2" name="element_17_2" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_17_2">DD</label>
		</span>
		<span>
	 		<input id="element_17_3" name="element_17_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_17_3">YYYY</label>
		</span>
	
		<span id="calendar_17">
			<img id="cal_img_17" class="datepicker" src="calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_17_3",
			baseField    : "element_17",
			displayArea  : "calendar_17",
			button		 : "cal_img_17",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>		<li class="section_break">
			<h3>Refferral if any</h3>
			<p></p>
		</li>		<li id="li_19" >
		<label class="description" for="element_19"> </label>
		<div>
			<input id="element_19" name="element_19" class="element text large" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li class="section_break">
			<h3>Outcome/ Action Taken</h3>
			<p></p>
		</li>		<li id="li_21" >
		<label class="description" for="element_21"> </label>
		<div>
			<input id="element_21" name="element_21" class="element text large" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_29" >
		<label class="description" for="element_29"> </label>
		<div>
			<input id="element_29" name="element_29" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li class="section_break">
			<h3>Recording Agency</h3>
			<p></p>
		</li>		<li id="li_30" >
		<label class="description" for="element_30"> </label>
		<div>
			<input id="element_30" name="element_30" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li class="section_break">
			<h3>Date & Signature of Record</h3>
			<p></p>
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="1162837" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
		<div id="footer">
			
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>
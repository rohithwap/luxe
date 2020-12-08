<?php
include('headder.php');

?>
<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment estimate-bg">

  </div>
				<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.0/dist/semantic.min.css">				
				<style>
					body{
						padding: 2%;
						background: #f2f2f2 !important!;
					}
					.form-holder{
						background: #FFF;
						padding: 0px 0px 50px 0px;
						min-height: 100vh;
						margin-bottom: 150px;
					}
					.main-headding{						
                    text-align: center;
                    background: #0069bd;
                    color: #FFF;
                    margin-top: 3% !important;
                    padding: 2%;
					}
					#start{
						width: 70%;
    				padding: 2% 5% 2% 5%;
						margin: 0px auto;
					}
					.column{
						
					}
					.totalCost{
						margin-top: 5%;background:#fafafa; padding: 20px;font-size: 16px
					}
					.bottom-content{
						padding: 5% 2% 2% 5%;
					}
				</style>
    </head>
    <body>
				<div class="ui container">
					<div class="form-holder">
							<h2 class="main-headding">Estimator</h2>
							<div class="ui form" id="start">

									<div class="field">
											<label>How many functions will you be having?</label>
											<input v-model="functions" type="number" name="functions" placeholder="" required>
									</div>

									<div class="field">
											<label>Over how many days will the functions take place</label>
											<input v-model="loe" type="number" name="loe" placeholder="" required>
									</div>

									<div class="field">
											<label>How many guests are you expecting across all functions?</label>
											<input v-model="guests" type="number" name="guests" placeholder="" required>
									</div>

									<div class="field">
											<label>What kind of seating arangements will be provided to your guests?</label>
											<select v-model="seating">
												<option>Table Seating</option>
												<option>Theater Style</option>
												<option>Mix of Both</option>
											</select>											
									</div>

									<div class="field">
											<label>What category of venue would you like to book?</label>
											<select v-model="venue">
												<option>5 Star Deluxe</option>
												<option>5 Star</option>
												<option>4 Star</option>
												<option>3 Star</option>
												<option>Mantapa / Wedding Hall</option>
												<option>I've already booked the venue</option>
											</select>											
									</div>
									
									<div class="field">
											<label>Will accommodation be required</label>
											<select v-model="accommodation">
													<option>No</option>
													<option>Yes</option>
											</select>											
									</div>
									
									<template v-if="accommodation == 'Yes'">
									<div class="field">
											<label>Type of accommodation required</label>
											<select v-model="accommodationType">
													<option>5 Star Deluxe</option>
													<option>5 Star</option>
													<option>4 Star</option>
													<option>3 Star</option>
													<option>Budget</option>
											</select>											
									</div>

									<div class="field">
											<label>How many guests will require accommodation?</label>
											<input v-model="accommodationPax" type="number" name="accommodationPax" placeholder="" required>
									</div>

									<div class="field">
											<label>How many nights will your guests stay for?</label>
											<input v-model="los" type="number" name="los" placeholder="" required>
									</div>
								</template>

									<div class="field">
											<label>Will transportation be required</label>
											<select v-model="transfers">
												<option>No</option>
												<option>Yes</option>
											</select>											
									</div>
								<template v-if="transfers == 'Yes'">	
									<div class="field">
											<label>How many guests will require transport?</label>
											<input v-model="transfersPax" type="number" name="transfersPax" placeholder="" required>
									</div>
								</template>

									<div class="field">
											<label>Catering</label>
											<select v-model="catering">
												<option>Vegetarian</option>
												<option>Non-Vegetarian</option>
												<option>Not required / I have my own caterer</option>
											</select>											
									</div>

							<template v-if="catering == 'Veg'">
									<div class="field">
											<label>Please select a sample menu</label>
											<select v-model="menu">
												<option>2 Starters, 2 Main Course, 2 Deserts, Staples, Salads</option>
												<option>3 Starters, 3 Main Course, 3 Deserts, Staples, Salads</option>
												<option>4 Starters, 4 Main Course, 4 Deserts, Staples, Salads</option>
												<option>5 Starters, 5 Main Course, 5 Deserts, Staples, Salads</option>
											</select>											
										</div>
							</template>

								<template v-else-if="catering == 'Non-Veg'">
										<div class="field">
												<label>Please select a sample menu</label>
												<select v-model="menu">
													<option>2 Starters, 2 Main Course, 2 Deserts, Staples, Salads</option>
													<option>3 Starters, 3 Main Course, 3 Deserts, Staples, Salads</option>
													<option>4 Starters, 4 Main Course, 4 Deserts, Staples, Salads</option>
													<option>5 Starters, 5 Main Course, 5 Deserts, Staples, Salads</option>
												</select>											
											</div>
								</template>

								<template v-else="catering == 'Not required / I have my own caterer'">			
									<div></div>								
								</template>

										<div class="field">
												<label>What kind of decor are you looking for?</label>
												<select v-model="decor">
														<option>Minimalistic</option>
														<option>Moderate</option>
														<option>Moderate - Grand</option>
														<option>Grand</option>
														<option>Luxe</option>														
												</select>												
										</div>

																		
										<div class="field">
											<label>What decor options are you looking for?</label>
											<select v-model="decorOptions" multiple="" class="ui dropdown">
												<option value="">Please Select</option>
												<option>Entry Arch & Decor</option>
												<option>Walkway Decor</option>
												<option>Stage</option>
												<option>Mandap</option>
												<option>Table Decor</option>
												<option>Photo Booth</option>
												<option>Dance Floor</option>
												<option>Designer Bar</option>
												<option>Pagodas / Tents</option>
												<option>Other Custom Requirements</option>												
											</select>
										</div>	

										<div class="field">
												<label>Do you have a particular theme or colour scheme?</label>
												<select v-model="theme">
														<option>No</option>
														<option>Yes</option>																												
												</select>												
										</div>
										
										<div class="field">
												<label>Sound &amp; Lighting</label>
												<select v-model="av" class="ui dropdown">
													<option>Not Required</option>
													<option>Basic</option>
													<option>Medium</option>
													<option>Medium - High</option>
													<option>High End</option>
												</select>												
										</div>

										<div class="field">
												<label>Which of these additional requirements do you have?</label>
												<select v-model="additional" multiple="" class="ui dropdown">
													<option value="">Please Select</option>
													<option>Mehendi Artist</option>
													<option>Make-up Artist</option>
													<option>Photographer</option>
													<option>Videographer</option>
													<option>Safa Artist</option>
													<option>DJ</option>
													<option>Choreographer</option>
													<option>Flair Bar Tenders</option>
													<option>Live Band</option>
													<option>Entertainment / Performers</option>												
												</select>
											</div>	
									
									
									
									<div class="ui submit button" id="next" v-on:click="totalCost">Calculate</div>
									<br><br>
									<div>Total</div>
									<div class="totalCost" style="margin-top:2%;min-height: 60px;"></div>									
									<div class="ui error message"></div>	
																	
							</div>
							<div class="ui divider"></div>
							<div class="bottom-content">
									<div><h3>FAQ</h3></div><br><br><br>
									<div class="ui styled fluid accordion">
											<div class="title">
												<i class="dropdown icon"></i>
												How is this calculated?
											</div>
											<div class="content">
												<p class="transition hidden">Costs are calculated using average pricing for materials and services.</p>
											</div>
											<div class="title">
												<i class="dropdown icon"></i>
												How can I reduce the cost of my wedding?
											</div>
											<div class="content">
												<p>Wedding costs can easily spiral out of control if even a single element is overlooked or not properly costed for. The biggest cost incured is generally under the accommodation and venue heads. A large amount can be saved by switching to acommodation from a lower category.
												<p>This goes for venues too. Also do keep in mind that some venues charge rental for the entire day, while some  charge for a given slot. An elaborate setup in the latter would require multiple slots to be booked and send the cost upward.</p> 
												<p>Catering can also be a major cost, as many venues in India do not allow outside catering. You can collectively save on both catering and venue costs by booking a venue that will allow outside vendors to provide services.</p>
												<p>We have seen a fair share of people who book venues and hotels without factoring the remaining cost of other services only to realise later on that they have expended a large portion of their budget on just a few elements.
													 This is generally one of the pitfalls in planing a ceremony. Booking a great venue and then having to severly cut back on everything else as a trade off.     	
												</p>
											</div>
											<div class="title">
												<i class="dropdown icon"></i>
												Will there be an element of variance?
											</div>
											<div class="content">
												<p>Absolutely. Considering that we use average pricing in our calculations. <br>Eg: Working with a hotel in a particular segment that has above average pricing will increase costs while the inverse will reduce costs.</p>
											</div>
											<div class="title">
													<i class="dropdown icon"></i>
													Is anything excluded from this?
											</div>
											<div class="content">
													<p>Transportation & labour costs have been excluded as these are dependant on the location of the venue, time available for setup,
														type of setup etc.
													</p>
											</div>
											<div class="title">
													<i class="dropdown icon"></i>
													I'm planning a destination wedding, will this calculate costs accurately?
											</div>
											<div class="content">
													<p>We do not expect a change in the cost calculated under most heads. However destination weddings generally have a higher level of variance under the below heads. </p>
														<ul>
															<li>
																<b>Rentals</b>
																<div>Rental costs can increase as charges are applied from the date of departure to the date of return. </div>
																<br>
															</li>
															<li>
																<b>Hotels &amp; Venues</b>
																<div>Hotel &amp; venue pricing can also vary depending on season and the destination. </div>
																<br>
															</li>
															<li>
																<b>Transportation & Labour</b>
																<div>Transportation & labour costs will also increase as outstation costs will be incured. 
																	Additionally you may also have to look at travel and accommodation for the DJ, Band, Makeup Artist etc. if you are unable to source these services locally.
																</div>
																<br>
															</li>
														</ul>													
											</div>
											<div class="title">
													<i class="dropdown icon"></i>
													How is this calculator different from other ones I've seen online?
											</div>
											<div class="content">
													<p>Most wedding budgeting tools you see online are made for western markets and don't apply here in India. Most of them calculate costs based on hourly rates which is not the case here in India.
														Also cultural differences such as booking accommodation, transportation etc have to be taken into consideration.
													</p> 
													<p>Our tool has been built keeping the local market environment in mind to give the most accurate results. </p>
											</div>
											<div class="title">
													<i class="dropdown icon"></i>
													I have more questions, where can I find the answers?
											</div>
											<div class="content">
													<p>We have a wealth of knowledge that we would love to share with you! Email us at info@luxeevents.in or call us on +91 8618487045.</p>
											</div>
									</div>
							</div>							
					</div>					
				</div>
				
				<script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>			
				<script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.0/dist/semantic.min.js"></script>		
				<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.min.js"></script>
				<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.11/lodash.min.js"></script>
				<script>	

				$('select').on('change', function() {
					$('.totalCost').text('')
				});				
				
				var vm = new Vue({
						el: '.container',
						data: {
							functions: '',
							loe:'',
							guests:'',
							seating:'',
							venue:'',
							accommodation:'',
							accommodationType:'',
							accommodationPax:'',
							los:'',
							transfers:'',
							transfersPax:'',
							catering:'',
							menu:'',
							decor:'',
							theme:'',
							decorOptions:[],
							av:'',
							additional:[],							
						},
						mounted(){
							$('.ui.dropdown').dropdown();
							$('.ui.radio.checkbox').checkbox();
							$('select').dropdown()
							$('.ui.accordion').accordion();
							$('meta[name=keywords]').attr('content', 'Wedding Cost Calculator, Wedding Expense Calculator, Wedding Budget Calculator, Cost of wedding in india,Wedding Budget Breakup, Wedding Budgeting')
							$('meta[name=description]').attr('content', ' Calculate Wedding Expenses and Budgets in India')
							$('meta[name=title]').attr('content', 'Calculate Wedding Expenses and Budgets')
						},
						computed: {
							tablesCost: function () {
										var tables = this.guests/4
										return tables*300*this.loe
							},
							chairsCost: function () {
										var chairs = this.guests*85
										return chairs*this.loe
							},
							venueRental: function(){
										var venueRental = 0
										if(this.venue == '5 Star Deluxe'){
											venueRental = 500000
										}
										else if(this.venue == '5 Star'){
											venueRental = 400000
										}
										else if(this.venue == '4 Star'){
											venueRental = 350000
										}
										else if(this.venue == '3 Star'){
											venueRental = 250000
										}
										else if(this.venue == 'Mantapa / Wedding Hall'){
											venueRental = 75000
										}
										else{
											venueRental = 0
										}
										return venueRental*this.loe 
							},
							roomCost:function(){
										var roomCost = 0

										if(this.accommodationType == '5 Star Deluxe'){
											roomCost = 16000
										}
										else if(this.accommodationType == '5 Star'){
											roomCost = 10000
										}
										else if(this.accommodationType == '4 Star'){
											roomCost = 8500
										}
										else if(this.accommodationType == '3 Star'){
											roomCost = 4500
										}
										else if(this.accommodationType == 'Budget'){
											roomCost = 2500
										}
										else{
											roomCost = 0
										}
										return roomCost*(this.accommodationPax/2)*this.los
							},
							transportCost:function(){
										var transportCost = this.transfersPax * 1000 * 2
										return transportCost
							},
							foodCost:function(){
										var mealcost = 0

										if(this.menu == '5 Starters, 5 Main Course, 5 Deserts, Staples, Salads'){
											mealcost = 2500
										}
										else if(this.menu == '4 Starters, 4 Main Course, 4 Deserts, Staples, Salads'){
											mealcost = 1700
										}
										else if(this.menu == '3 Starters, 3 Main Course, 3 Deserts, Staples, Salads'){
											mealcost = 1100
										}
										else if(this.menu == '2 Starters, 2 Main Course, 2 Deserts, Staples, Salads'){
											mealcost = 550
										}
										else{
											mealcost = 0
										}

										if(this.catering == 'Vegetarian'){
											mealcost = mealcost - (.2*mealcost)
										}

										return mealcost*this.guests
							},
							decorCost:function(){
										var costing = 0
										
										if(_.includes(this.decorOptions, 'Entry Arch & Decor')){
												costing += 30000
										}
										if(_.includes(this.decorOptions, 'Walkway Decor')){
												costing += 50000
										}
										if(_.includes(this.decorOptions, 'Stage')){
												costing += 60000
										}
										if(_.includes(this.decorOptions, 'Mandap')){
												costing += 50000
										}
										if(_.includes(this.decorOptions, 'Table Decor')){
												costing += 500
										}
										if(_.includes(this.decorOptions, 'Photo Booth')){
												costing += 25000
										}
										if(_.includes(this.decorOptions, 'Dance Floor')){
												costing += 25000
										}
										if(_.includes(this.decorOptions, 'Designer Bar')){
												costing += 30000
										}
										if(_.includes(this.decorOptions, 'Pagodas / Tents')){
												costing += 20000
										}
										if(_.includes(this.decorOptions, 'Other Custom Requirements')){
												costing += 45000
										}
										
										
										if(this.decor == 'Minimalistic'){
												costing = costing*1
										}
										else if(this.decor == 'Moderate'){
												costing = costing*1.5
										}
										else if(this.decor == 'Moderate - Grand'){
												costing = costing*2.5
										}
										else if(this.decor == 'Grand'){
												costing = costing*4
										}
										else if(this.decor == 'Luxe'){
												costing = costing*6
										}

										if(this.theme == 'Yes'){
											 	costing = costing*(.10)+costing
										}
										else{
												costing = costing*1
										}
										
										if(this.functions == 1){
											return costing*this.functions
										}
										else if( this.functions >= 2){
											return costing*this.functions - .1*(costing*this.functions)
										}
										
										else{
											return costing*this.functions
										}

							},
							avCost: function(){
										var avCost = 0
										
										if(this.av == 'Not Required'){
												avCost = 0
										}
										if(this.av == 'Basic'){
												avCost = 50000
										}
										else if(this.av == 'Medium'){
												avCost = 75000
										}
										else if(this.av == 'Medium - High'){
												avCost = 100000
										}
										else if(this.av == 'High End'){
												avCost = 150000
										}
										else{
											avCost = 0
										}
										return avCost*this.loe
							},
							extras: function(){

										var extras = 0
										
										if(_.includes(this.additional, 'Mehendi Artist')){
												extras += 4500
										}
										if(_.includes(this.additional, 'Make-up Artist')){
												extras += 18000
										}
										if(_.includes(this.additional, 'Photographer')){
												extras += 60000
										}
										if(_.includes(this.additional, 'Videographer')){
												extras += 60000
										}
										if(_.includes(this.additional, 'Safa Artist')){
												extras += 20000
										}
										if(_.includes(this.additional, 'DJ')){
												extras += 25000
										}
										if(_.includes(this.additional, 'Choreographer')){
												extras += 20000
										}
										if(_.includes(this.additional, 'Flair Bar Tenders')){
												extras += 40000
										}
										if(_.includes(this.additional, 'Live Band')){
												extras += 50000
										}
										if(_.includes(this.additional, 'Entertainment / Performers')){
												extras += 30000
										}
										return extras
							},
							furnitureCost: function(){
								    var furnitureCost = 0

										if(this.seating == 'Table Seating'){
											furnitureCost = this.chairsCost + this.tablesCost 
										}
										else if(this.seating == 'Theater Style'){
											furnitureCost = this.chairsCost
										}
										else if(this.seating == 'Mix of Both'){
											furnitureCost = this.chairsCost + this.tablesCost - (this.tablesCost*.5)
										}
										return furnitureCost
							},							
							xtotalCost: function(){								
								  	var total = _.add(this.furnitureCost,this.venueRental,this.roomCost,this.transportCost,this.foodCost,this.decorCost,this.avCost,this.extras)
								 		return total 
							}													

						},
						methods: {
							totalCost: function(){
										var total = (this.furnitureCost+this.venueRental+this.roomCost+this.transportCost+this.foodCost+this.decorCost+this.avCost+this.extras)
								 		$('.totalCost').text(total.toLocaleString('en-IN')) 										 
							}
						},
						watch:{
							accommodation: function(){
										if(this.accommodation == 'No'){
											this.accommodationType = ''
											this.accommodationPax = ''
											this.los = ''
										}
							},
							catering: function(){
										if(this.catering == 'Not required / I have my own caterer'){
											this.menu = ''											
										}
							},
							transfers: function(){
										if(this.transfers == 'No'){
											this.transfersPax = ''											
										}
							},
							data: function(){
									this.data.change(function(){
										$('.totalCost').text('') 	
									})
							}
						}
					})
					
				</script>
<?php

include('footer.php');

?>
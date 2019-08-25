	<!-- The Homelet -->
	<!-- Nav tabs -->
	<ul id="primaryTab" class="nav nav-tabs nav-justified" role="tablist" >
		<li class="selected active" role="presentation"><a id="tab-booking" href="" role="tab" aria-controls="booking" aria-selected="true">Chart</a></li>
		<li role="presentation"><a href="" id="tab-check-in" role="tab" aria-controls="checkin" tabindex="-1" aria-selected="false" onclick="/*window.scrollTo(0, 50); setTimeout(function(){window.scrollTo(0, 1000);}, 500)*/"><span >Summary</span></a></li>
	</ul>
	<!-- Tab panes -->
	<div class="tab-content" style="width:100%;">
		<!-- checkin-->
		
		<div class="tab-pane clearfix" id="booking" aria-hidden="" style="display:block;" >
			 <div class="secondaryTabpanelContainer">
				<div class="secondaryTabsContainer">
					<ul id="secondaryTab" class="nav nav-tabs nav-justified" role="tablist" >
						<li class="selected active" role="presentation" ><a style="width:100%" id="tab-flights" href="" role="tab" aria-controls="flights" aria-selected="true">2019 Screenings</a></li>
					</ul>
				</div>
			</div>
			
		   <div  style="height:302px">
				<br/>
				
					<div id="chart2019" style="width:100%;height:60%">
						<svg id="chart1"></svg>
					</div>
					
					<script type="text/javascript">
			
						/* 
							This chart draws the 2019 graph
						*/
						
						//data source
						data2019 = [
							{
								key: "Year 2019",
								values: [
									
									{
										"label" : "Jan" ,
										"value" : 10
									},
									{
										"label" : "Feb" ,
										"value" : 15
									},
									{
										"label" : "Mar" ,
										"value" : 18
									},
									{
										"label" : "Apr" ,
										"value" : 26
									},
									{
										"label" : "May" ,
										"value" : 31
									},
									{
										"label" : "June" ,
										"value" : 10
									},
									{
										"label" : "July" ,
										"value" : 10
									},
									{
										"label" : "Aug" ,
										"value" : 6
									}
								]
							}
						];
						
						//graph
						nv.addGraph(function() {
							var chart = nv.models.discreteBarChart()
								.x(function(d) { return d.label })
								.y(function(d) { return d.value })
								.valueFormat(d3.format(".0f"))
								.valueFormat(d3.format(","))
								.staggerLabels(true)
								//.staggerLabels(historicalBarChart[0].values.length > 8)
								.showValues(true)
								.duration(250)
								;
							
							
							
							
							d3.select('#chart2019 svg')
							//d3.select('#chart1')
								.datum(data2019)
								 .transition().duration(250)
								 .call(chart)
								 ;
							
							//chart.width(h);
							nv.utils.windowResize(chart.update);
							
							return chart;
						});
						
					</script>
				
				<br/>
				<div style="border:1px solid purple; text-align:center; padding:5px; border-radius:5px">
					
					<span style="color:">Graph of cervical cancer screenings per month</span>
				</div>
				<br/>
				
			</div>
		   
		</div>
		
		<!-- Booking -->
		<div class="tab-pane booking-forms flight-search active" id="checkin" aria-hidden="false" style="display: block; width:100%">
			<!-- Nav tabs -->
			<div class="secondaryTabpanelContainer" style="width:100%">
				<div class="secondaryTabsContainer">
					<ul id="secondaryTab" class="nav nav-tabs nav-justified" role="tablist" >
						<li class="selected active" role="presentation" ><a style="width:100%" id="tab-flights" href="" role="tab" aria-controls="flights" aria-selected="true">Statistics Summary</a></li>
					</ul>
				</div>
				<!-- Tab panes -->
				<div class="tab-content">
					<img width="50px" src="../images/pages/women_group.png">
					Number of women:
					<div style="border:1px solid purple; text-align:center; padding:5px; border-radius:5px">
						<span class="numscroller" data-min="1" data-max="77" data-delay="1" data-increment="1" style="color:black; font-size:24px; font-weight:bold">
							77
						</span>
						<br/>
						<span style="color:">Screened for CC</span>
					</div>
					<br/>
					<div style="border:1px solid purple; text-align:center; padding:5px; border-radius:5px">
						<span class="numscroller" data-min="1" data-max="26" data-delay="1" data-increment="1" style="color:black; font-size:24px; font-weight:bold">
							26
						</span>
						<br/>
						<span style="color:">With precancerous Lessions</span>
					</div>
					<br/>
					<div style="border:1px solid purple; text-align:center; padding:5px; border-radius:5px">
						<span class="numscroller" data-min="1" data-max="8" data-delay="1" data-increment="1" style="color:black; font-size:24px; font-weight:bold">
							8
						</span>
						<br/>
						<span style="color:">With invasive CC Lessions</span>
					</div>
				</div>
				<!-- End Tab panes -->
			</div>
			<!-- End Booking Forms -->
		</div>
		
		
		<div style="float: left;">
			<div id="reissueEligibleContainer" style="display: none;">
				<div id="reissueEligibleContent" style="display: none;">
					<h2>
						Is your reservation eligible<br>
						For online changes?
					</h2>
					<p>
						To be eligible for online changes, your purchased reservation must:
					</p>
					<ul>
						<li>Contain travel that is solely within the US, Canada and Mexico.</li>
						<li>Contain no more than 8 air segments.</li>
						<li>
							Have been issued at alaskaair.com, Alaska Airlines reservation call center<br>
							or an Alaska ticket counter.
						</li>
						<li>Contain no more than 6 passengers in the reservation.</li>
						<li>Not contain a government fare.</li>
						<li>
							Not be a Partner Award issued by an Alaska Airlines reservation call center or Alaska
							ticket counter.
						</li>
						<li>Not be more than 13 months from date of purchase.</li>
						<li>Not be part of a group or vacation package booking.</li>
					</ul>
					<p>
						If your reservation is not eligible for online changes, please contact the Alaska
						Airlines reservation call center at 1-800-ALASKAAIR (1-800-252-7522).
					</p>
				</div>
				<script type="text/javascript">
					function showReissueEligible() { $('#reissueEligibleContent').showLightBox({ src: $('#reissueEligibleContainer'), width: 530, centerOnPage: true, isDraggable: true }); }
				</script>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<!-- End Tab panes -->
	
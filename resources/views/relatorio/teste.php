
<!DOCTYPE html>
<html lang="en">
  <head>
    
    
    <meta charset="utf-8">
    <title>Improvely</title>

    <link rel="shortcut icon" type="image/png" href="/images/icon-64.png" />
    
    <script type="text/javascript">
    window._wl = false;
    
    var userprefs = {
      goal: 'all',
      metric1: 'people',
      metric2: 'conversions',
      units: 'days',
      start: '2022-10-15',
      end: '2022-11-13',
      timezone: 'America/New_York',
      plan_id: 3,
      columns: ''
    };
    </script>

        <link href="/css/app.min.css?v=20190514" rel="stylesheet" />
    <script src="/js/app.min.js?v=20220531"></script>
    
    <link rel="stylesheet" href="/css/font-awesome.min.css">

    <script>hljs.initHighlightingOnLoad();</script>

    
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
      $(function() {

        $('#left-side-nav-toggle').click(function() {
          if ($('#left-side-nav').hasClass('minimized')) {

            $('#left-side-nav').removeClass('minimized');
            $('#left-side-nav-toggle').removeClass('minimized').html('<i class="fa fa-chevron-left"></i>');
            $('#content-fixed').removeClass('minimized');
            $('#sub-nav').removeClass('minimized');

            var date = new Date();
            date.setDate(date.getDate() + 365);
            document.cookie = 'minimized=0; expires=' + date.toUTCString() + '; path=/';

          } else {

            $('#left-side-nav').addClass('minimized');
            $('#left-side-nav-toggle').addClass('minimized').html('<i class="fa fa-chevron-right"></i>');
            $('#content-fixed').addClass('minimized');
            $('#sub-nav').addClass('minimized');

            var date = new Date();
            date.setDate(date.getDate() + 365);
            document.cookie = 'minimized=1; expires=' + date.toUTCString() + '; path=/';

          }

        });

        if (!$('#left-side-nav').is(':visible')) {
            $('#content-fixed').css('margin-left', 0);
            $('#sub-nav').css('left', 0);
        }

      });
    </script>

  </head>
<body>

  <!-- Top Nav -->
  <div id="top-nav">

    <div class="hidden-md hidden-lg">

      <ul class="nav nav-pills"> 
        <li class="dropdown project-menu">

                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="width: auto; min-width: auto">
              <i class="fa fa-folder-open fa-lg"></i> <span class="caret"></span>
            </a>
          
                   <ul class="dropdown-menu">
            
              
              <li>
                <a href="/reports/webshop/overview"><i class="fa fa-folder fa-fw"></i> Web Shop</a>                
              </li>
            
                        <li style="border-top: 1px solid #fff; padding-top: 5px">
              <a href="/"><i class="fa fa-th-list fa-fw"></i> Projects Overview</a>            </li>
            
                        <li>
              <a href="/project/new"><i class="fa fa-plus fa-fw"></i> New Project</a>            </li>
            
          </ul>
          
        </li>

                
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bar-chart"></i> <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">

            <li class="active"><a href="/reports/webshop/overview"><i class="fa fa-th-large fa-fw"></i> <span>Dashboard</span></a></li>

            <li><a href="/reports/webshop/all"><i class="fa fa-bar-chart fa-fw"></i> <span>Traffic Sources</span></a></li>

            <li><a href="/reports/webshop/links"><i class="fa fa-link fa-fw"></i> <span>Tracking Links</span></a></li>

            <li><a href="/reports/webshop/funnels"><i class="fa fa-filter fa-fw"></i> <span>Conversion Funnels</span></a></li>

            <li><a href="/reports/webshop/fraud"><i class="fa fa-fw fa-exclamation-triangle"></i> <span>Click Fraud</span></a></li>

            <li><a href="/reports/webshop/people/explore"><i class="fa fa-fw fa-users"></i> <span>People Explorer</span></a></li>

                        <li><a href="/project/webshop"><i class="fa fa-fw fa-cog"></i> <span>Settings</span></a></li>
            
          </ul>

        </li>
        
        
          
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-wrench"></i> <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                            <li><a href="/tools/webshop/import"><i class="fa fa-fw fa-upload"></i> Import PPC Costs</a></li>
              <li><a href="/tools/webshop/affiliate/import"><i class="fa fa-fw fa-upload"></i> Import Affiliate Commissions</a></li>
                            <li><a href="/reports/webshop/realtime"><i class="fa fa-fw fa-eye"></i> Realtime Spy</a></li>
            </ul>
          </li>

        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-user-circle"></i> <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="/profile"><i class="fa fa-fw fa-user"></i> Profile</a></li>
                        <li><a href="/plan"><i class="fa fa-fw fa-credit-card"></i> Billing</a></li>
            <li><a href="/users"><i class="fa fa-fw fa-users"></i> Users</a></li>
                          <li><a href="/api"><i class="fa fa-fw fa-key"></i> API Access</a></li>
                        <li><a href="/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a></li>
          </ul>
        </li>

      </ul>

    </div>

    <div class="hidden-xs hidden-sm">

      <ul class="nav navbar-nav" style="float: left; margin: 0"> 
        <li class="dropdown project-menu">

                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-lg fa-folder-open"></i> <b>Project:</b> 
              Web Shop              <span class="caret"></span>
            </a>
          
                   <ul class="dropdown-menu">
            
              
              <li>
                <a href="/reports/webshop/overview"><i class="fa fa-fw fa-folder"></i> Web Shop</a>                
              </li>
            
                        <li style="border-top: 1px solid #fff; padding-top: 5px">
              <a href="/"><i class="fa fa-fw fa-th-list"></i> Projects Overview</a>            </li>
            
                        <li>
              <a href="/project/new"><i class="fa fa-fw fa-plus"></i> New Project</a>            </li>
            
          </ul>
          
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right" style="float: right"> 

        
        
        <li class="dropdown alerts" id="alerts">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell"></i> 
            <span class="label label-warning">4</span>
          </a>
          <ul class="dropdown-menu">
            <li class="dropdown-header">Recent Updates</li>

                          <li id="news_22" class="news">
                <a href="https://www.improvely.com/blog/2021/06/29/automatic-ssl-for-white-label-domains/">
                  <i class="fa fa-fw fa-circle" style="color: #f0ad4e"></i>&nbsp; 
                  Automatic SSL for White Label Domains                </a>
              </li>

                          <li id="news_21" class="news">
                <a href="https://www.improvely.com/blog/2020/12/20/bing-ads-click-id-updates/">
                  <i class="fa fa-fw fa-circle" style="color: #f0ad4e"></i>&nbsp; 
                  Bing Ads &amp; Click ID Updates                </a>
              </li>

                          <li id="news_20" class="news">
                <a href="https://www.improvely.com/blog/2019/05/14/new-features-custom-columns-new-metrics/">
                  <i class="fa fa-fw fa-circle" style="color: #f0ad4e"></i>&nbsp; 
                  New Features: Custom Columns &amp; New Metrics                </a>
              </li>

                          <li id="news_18" class="news">
                <a href="https://www.improvely.com/blog/2018/01/02/click-fraud-monitoring-updates/">
                  <i class="fa fa-fw fa-circle" style="color: #f0ad4e"></i>&nbsp; 
                  Click Fraud Monitoring Updates                </a>
              </li>

            
          </ul>
        </li>    
          

        
          
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-lg fa-wrench"></i>
              Tools
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                            <li><a href="/tools/webshop/import"><i class="fa fa-fw fa-upload"></i> Import PPC Costs</a></li>
              <li><a href="/tools/webshop/affiliate/import"><i class="fa fa-fw fa-upload"></i> Import Affiliate Commissions</a></li>
                            <li><a href="/reports/webshop/realtime"><i class="fa fa-fw fa-eye"></i> Realtime Spy</a></li>
            </ul>
          </li>

        
        <li class="dropdown profile">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-user-circle fa-lg"></i>
            Account Settings
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="/profile"><i class="fa fa-user"></i> Profile</a></li>
                        <li><a href="/plan"><i class="fa fa-credit-card"></i> Billing</a></li>
            <li><a href="/users"><i class="fa fa-users"></i> Users</a></li>
                          <li><a href="/api"><i class="fa fa-key"></i> API Access</a></li>
                        <li><a href="/logout"><i class="fa fa-power-off"></i> Log Out</a></li>
          </ul>
        </li>

      </ul>

    </div>

  </div>

  
    
    <!-- Menu Toggle -->
        <div id="left-side-nav-toggle" class="hidden-xs hidden-sm">
      <i class="fa fa-chevron-left"></i>
    </div>
    
    <!-- Left Menu -->
    <div id="left-side-nav" class="hidden-xs hidden-sm">
      
      <!-- Left Nav -->
      <ul class="fa-ul new-side-nav">

        <li class="active"><a href="/reports/webshop/overview"><i class="fa fa-fw fa-th-large"></i><span>Dashboard</span></a></li>

        <li><a href="/reports/webshop/all"><i class="fa fa-fw fa-bar-chart"></i><span>Traffic Sources</span></a></li>

        <li><a href="/reports/webshop/links"><i class="fa fa-fw fa-link"></i><span>Tracking Links</span></a></li>

        <li><a href="/reports/webshop/funnels"><i class="fa fa-fw fa-filter"></i><span>Conversion Funnels</span></a></li>

        <li><a href="/reports/webshop/fraud"><i class="fa fa-fw fa-exclamation-triangle"></i><span>Click Fraud</span></a></li>

        <li><a href="/reports/webshop/people/explore"><i class="fa fa-fw fa-users"></i><span>People Explorer</span></a></li>

                <li><a href="/project/webshop"><i class="fa fa-fw fa-cog"></i><span>Settings</span></a></li>

        <li>
          <div style="border-top: 1px solid #ddd; height: 1px; margin: 5px 0"></div>
        </li>

        <li class="dropup">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-plus" style="color: #5eb95e"></i><span>Create New &nbsp;<i class="fa fa-caret-down" style="font-size: 14px"></i></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="/tools/webshop/link_builder"><i class="fa fa-fw fa-link"></i> Tracking Link</a></li>
            <li><a href="/tools/webshop/link_builder?ab=true"><i class="fa fa-fw fa-random"></i> A/B Split Test</a></li>
            <li><a href="/tools/webshop/affiliate/link_builder"><i class="fa fa-fw fa-share"></i> Affiliate Outlink</a></li>
            <li><a href="/tools/webshop/funnel_builder"><i class="fa fa-fw fa-filter"></i> Funnel Report</a></li>
            <li><a href="/user"><i class="fa fa-fw fa-user"></i> User</a></li>
          </ul>
        </li>
        
      </ul>

    </div>

    <!-- Sub Nav -->
    
  
  <!-- Content Area -->

  
        <div id="content-fixed" style="padding-top: 80px"">
    
      <div class="container-fluid">

        <script type="text/javascript">
currency_symbol = '$';
</script>

<div class="row">

	<div class="col-md-12">

		<div id="daterange" class="selectbox pull-right">
			<i class="fa fa-calendar"></i>
			<span>October 15, 2022 - November 13, 2022</span> <b class="caret"></b>
		</div>
	
		<div class="pull-right" style="margin-right: 10px">

			<select name="goal" id="goalfilter" style="width: 150px" multiple="multiple">
								<option value="sale">Sale</option>
							</select>

		</div>

		<div class="transparent-header">
			<h2>Web Shop</h2>
			<h1>Dashboard</h1>
		</div>

	</div>

</div>


<div class="row">

	<div class="col-md-12">

		<div style="position: relative; bottom: -1px; overflow: auto">

			<div id="all_box" class="ovtab all active">
				<h3>All Traffic</h3>
				<table>
					<tr>
						<td class="num"><i class="fa fa-spinner fa-spin"></i></td>
						<td class="desc">Visits</td>
					</tr>
					<tr>
						<td class="num"><i class="fa fa-spinner fa-spin"></i></td>
						<td class="desc">Conversions</td>
					</tr>
				</table>
			</div>

			<div id="ad_box" class="ovtab ad">
				<h3>Ad Traffic</h3>
				<table>
					<tr>
						<td class="num"><i class="fa fa-spinner fa-spin"></i></td>
						<td class="desc">Visits</td>
					</tr>
					<tr>
						<td class="num"><i class="fa fa-spinner fa-spin"></i></td>
						<td class="desc">Conversions</td>
					</tr>
				</table>
			</div>

			<div id="organic_box" class="ovtab organic">
				<h3>Organic Traffic</h3>
				<table>
					<tr>
						<td class="num"><i class="fa fa-spinner fa-spin"></i></td>
						<td class="desc">Visits</td>
					</tr>
					<tr>
						<td class="num"><i class="fa fa-spinner fa-spin"></i></td>
						<td class="desc">Conversions</td>
					</tr>
				</table>
			</div>

			<div id="search_box" class="ovtab search">
				<h3>Search Traffic</h3>
				<table>
					<tr>
						<td class="num"><i class="fa fa-spinner fa-spin"></i></td>
						<td class="desc">Visits</td>
					</tr>
					<tr>
						<td class="num"><i class="fa fa-spinner fa-spin"></i></td>
						<td class="desc">Conversions</td>
					</tr>
				</table>
			</div>

		</div>

		<div class="page page-white" style="clear: both; border-top: 1px solid #ccc">

			<div id="graph" style="padding: 10px 10px 0 10px">

			    <div class="pull-right">

			        <select name="graph_metric1" style="width: 140px">
			            <option value="people">People</option>
			            <option value="clicks">Visits</option>
			            <option value="converted_people">Conv. People</option>
			            <option value="conversions">Conversions</option>
			            <option value="convrate">Conversion Rate</option>
			            <option value="cost">Cost</option>
			            <option value="cpa">CPA</option>
			            <option value="cpc">CPC</option>
			            <option value="revenue">Revenue</option>
			            <option value="rpp">RPP</option>
			            <option value="rpcp">RPCP</option>
			            <option value="profit">Profit</option>
			        </select>

			        <select name="graph_metric2" style="width: 140px">
			            <option value="people">People</option>
			            <option value="clicks">Visits</option>
			            <option value="converted_people">Conv. People</option>
			            <option value="conversions">Conversions</option>
			            <option value="convrate">Conversion Rate</option>
			            <option value="cost">Cost</option>
			            <option value="cpa">CPA</option>
			            <option value="cpc">CPC</option>
			            <option value="revenue">Revenue</option>
			            <option value="rpp">RPP</option>
			            <option value="rpcp">RPCP</option>
			            <option value="profit">Profit</option>
			        </select>

			        <!--
			        <select name="graph_units" style="width: 100px; display: none">
			            <option value="days">Days</option>
			            <option value="weeks">Weeks</option>
			            <option value="months">Months</option>
			        </select>
			    	-->

			        <btn class="btn btn-default btn-sm graph_download" rel="tooltip" title="Download Excel CSV" style="margin-left: 7px; background: #fff; border-width: 1px"><i class="fa fa-download"></i></btn>

			    </div>

				<a class="pull-left btn btn-default btn-sm btn-report" style="display: none" id="ad_report" href="/reports/webshop/ads"><i class="fa fa-bar-chart"></i>&nbsp; View Ad Traffic Report</a>				<a class="pull-left btn btn-default btn-sm btn-report" style="display: none" id="organic_report" href="/reports/webshop/organic"><i class="fa fa-bar-chart"></i>&nbsp; View Organic Traffic Report</a>				<a class="pull-left btn btn-default btn-sm btn-report" style="display: none" id="search_report" href="/reports/webshop/search"><i class="fa fa-bar-chart"></i>&nbsp; View Search Traffic Report</a>				<a class="pull-left btn btn-default btn-sm btn-report" id="all_report" href="/reports/webshop/all"><i class="fa fa-bar-chart"></i>&nbsp; View All Traffic Report</a>
				<div class="placeholder" style="clear: both; height: 200px; margin: 0 -10px"></div>

			</div>
		</div>
	</div>
</div>

<div class="row">

	<div class="metrics">
		<div class="col-xs-6 col-md-4 col-sm-3"><div class="people"></div></div>
		<div class="col-xs-6 col-md-4 col-sm-3"><div class="clicks"></div></div>
		<div class="col-xs-6 col-md-4 col-sm-3"><div class="converted_people"></div></div>
		<div class="col-xs-6 col-md-4 col-sm-3"><div class="conversions"></div></div>
		<div class="col-xs-6 col-md-4 col-sm-3"><div class="convrate"></div></div>
		<div class="col-xs-6 col-md-4 col-sm-3"><div class="cost"></div></div>
		<div class="col-xs-6 col-md-4 col-sm-3"><div class="costpergoal"></div></div>
		<div class="col-xs-6 col-md-4 col-sm-3"><div class="costperclick"></div></div>
		<div class="col-xs-6 col-md-4 col-sm-3"><div class="revenue"></div></div>
		<div class="col-xs-6 col-md-4 col-sm-3"><div class="goalvalue"></div></div>	
		<div class="col-xs-6 col-md-4 col-sm-3"><div class="revperson"></div></div>
		<div class="col-xs-6 col-md-4 col-sm-3"><div class="rpcp"></div></div>
		<div class="col-xs-6 col-md-4 col-sm-3"><div class="profit"></div></div>
		<div class="col-xs-6 col-md-4 col-sm-3"><div class="roi"></div></div>
	</div>

</div>

<script type="text/javascript">

type = 'all';

$(document).ready(function() {

	$('.ovtab a').click(function(e) {
		e.stopPropagation();
	})

	$('.ovtab').click(function() {

		type = $(this).attr('id').replace('_box', '');
		
		//$('.metrics div div').css('border-color', $(this).css('border-top-color'));
		$('.metrics div div').removeClass('ad').removeClass('organic').removeClass('search').addClass(type);

		$('.ovtab').removeClass('active');
		$(this).addClass('active');

		$('.btn-report').hide();
		$('#' + type + '_report').show();
		
		getMetrics();

	});

	getMetrics();
	getTabs();

});

function getTabs(start, end) {
	// Get Tab Metrics
	var jsonurl = '/api/metrics.json?graph=1&filters[goal]=' + encodeURIComponent(userprefs.goal);
	jsonurl += '&type=' + type;
	if (typeof start != 'undefined' && typeof end != 'undefined')
		jsonurl += '&start=' + encodeURIComponent(start) + '&end=' + encodeURIComponent(end);

	$('.ovtab .num').html('<i class="fa fa-spinner fa-spin"></i>');
	$.getJSON(jsonurl, function(data) {
		$('.ovtab .num').html('0');
		var tv = 0, tc = 0;
		for (var i = 0; i < data.length; i++) {
			var row = data[i];
			$('#' + row['type'] + '_box .num:first').html(add_commas(row['visits']));
			$('#' + row['type'] + '_box .num:last').html(add_commas(row['conversions']));
			tv += parseInt(row['visits']);
			tc += parseInt(row['conversions']);
		}
		$('#all_box .num:first').html(add_commas(tv));
		$('#all_box .num:last').html(add_commas(tc));
	});
}

function getMetrics(start, end) {

	$('#graph .placeholder').html('<div style="padding: 80px 0 0 0; text-align: center; font-size: 33px"><i class="fa fa-spinner fa fa-spin"></i></div>');
	$('#graph h1, #graph h2').html('&nbsp;');
	$('#graph .metric1 h1').html('<i class="fa fa-spinner fa-spin"></i>');

	$('.metrics div div').html('<div class="graph"></div><div class="over"><h4></h4><span><i class="fa fa-spinner fa fa-spin" style="margin-top: 20px"></i></span></div>');

	if (type == 'all' || type == 'ad') {
		$('.metrics .cost, .metrics .profit, .metrics .costpergoal, .metrics .costperclick, .metrics .roi').each(function() {
			$(this).parent().show();
		});
	} else {
		$('.metrics .cost, .metrics .profit, .metrics .costpergoal, .metrics .costperclick, .metrics .roi').each(function() {
			$(this).parent().hide();
		});
	}

	var jsonurl = '/api/graph.json?graph=1&filters[goal]=' + encodeURIComponent(userprefs.goal);
	if (type != 'all')
		jsonurl += '&filters[' + type + ']=1';
	jsonurl += '&metric1=' + userprefs.metric1 + '&metric2=' + userprefs.metric2 + '&units=' + userprefs.units;
	if (typeof start != 'undefined' && typeof end != 'undefined')
		jsonurl += '&start=' + encodeURIComponent(start) + '&end=' + encodeURIComponent(end);

	$.getJSON(jsonurl, function(data) {

		imGraph('graph', data);

		var last7 = [];
		for (var i = 0; i < data.length - 1; i++) {
			last7.push(data[i]);
		}

		var data = data[data.length - 1];

		// People
		metricGraph($('.metrics .people .graph')[0], last7, 'people');

				var url = '/reports/webshop/people';
		if (type != 'all')
			url += '?filters[' + type + ']=1';

		$('.metrics .people span').html('<a href="' + url + '">' + add_commas(data.people) + '</a>');
		$('.metrics .people h4').html('People');

		// Clicks
		metricGraph($('.metrics .clicks .graph')[0], last7, 'clicks');

				var url = '/reports/webshop/clicks';
		if (type != 'all')
			url += '?filters[' + type + ']=1';

		$('.metrics .clicks span').html('<a href="' + url + '">' + add_commas(data.clicks) + '</a>');
		$('.metrics .clicks h4').html((type == 'ad') ? 'Visits (Ad Clicks)' : 'Visits');

		// Conversions
		metricGraph($('.metrics .conversions .graph')[0], last7, 'conversions');

				var url = '/reports/webshop/conversions?filters[goal]=' + encodeURIComponent(userprefs.goal);
		if (type != 'all')
			url += '&filters[' + type + ']=1';

		$('.metrics .conversions span').html('<a href="' + url + '">' + add_commas(data.conversions) + '</a>');
		$('.metrics .conversions h4').html('Goal Conversions');

		// Converted people
		metricGraph($('.metrics .converted_people .graph')[0], last7, 'converted_people');

				var url = '/reports/webshop/conversions?filters[goal]=' + encodeURIComponent(userprefs.goal);
		if (type != 'all')
			url += '&filters[' + type + ']=1';

		$('.metrics .converted_people span').html('<a href="' + url + '">' + add_commas(data.converted_people) + '</a>');
		$('.metrics .converted_people h4').html('Converted People');

		// Conversion Rate
		metricGraph($('.metrics .convrate .graph')[0], last7, 'convrate');
		$('.metrics .convrate span').html(format_rate(data.converted_people / data.people));
		$('.metrics .convrate h4').html('Conversion Rate');

		// Revenue
		metricGraph($('.metrics .revenue .graph')[0], last7, 'revenue');
		$('.metrics .revenue span').html(format_money(data.revenue, true));
		$('.metrics .revenue h4').html('Revenue');		

		// Average Goal Value
		metricGraph($('.metrics .goalvalue .graph')[0], last7, 'goalvalue');
		$('.metrics .goalvalue span').html(format_money(data.revenue / data.conversions));
		$('.metrics .goalvalue h4').html('Average Goal Value');		

		// Revenue Per Person
		metricGraph($('.metrics .revperson .graph')[0], last7, 'rpp');
		$('.metrics .revperson span').html(format_money(data.revenue / data.people));
		$('.metrics .revperson h4').html('Revenue Per Person');

		// Revenue Per Converted Person
		metricGraph($('.metrics .rpcp .graph')[0], last7, 'rpcp');
		$('.metrics .rpcp span').html(format_money(data.revenue / data.converted_people));
		$('.metrics .rpcp h4').html('Revenue Per Converted Person');

		if (type == 'all' || type == 'ad') {

			// Cost
			metricGraph($('.metrics .cost .graph')[0], last7, 'cost');
			$('.metrics .cost span').html(format_money(data.cost, true));
			$('.metrics .cost h4').html('Cost');

			// Profit
			metricGraph($('.metrics .profit .graph')[0], last7, 'profit');
			$('.metrics .profit span').html(format_money(data.revenue - data.cost, true));
			$('.metrics .profit h4').html('Profit');

			// Cost Per Goal
			metricGraph($('.metrics .costpergoal .graph')[0], last7, 'cpa');
			$('.metrics .costpergoal span').html(format_money(data.cost / data.conversions));
			$('.metrics .costpergoal h4').html('Cost Per Acquisition');

			// Cost Per Click
			metricGraph($('.metrics .costperclick .graph')[0], last7, 'cpc');
			$('.metrics .costperclick span').html(format_money(data.cost / data.clicks));
			$('.metrics .costperclick h4').html('Cost Per Click');

			// Return On Investment
			metricGraph($('.metrics .roi .graph')[0], last7, 'roi');
			var roi = (data.revenue - data.cost) / data.cost;
			$('.metrics .roi span').html(format_rate(roi));
			$('.metrics .roi h4').html('Return On Investment');
		}

	});

}

function downloadGraph() {
	var dlurl = '/api/graph.xls';
	dlurl += '?filters[goal]=' + encodeURIComponent(userprefs.goal);
	dlurl += '&metric1=' + userprefs.metric1 + '&metric2=' + userprefs.metric2;
	if (type != 'all')
		dlurl += '&filters[' + type + ']=1';

	if (typeof location.search == 'string' && location.search.length > 0)
		dlurl += '&' + location.search.substring(1);
	window.location = dlurl;
}

</script>
      </div>

      <div style="margin: 0 -20px">
  
      <div class="afs_ads adsbox ad_box" style="color: #ccc; font-size: 10px; text-align: right; padding: 5px 0"><!-- ip-10-0-0-71.ec2.internal --></div>

      
        <div style="margin-top: 30px; background: #f5f5f5; font-size: 12px; color: #999">

          <table style="width: 100%">
            <tr>
              <td style="white-space: nowrap; vertical-align: middle; padding: 20px 30px">
                <a href="https://www.improvely.com/"><img alt="Improvely Logo" style="width: 100px" src="/images/website/logo-blue-on-transparent.png" /></a>              </td>
              <td style="width: 100%; vertical-align: middle; padding: 20px 0" id="feedback" class="hidden-xs">

                <form action="" class="form-horizontal" method="post">
                  <table style="width: 100%">
                    <tr>
                      <td style="width: 100%">
                        <textarea name="feedback" class="form-control"></textarea>
                      </td>
                      <td style="white-space: nowrap; vertical-align: middle; padding-left: 15px">
                        <button type="submit" class="btn btn-success" style="width: 100%">Send feedback</button>
                      </td>
                    </tr>
                  </table>
                </form>

              </td>
              <td style="white-space: nowrap; vertical-align: middle; padding: 20px 30px">

                Copyright &copy; 2022 <a href="https://www.awio.com/">Awio Web Services LLC</a>                <br />
                <a href="https://www.improvely.com/terms">Terms of Service</a> &nbsp;&middot;&nbsp; <a href="https://www.improvely.com/docs">Knowledge Base</a> &nbsp;&middot;&nbsp; <a href="mailto:hello@improvely.com">Contact Us</a>

              </td>
            </tr>
          </table>

        </div>

      
      </div>

  </div>
            
   
  
  </body>
</html>

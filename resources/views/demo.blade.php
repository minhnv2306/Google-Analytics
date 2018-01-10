<!DOCTYPE html>
<html>
<head>
  <title>Embed API Demo</title>
</head>
<body>

<!-- Step 1: Create the containing elements. -->

<section id="auth-button"></section>
<section id="view-selector"></section>
<section id="timeline"></section>

<!-- Step 2: Load the library. -->

<script>
(function(w,d,s,g,js,fjs){
  g=w.gapi||(w.gapi={});g.analytics={q:[],ready:function(cb){this.q.push(cb)}};
  js=d.createElement(s);fjs=d.getElementsByTagName(s)[0];
  js.src='https://apis.google.com/js/platform.js';
  fjs.parentNode.insertBefore(js,fjs);js.onload=function(){g.load('analytics')};
}(window,document,'script'));
</script>

<script>
gapi.analytics.ready(function() {

  // Step 3: Authorize the user.

  var CLIENT_ID = '1026106077873-95n3k3t1bau631aiarfjhjsh8fv3bner.apps.googleusercontent.com';

  gapi.analytics.auth.authorize({
    container: 'auth-button',
    clientid: CLIENT_ID,
  });

  /* Sử dụng component lấy các thông tin người dùng
  Chi tiết: https://developers.google.com/analytics/devguides/reporting/embed/v1/component-reference
   */
  gapi.analytics.auth.on('signIn', function() {
      console.log(gapi.analytics.auth.getUserProfile());
  });
  console.log(gapi.analytics.auth.isAuthorized());

  // Step 4: Create the view selector.

  var viewSelector = new gapi.analytics.ViewSelector({
    container: 'view-selector'
  });

  // Step 5: Create the timeline chart.

  var timeline = new gapi.analytics.googleCharts.DataChart({
    reportType: 'ga',
    query: {
      'dimensions': 'ga:date',
      'metrics': 'ga:sessions',
      'start-date': '5daysAgo',
      'end-date': 'yesterday',
    },
    chart: {
      type: 'LINE',
      container: 'timeline',
      options: {
          width: '100%'
      }
    }
  });

  // Step 6: Hook up the components to work together.

  gapi.analytics.auth.on('success', function(response) {
    viewSelector.execute();
  });

  viewSelector.on('change', function(ids) {
    var newIds = {
      query: {
        ids: ids
      }
    }
    timeline.set(newIds).execute();
  });
});
</script>
</body>
</html>
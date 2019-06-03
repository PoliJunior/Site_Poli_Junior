<html>
<!--<script src="src/amplitude-snippet.js" type="text/javascript"></script>-->
<script src='require.js' type='text/javascript'></script>
<script>
    requirejs.config({
      paths: {
        'amplitude': '/amplitude'
      }
    });
    require(['amplitude'], function(amplitude) {
      amplitude.init('a2dbce0e18dfe5f8e74493843ff5c053', null, {includeReferrer: true}, function() {
        alert(amplitude.options.deviceId);
      });
      window.amplitude = amplitude;
    });
    var setUserId = function() {
        var userId = prompt('Input userId', 'user01');
        amplitude.setUserId(userId);
    };
    var setEventUploadThreshold = function() {
        var eventUploadThreshold = parseInt(prompt('Input eventUploadThreshold', 5));
        amplitude.options.eventUploadThreshold = eventUploadThreshold;
    };
    var logEvent = function() {
        var event = prompt('Input event type', 'clicked');
        amplitude.logEvent(event);
    };
    var setCity = function() {
        var city = prompt('Input city', 'San Francisco, CA');
        amplitude.setUserProperties({city: city});
    };
    var addToPhotoCount = function() {
        var photoCount = parseInt(prompt('Input amount to increment photo count by', '2'), 10);
        amplitude.identify(new amplitude.Identify().add('photoCount', photoCount));
    };
    var clickOnLinkA = function() {
        amplitude.logEvent('Clicked on link A', null, function() { window.location='https://www.google.com'; });
    };
    var setPhotoCount = function() {
        var photoCount = parseInt(prompt('Input photo count to set', '2'), 10);
        amplitude.identify(new amplitude.Identify().set('photoCount', photoCount));
    };
    var setOncePhotoCount = function() {
        var photoCount = parseInt(prompt('Input photo count to setOnce', '2'), 10);
        amplitude.identify(new amplitude.Identify().setOnce('photoCount', photoCount));
    };
</script>
<script>
  require(['amplitude'], function(amplitude) {
    amplitude.logEvent('Page loaded');
  });
</script>

<body>
<h3>Amplitude JS Test with RequireJS</h3>
<ul>
    <li><a href="javascript:setUserId();">Set user ID</a></li>
    <li><a href="javascript:amplitude.setOptOut(!amplitude.options.optOut);">Toggle opt out</a></li>
    <li><a href="javascript:logEvent();">Log event</a></li>
    <li><a href="javascript:amplitude.logEvent('clicked button', {color: 'red;', shape: 'triangle', sides: 3});">Log
        event with event properties</a></li>
    <li><a href="javascript:amplitude.setUserProperties({age: 30, city: 'San Francisco, CA'});">Set user properties</a></li>
    <li><a href="javascript:amplitude.options.batchEvents = !amplitude.options.batchEvents;">Toggle batch events</a></li>
    <li><a href="javascript:setEventUploadThreshold();">Set event upload threshold</a></li>
    <li><a href="javascript:clickOnLinkA();">Click on link A</a></li>
    <br><br>Testing Identify calls<br>
    <li><a href="javascript:addToPhotoCount();">Add to photo count</a></li>
    <li><a href="javascript:amplitude.identify(new amplitude.Identify().unset('photoCount'));">Unset photo count</a></li>
    <li><a href="javascript:setPhotoCount();">Set photo count</a></li>
    <li><a href="javascript:setOncePhotoCount();">Set photo count once</a></li>
    <li><a href="javascript:setCity();">Set city via setUserProperties</a></li>
    <li><a href="javascript:amplitude.clearUserProperties();">Clear all user properties</a></li>
    <br><br>
    <li><a href="/test/browser/amplitudejs2.html">Go to second page</a></li>
</body>
</html>
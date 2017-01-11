    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/js/instafeed.min.js"></script>
    <script type="text/javascript">
      var userFeed = new Instafeed({
        get: 'user',
        userId: '202763771',
        clientId: '5ba65615ebb9415bab666489ac14816f',
        accessToken: '202763771.5ba6561.96bdeaed77204e4cbb8d7841646baa0d',
        resolution: 'standard_resolution',
        template: '<div class="hidden-xs hidden-sm col-md-3 padding0 boxes crop"><a href="{{link}}" target="_blank" id="{{id}}"><img class="center-block img-responsive" src="{{image}}" /></a></div>',
        sortBy: 'most-recent',
        limit: 4,
        links: false
      });
      userFeed.run();
    </script>
<!DOCTYPE html>
<html>
<body>
  <div id="app">
    <example-component>
      @foreach($randoms as $random)
        <a style='font-weight: bold;'>{{ $random->name }}</a>
        :
        @foreach($breakdowns->where('random_id', $random->id) as $breakdown) 
          {{ $breakdown->value }} 
        @endforeach
      @endforeach
    </example-component>
</div>
  <script src="/js/app.js"></script>  
</body>

</html>
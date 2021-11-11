<!DOCTYPE html>
<script></script>
<link rel="stylesheet" href="app/.css">
<body>
    @foreach($randoms as $random)
     <a style='font-weight: bold'>{{ $random->name }}</a>
     :
     @foreach($breakdowns->where('random_id', $random->id) as $breakdown) 

       {{ $breakdown->value }} 

     @endforeach
     @endforeach

</body>

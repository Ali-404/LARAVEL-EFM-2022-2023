<h2>Vos notifications :</h2>
<ul>
@foreach ($notifications as $notif)
 <li>{{ $notif->data['message'] }}</li>
@endforeach
</ul>

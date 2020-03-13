<!-- UserControllerから渡されたnameを表示する -->
<!-- <h1>Hello!! {{$name}}</h1> -->

@foreach($users as $user)
    <h1>Your name is {{$user->name}}. Your mail address is {{$user->email}}</h1>
@endforeach
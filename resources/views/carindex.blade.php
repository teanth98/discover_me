<!DOCTYPE html>
@if(Auth::check())
{{-- @if(Auth::user()->email==$cars as $car->username) --}}
    <html>
      <head>
        <meta charset="utf-8">
        <title>Index Page</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
      </head>
      <body>
        <div class="container">
        <br />
        @if (\Session::has('success'))
          <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
          </div><br />
        @endif
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Friends Name</th>
    {{-- @if($cars[sizeof($cars)-1]->carcompany!=NULL) --}}
                <th>Hobby</th>
            {{-- @endif --}}
            {{-- @if($cars[sizeof($cars)-1]->model!=NULL) --}}
                <th>Actress</th>
            {{-- @endif --}}
            {{-- @if($cars[sizeof($cars)-1]->price!=NULL) --}}
                <th>Number</th>
            {{-- @endif --}}
            
            

            {{-- @if($cars[sizeof($cars)-1]->instalink!=NULL) --}}
            <th>Instagram Link</th>
            {{-- @endif --}}

            {{-- @if($cars[sizeof($cars)-1]->fblink!=NULL) --}}
            <th>Facebook Link</th>
            {{-- @endif --}}

            {{-- @if($cars[sizeof($cars)-1]->fblink!=NULL) --}}
            <th>Photo Link</th>
            {{-- @endif --}}

            {{-- @if($cars[sizeof($cars)-1]->snapchatid!=NULL) --}}
            <th>snapchat Id</th>
            {{-- @endif --}}

            {{-- @if($cars[sizeof($cars)-1]->sportsperson!=NULL) --}}
            <th>Sports Person</th>
            {{-- @endif --}}

            {{-- @if($cars[sizeof($cars)-1]->favoritebook!=NULL) --}}
            <th>Favorite Book</th>
            {{-- @endif --}}

            {{-- @if($cars[sizeof($cars)-1]->favoritebike!=NULL) --}}
            <th>Favorite Bike</th>
            {{-- @endif --}}

            {{-- @if($cars[sizeof($cars)-1]->favoritecar!=NULL) --}}
            <th>Favorite Car</th>
            {{-- @endif --}}

            {{-- @if($cars[sizeof($cars)-1]->favoritebrand!=NULL) --}}
            <th>Favorite Brand</th>
            {{-- @endif --}}

            <th colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
  {{-- @endif                    --}}
  @foreach($cars as $car)
    {{-- @if(Auth::user()->email===$car->username) --}}
    @if($car->username===Auth::user()->name)
      <tr>
        <td>{{$car->id}}</td>
        <td>{{$car->username}}</td>
        <td>{{$car->friendsname}}</td>
        <td>{{$car->carcompany}}</td>
        <td>{{$car->model}}</td>
        <td>{{$car->price}}</td>
        <td>{{$car->instalink}}</td>
        <td>{{$car->fblink}}</td>
        <td>{{$car->photolink}}</td>
        <td>{{$car->snapchatid}}</td>
        <td>{{$car->sportsperson}}</td>
        <td>{{$car->favoritebook}}</td>
        <td>{{$car->favoritebike}}</td>
        <td>{{$car->favoritecar}}</td>
        <td>{{$car->favoritebrand}}</td>
 
        <td><a href="{{action('CarController@edit', $car->id)}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('CarController@destroy', $car->id)}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      {{-- @else
        <div class="page-header">
          <h1>Sorry!!<small><br>Please enter a valid username</small></h1>
        </div>
        @break --}}
    {{-- @endif     --}}
  @endif  
  @endforeach
    
        </tbody>
      </table>
      </div>
      </body>
@endif

@if(Auth::guest())
    <a href="/login" class="btn btn-info"> You need to Login >></a>
@endif

</html>
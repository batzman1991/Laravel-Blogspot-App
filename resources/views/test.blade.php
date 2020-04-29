
<div class="container">

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Created @ </th>
           </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
              
          <tr>
          <th scope="row">{{$user->name}}
         </th>
          <td>{{$user->email}}</td>
          <td>{{$user->created_at}}</td>
          <td>@mdo</td>
        </tr>
          @endforeach

           </tbody>
      </table>
    

</div>
   <div><hr><p>                    
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla minima, ullam eveniet deserunt error unde nesciunt vitae in cupiditate omnis quibusdam.  </p>
	
           
       <h2>Список пользователей</h2>
       
        <a href="{{ route('admAddUser')}}">Добавить пользователя</a><br>
        
       <table class="table table-bordered">
         <thead>
             <tr>
                 <th>Id</th>
                 <th>Наименование</th>
                 <th>Дата</th>
                 <th>Управление</th>
             </tr>
         </thead>
         <tbody>
          @forelse($users as $user)   
           <tr>
               <td>{{$user->id}}</td>
               <td>{{$user->name}}</td>
               <td>{{$user->updated_at}}</td>
               <td><a href="<a href="{{route('admUpdUser', $user->id)}} ">Изм.</a>&nbsp; <a href="{{route('admDelUser', $user->id)}}">X</a></td>   
               
           </tr>
          @empty
             <h3>нет данных</h3>
          @endforelse
         </tbody>
          
       </table>
       <hr>
    </div>                 

  

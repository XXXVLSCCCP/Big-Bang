   
   <div><hr><p>                    
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla minima, ullam eveniet deserunt error unde nesciunt vitae in cupiditate omnis quibusdam.  </p>
	
           
       <h2>Список: Результат поиска партнера </h2>
       
        
       <table class="table table-bordered">
         <thead>
             <tr>
                 <th>Id</th>
                 <th>Имя</th>
                 <th>Страна</th>
				 <th>Возраст</th>
                 <th>Приглашение</th>
             </tr>
         </thead>
         <tbody>
          @forelse($rez as $r)   
           <tr>
               <td>{{$r->id}}</td>
               <td>{{$r->name}}</td>
               <td>-</td>
			   <td>-</td>
               <td><a href="{{route('sendInvitation', $r->id)}}">Отправить</a>&nbsp; </td>   
               
           </tr>
          @empty
             <h3>нет данных</h3>
          @endforelse
         </tbody>
          
       </table>
       <hr>
    </div>                 
    


  

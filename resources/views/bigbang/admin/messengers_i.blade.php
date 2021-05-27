   <div><hr><p>                    
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla minima, ullam eveniet deserunt error unde nesciunt vitae in cupiditate omnis quibusdam.  </p>
	
           
       <h2>Список мессенджеров</h2>
       
        <a href="{{ route('admAddMs')}}">Добавить мессенджер</a><br>
        
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
          @forelse($messengers as $messenger)   
           <tr>
               <td>{{$messenger->id}}</td>
               <td>{{$messenger->name}}</td>
               <td>{{$messenger->updated_at}}</td>
               <td><a href="<a href="{{route('admUpdMs', $messenger->id)}} ">Изм.</a>&nbsp; <a href="{{route('admDelMs', $messenger->id)}}">X</a></td>   
               
           </tr>
          @empty
             <h3>нет данных</h3>
          @endforelse
         </tbody>
          
       </table>
       <hr>
    </div>                 

  

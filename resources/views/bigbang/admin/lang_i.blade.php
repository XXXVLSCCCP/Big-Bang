   <div><hr><p>                    
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla minima, ullam eveniet deserunt error unde nesciunt vitae in cupiditate omnis quibusdam.  </p>
	
           
       <h2>Список языков</h2>
       
        <a href="{{ route('admAddCountry')}}">Добавить язык</a><br>
        
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
          @forelse($languages as $lang)   
           <tr>
               <td>{{$lang->id}}</td>
               <td>{{$lang->name}}</td>
               <td>{{$lang->updated_at}}</td>
               <td><a href="<a href="{{route('admUpdLang', $lang->id)}} ">Изм.</a>&nbsp; <a href="{{route('admDelLang', $lang->id)}}">X</a></td>   
               
           </tr>
          @empty
             <h3>нет данных</h3>
          @endforelse
         </tbody>
          
       </table>
       <hr>
    </div>                 

  

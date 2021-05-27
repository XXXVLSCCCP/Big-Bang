   <div><hr><p>                    
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla minima, ullam eveniet deserunt error unde nesciunt vitae in cupiditate omnis quibusdam.  </p>
	
           
       <h2>Список стран</h2>
       
        <a href="{{ route('admAddCountry')}}">Добавить страну</a><br>
        
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
          @forelse($countries as $country)   
           <tr>
               <td>{{$country->id}}</td>
               <td>{{$country->name}}</td>
               <td>{{$country->updated_at}}</td>
               <td><a href="<a href="{{route('admUpdCountry', $country->id)}} ">Изм.</a>&nbsp; <a href="{{route('admDelCountry', $country->id)}}">X</a></td>   
               
           </tr>
          @empty
             <h3>нет данных</h3>
          @endforelse
         </tbody>
          
       </table>
       <hr>
    </div>                 

  

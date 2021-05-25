
   <div>
      <h2>Ваши контакты (список) </h2>
   <hr>
    <p>                    
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla minima, ullam eveniet deserunt error unde nesciunt vitae in cupiditate omnis quibusdam? Deleniti quidem beatae, consequuntur cupiditate hic aut sed, nisi laboriosam, accusamus, fuga magnam vel porro id iure dolore in fugit a sit maiores laborum consequatur animi. Voluptatibus autem porro quas doloremque saepe, delectus fugit corporis ab soluta alias, quibusdam error provident vero libero officia recusandae harum at assumenda ea repellat odit, labore hic commodi. Ab amet cumque enim sit, quos perferendis reiciendis sapiente, esse, rerum, obcaecati ipsum nesciunt eum facilis similique ex.  </p>
    <br>
    <hr>
       
        
       <table class="table table-bordered">
         <thead>
             <tr>
                 <th>Id</th>
                 <th>Имя</th>
                 <th>Общение</th>
             </tr>
         </thead>
         <tbody>
          @forelse($contacts as $r)   
           <tr>
               <td>{{$r->id}}</td>
               <td> - - </td>
               <td><a href="{{route('talks', $r->id)}}">Открыть</a>&nbsp; </td>  
               
           </tr>
          @empty
             <h3>нет данных</h3>
          @endforelse
         </tbody>
          
       </table>
       <hr>
	
    </div>                 
    
    


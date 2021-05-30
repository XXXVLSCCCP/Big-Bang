
   <div>
   <h2>Страница с Сообщениями</h2>
   <hr>
    <p>                    
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla minima, ullam eveniet deserunt error unde nesciunt vitae in cupiditate omnis quibusdam? Deleniti quidem beatae, consequuntur cupiditate hic aut sed, nisi laboriosam, accusamus, fuga magnam vel porro id iure dolore in fugit a sit maiores laborum consequatur animi. Voluptatibus autem porro quas doloremque saepe, delectus fugit corporis ab soluta alias, quibusdam error provident vero libero officia recusandae harum at assumenda ea repellat odit, labore hic commodi. Ab amet cumque enim sit, quos perferendis reiciendis sapiente, esse, rerum, obcaecati ipsum nesciunt eum facilis similique ex.  </p>
    <br>
    <hr>
       <h2>Сообщения </h2>
       
        
       <table  width="700">
         <thead>
             <tr>
                 <th>От собеседника</th>
                 <th width="50%">Мои</th>
             </tr>
         </thead>
         <tbody>
         
         
          @forelse($talks as $r)   
           <tr align="center">
                 <td> @if($r->user1_id != $userlk_id ) {{$r->mess}} @endif</td>
                 <td> @if($r->user1_id == $userlk_id ) {{$r->mess}} @endif</td>
           </tr>
          @empty
             <h3>нет данных</h3>
          @endforelse
         </tbody>
          
       </table>
	   
    <br>
    
    <hr>
	<form action="{{ route('sendMsg') }}" method="post">
	 
        @csrf
        <table width="50%" cellspacing="0" cellpadding="4">
       
        <tr>
        <td align="left" width="100">Сообщение </td>
        <td align="left"><textarea class="form-control" rows="5" cols="32" type="text" placeholder="Введите сообщение " name="mess" ></textarea></td>
        </tr>
        
        </table>
        <input class="form-control" type="text" name="contacts_id" value="{{ $contacts_id }}" hidden>
         <input class="form-control" type="text" name="user1_id" value="{{ $user1_id }}" hidden>
         <input class="form-control" type="text" name="user2_id" value="{{ $user2_id }}" hidden>
        <br>
        <button class="form-control" type="submit">Отправить</button>
    </form>
    
    
    <hr>

	
    </div>                 
    
    


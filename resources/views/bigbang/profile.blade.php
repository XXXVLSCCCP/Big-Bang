
   <div>
   <h2>Профиль пользователя</h2>
   <hr>
    <p>                    
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla minima, ullam eveniet deserunt error unde nesciunt vitae in cupiditate omnis quibusdam? Deleniti quidem beatae, consequuntur cupiditate hic aut sed, nisi laboriosam, accusamus, fuga magnam vel porro id iure dolore in fugit a sit maiores laborum consequatur animi. Voluptatibus autem porro quas doloremque saepe, delectus fugit corporis ab soluta alias, quibusdam error provident vero libero officia recusandae harum at assumenda ea repellat odit, labore hic commodi. Ab amet cumque enim sit, quos perferendis reiciendis sapiente, esse, rerum, obcaecati ipsum nesciunt eum facilis similique ex.  </p>
    <br>

    <form action="{{route('updprofile')}}" method="post">
        @csrf
        <table width="50%" cellspacing="0" cellpadding="4">


<tr>
        <td align="left" width="100">Имя в системе (ник)</td>
        <td align="left">
            <input class="form-control" type="text" placeholder="Nik" name="name" value="{{$user->name}}" maxlength="50" size="30" readonly>
        </td>
 </tr>

 <tr>
        <td align="left" width="100">Емаил</td>
        <td align="left">
            <input class="form-control" type="text" placeholder="nik@email.dom" name="email" value="{{$user->email}}" maxlength="50" size="30" readonly>
        </td>
 </tr>
 
<tr><td><h3><hr></h3></td><td></td></tr>					 
<tr><td><h3>О себе</h3></td><td></td></tr>
 
 
<tr>
        <td align="left" width="100">Имя</td>
        <td align="left">
            <input class="form-control" type="text" placeholder="Имя" name="user_name" value="{{$user->user_name}}" maxlength="50" size="30">
        </td>
 </tr>
        <tr>
        <td align="left" width="100">Дата рождения </td>
        <td align="left">
            <input class="form-control" type="text" placeholder="1111-11-30" name="birthdate" value="{{$user->birthdate}}" maxlength="50" size="30">
        </td>
        </tr>

		
        <tr><td align="left" width="100">Страна</td><td align="left"><select class="form-control" name="country_id" id="country_id">  @foreach($countries as $c)
            <option value="{{$c['id']}}"> {{$c['name']}}</option>
         @endforeach </select></td></tr>
  
      <tr><td align="left" width="100">Пол</td><td align="left"><select class="form-control" name="selpol" id="selpol"> 
             <option value="1" selected='selected'>м</option>
             <option value="0">ж</option></select></td></tr>
			 
        <tr><td align="left" width="100">Родной язык</td><td align="left"><select class="form-control" name="language_id" id="language_id">        @foreach($lang as $l)
            <option value="{{$l->id}}"> {{$l->name}} </option>
         @endforeach </select></td></tr>
        
  					 
        <tr><td align="left" width="100">Изучаемый язык</td><td align="left">
		
		<select class="form-control" name="learning_language_id" id="learning_language_id">        @foreach($lang as $l)
            <option value="{{$l->id}}"> {{$l->name}}</option>
         @endforeach
		 </select>
		 </td></tr>

        <tr><td align="left" width="100">Использую мессенджеры</td><td align="left">
		
		<select class="form-control" multiple="multiple" name="studieslang" id="studieslang">        @foreach($messengers as $l)
            <option value="{{$l->id}}"> {{$l->name}}</option>
         @endforeach
		 </select>
		 
		 </td> </tr>
			 
        </table>
        <br>
		
		
        <button class="form-control" type="submit">Сохранить</button>
    </form>

    
    <hr>
    </div>                 
    
    


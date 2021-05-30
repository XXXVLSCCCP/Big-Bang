
   <div>
   <h2>Страница Поиск партнера</h2>
   <hr>
    <p>                    
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla minima, ullam eveniet deserunt error unde nesciunt vitae in cupiditate omnis quibusdam? Deleniti quidem beatae, consequuntur cupiditate hic aut sed, nisi laboriosam, accusamus, fuga magnam vel porro id iure dolore in fugit a sit maiores laborum consequatur animi. Voluptatibus autem porro quas doloremque saepe, delectus fugit corporis ab soluta alias, quibusdam error provident vero libero officia recusandae harum at assumenda ea repellat odit, labore hic commodi. Ab amet cumque enim sit, quos perferendis reiciendis sapiente, esse, rerum, obcaecati ipsum nesciunt eum facilis similique ex.  </p>
    <br>
       
    <hr>
    <form action="{{route('findPartner')}}" method="post">
        @csrf
        <table width="50%" cellspacing="0" cellpadding="4">

        <tr><td align="left" width="100">Страна</td><td align="left"><select class="form-control" name="selcountry" id="selcountry">  @foreach($countries as $c)
            <option value="{{$c['id']}}"> {{$c['name']}}</option>
         @endforeach </select></td></tr>
                
        <tr><td align="left" width="100">Язык</td><td align="left"><select class="form-control" name="sellang" id="sellang">        @foreach($lang as $l)
            <option value="{{$l->id}}"> {{$l->name}}</option>
         @endforeach </select></td></tr>
        
        <tr><td align="left" width="100">Пол</td><td align="left"><select class="form-control" name="selpol" id="selpol"> 
             <option value="0" selected='selected'>м</option>
             <option value="1">ж</option></select></td></tr>
        
        
       
        <tr>
        <td align="left" width="100">Возраст</td>
        <td align="left">
            <input class="form-control" type="text" placeholder="от" name="vozr1" value="10" maxlength="50" size="30">
            <input class="form-control" type="text" placeholder="до" name="vozr2" value="11" maxlength="50" size="30">
        </td>
        </tr>
        
        </table>
        <br>
        <button class="form-control" type="submit">Найти</button>
    </form>
    
    
    <hr>
    </div>  
    
@dd($lang[1]['id'])
@dd($countries)                                  
                                     
    
    


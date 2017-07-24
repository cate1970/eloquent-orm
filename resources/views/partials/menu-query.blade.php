<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Consultas Elocuent
    <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <li>
            <a href="{{ url('all')}}">Todos los usuarios (ALL)</a>
        </li>  
        <li>         
            <a href="{{ url('get', 'f') }}">Lista de usuarios (GET)</a>
        </li>  
        <li>           
            <a href="{{ url('get', 'm') }}">Lista de usuarios (GET)</a>
        </li>
        <li>
            <a href="{{ url('get-custom') }}">Lista de usuarios (GET con Array)</a>
        </li>
        <li>
            <a href="{{ url('lists') }}">Lista de usuarios para Select (LISTS)</a>
        </li>   
        <li>
            <a href="{{ url('first-last') }}">First Last</a>
        </li> 
        <li>
            <a href="{{ url('paginate') }}">Eloquent Paginate</a>
        </li>    
    </ul>
</li>
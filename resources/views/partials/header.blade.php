<header>
   <div class="wrapper header">
      <div class="logo-header">
         <!-- logo DC -->
         <img src="{{ asset('images/dc-logo.png') }}" alt="">
      </div>
      <div class="menu-header">
         <ul>
            <!-- ciclo for per i link del menu -->
            @foreach (config('links') as $link)
                <li >
                    <a href="{{ route($link['route']) }}">{{ $link['title'] }}</a>
                </li>
            @endforeach
         </ul>
      </div>
   </div>
</header>
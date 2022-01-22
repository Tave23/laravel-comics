<div class="bg-link">
   <div class="wrapper linkUtili">
<!-- prima colonna di link (DC COMICS-SHOP) -->
      <div class="first-column">
         <ul>
            <h3>dc comics</h3>

            @foreach (config('linkDcComics') as $linkDcComics)
                <li >
                    <a href="{{ $linkDcComics['url'] }}">{{ $linkDcComics['text'] }}</a>
                </li>
            @endforeach
            
         </ul>

         <ul>
            <h3>shop</h3>

            @foreach (config('linkShop') as $linkShop)
                <li >
                    <a href="{{ $linkShop['url'] }}">{{ $linkShop['text'] }}</a>
                </li>
            @endforeach
            
         </ul>
      </div>
<!-- seconda colonna di link (DC) -->
      <div class="second-column">

         <ul>
            <h3>DC</h3>

            @foreach (config('linkDc') as $linkDc)
                <li >
                    <a href="{{ $linkDc['url'] }}">{{ $linkDc['text'] }}</a>
                </li>
            @endforeach
            
         </ul>

      </div>
<!-- terza colonna di link (SITES) -->
      <div class="third-column">

         <ul>
            <h3>SITES</h3>
            
            @foreach (config('linkSites') as $linkSite)
                <li >
                    <a href="{{ $linkSite['url'] }}">{{ $linkSite['text'] }}</a>
                </li>
            @endforeach

         </ul>

      </div>
      
      <div class="logo-dc">
         <img src="{{ asset('images/dc-logo-bg.png') }}" alt="">
      </div>
   </div>
</div>
<main>

   <div class="wrapper">

      <button class="series">
         <h3>
            current series
         </h3>
      </button>

      <div class="img-container">

         <!-- ciclo foreach per i fumetti -->
         @foreach (config('comics') as $comic)

            <div class="imgBox">
            
               <img src="{{ $comic["thumb"] }}" alt="">
               <p>{{ $comic["title"] }}</p>
   
            </div>

         @endforeach

         
      </div>

      <button class="load">
         <h3>
            load more
         </h3>
      </button>

   </div>
</main>
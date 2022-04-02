@extends('layouts.app')
@section('title')
@section('content')

  <div id="welcomePage" class="mt_120">

    <section class="header">

      <!-- First container -->
      <div class="welcome_container container_solid">
        <div class="title_wrapper">
          <h1 class="text-capitalize">dog crew asd</h1>
        </div>
      </div>

      <!-- Second container -->
      <div class="welcome_container container_image" aria-hidden="true">
        <div class="title_wrapper">
      </div>
    </section>

    {{-- logo --}}
    <div class="d-flex justify-content-center logo_section">
      <img src="{{asset('images/logoDogCrew.jpg')}}" alt="Logo">
    </div>

    <section class="description">
      <h1 class="text-capitalize">simone piacentini</h1>
      <div class="body_description">
        <p>Dog Crew è una grande famiglia da tanti anni ormai, pronta a mettersi in discussione ma anche a far sentire la voce di ogni singolo membro!</p>
        <p>Non siamo perfetti, ci sono sfumature che occorre cogliere e osservare senza avere la necessità di valutare e rendere nostre, c'è bisogno di saper STARE, di saper VIVERE questi momenti insieme come una vera Crew.</p>
        <p>In questo lavoro ci sono percorsi che hanno un inizio e una fine ed altri che si tramutano in qualcosa di duraturo, pronti a scoprirsi nel tempo, legami importanti, collaborazioni, amicizie.</p>
        <p>Non importa la destinazione di un viaggio se il durante non è stato ricco di emozioni...</p>
        <p><span class="text-capitalize">simone piacentini</span> istruttore Cinofilo SIUA e tecnico mobility</p>
      </div>
    </section>

    <section class="card_container">

      {{-- comunication --}}
      <div class="comunication">
        <div class="figure">
          <div class="img"></div>
          
          <div class="figcaption">
            <span class="title_wr">Classi di Comunicazione</span>
            <span>
              <p>
                Comunicare non, è solo un dare e avere, è un filo sottile e fragile tra due individui.
              </p>
              <p>
                Tanti nuovi spunti su cui riflettere, tempo, pazienza e il continuo mettersi in gioco anche nei momenti più difficili sono il segreto per migliorarsi e riuscire a vedersi allo specchio per come si è realmente!
              </p>
              <p class="d-flex justify-content-center mt-4">
                <a href="{{ route('sections', 1) }}" class="btn btn_green text-capitalize">entra</a> 
              </p>
            </span>
          </div>
          
          <button></button>
        </div>
      </div>

      {{-- events --}}
      <div class="events">
        <div class="figure">
          <div class="img"></div>
          
          <div class="figcaption">
            <span  class="text-capitalize">eventi</span>
            <span>
              <p>
                Un gruppo misto, un percorso impegnativo per alcuni versi,nuove scoperte e tantissime risate!
              </p>
              <p>
                Attività come il dog trekking se ben organizzate e studiate possono essere dei momenti costruttivi per tutti,di quelli che possono lasciare il segno!
              </p>
              <p class="d-flex justify-content-center mt-4">
                <a href="{{ route('sections', 2) }}" class="btn btn_green text-capitalize">entra</a> 
              </p>
            </span>
          </div>
          
          <button></button>
        </div>
      </div>

      {{-- whorkshops --}}
      <div class="workshops">
        <div class="figure">
          <div class="img"></div>
          
          <div class="figcaption">
            <span  class="text-capitalize">seminari</span>
            <span class="last_description">
              <p>
                Di cosa si tratta? Lo scoprirete partecipando ma un po' di spoiler è di dovere!
              </p>
              <p>
                Due giorni dove andremo ad osservare, analizzare, aggiungere, togliere, guidare i rami della vostra crescita. Un nuovo modo di vedere la nostra relazione insieme a loro, i protagonisti di ogni iniziativa che intraprendiamo... i cani!
              </p>
              <p class="d-flex justify-content-center mt-4">
                <a href="{{ route('sections', 3) }}" class="btn btn_green text-capitalize">entra</a> 
              </p>
            </span>
          </div>
          
          <button></button>
        </div>
      </div>

      {{-- blog --}}
      <div class="blog">
        <div class="figure">
          <div class="img"></div>
          
          <div class="figcaption">
            <span class="text-capitalize">blog</span>
            <span class="last_description">
              <p>
                Voglio ringraziare ognuno di voi per la tenacia, la passione, la voglia che avete sempre di condividere e vivere insieme a me!
              </p>
              <p>
                Qui troverete consigli e spunti derivanti dall'esperienza e dal volermi mettere in gioco ogni giorno! 
              </p>
              <p class="d-flex justify-content-center mt-4">
                <a href="{{ route('sections', 4) }}" class="btn btn_green text-capitalize">entra</a> 
              </p>
            </span>
          </div>
          
          <button></button>
        </div>
      </div>

    </section>
  
    <script src="{{ asset('js/welcome.js') }}"></script>
  </div>

@endsection

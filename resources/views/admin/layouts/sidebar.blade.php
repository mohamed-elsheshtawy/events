<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
       
        <div class="sb-sidenav-menu">
            <div class="sb-sidenav-menu-heading"> 
            </div>
            <div class="nav">
               

                <a class="nav-link" href="{{ route('home-page') }}">
                    <i class="fa fa-credit-card px-2"></i>
                    {{__('words.website') }}
                     </a>
                <a class="nav-link" href="{{ url('/') }}">
                    <div class="sb-nav-link-icon"><i class="fa-sharp fa-solid fa-house-chimney"></i></div>
                    {{__('words.home') }}
                </a>
                
                <a class="nav-link" href="{{ route('events.index') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-calendar-days"></i></div>
                    {{__('words.events') }}
                </a>
                
                <a class="nav-link" href="{{ route('sliders.index') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-sliders"></i></div>
                    {{__('words.sliders') }}
                </a>
                <a class="nav-link" href="{{ route('exhibitions.index') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-panorama"></i></div>
                    {{__('words.exhibitions') }}
                </a>
                <a class="nav-link" href="{{ route('mediaExhibitions.index') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-panorama"></i></div>
                    {{__('words.Gallery modes') }}
                </a>
                <a class="nav-link" href="{{ route('services.index') }}">
                    <div class="sb-nav-link-icon"><i class="fa-brands fa-servicestack"></i>
                    </div>
                    {{__('words.Services') }}
                </a>
                <a class="nav-link" href="{{ route('clients.index') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-user-tie"></i>
                    </div>
                    {{__('words.Clients') }}
                </a>
                <a class="nav-link" href="{{ route('partners.index') }}">
                    <div class="sb-nav-link-icon"><i class="fa-regular fa-handshake"></i>
                    </div>
                    {{__('words.partners') }}
                </a>
                <a class="nav-link" href="{{ route('all_contact-us') }}">
                    <div class="sb-nav-link-icon"><i class="fa-regular fa-address-card"></i></div>
                    {{__('words.contact_us') }}
                </a>
                <a class="nav-link" href="{{ route('sections') }}">
                    <div class="sb-nav-link-icon"><i class="fa-regular fa-address-card"></i></div>
                    {{__('words.sections') }}
                </a>
                <a class="nav-link" href="{{ route('settings') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-cog" aria-hidden="true"></i>
                    </div>
                    {{__('words.settings') }}
                </a>
               
            </div>
        </div>
    
    </nav>
</div>
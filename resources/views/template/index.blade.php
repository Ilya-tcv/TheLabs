{{-- Head & Navbar --}}
@yield('head')
@yield('nav')

{{-- Titres de pages --}}
@yield('blogheader')
@yield('contactheader')
@yield('serviceheader')
@yield('elementheader')
@yield('intro')

{{-- Google Map, si Google map il y a --}}
@yield('gmap')

{{-- Contenu de pages --}}
@yield('blogsection')
@yield('blogpostsection')
@yield('contactsection')
@yield('servicesection')
@yield('features')
@yield('servicecards')
@yield('about')
@yield('testimonial')
@yield('elementsection')
@yield('team')
@yield('promotion')

{{-- Newsletter --}}
@yield('newsletter')

{{-- Footer & Scripts --}}
@yield('footer')
@yield('scripts')
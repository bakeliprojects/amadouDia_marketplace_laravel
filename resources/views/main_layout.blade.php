<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('titre')</title>
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       <style>
/* Footer */

footer
{
    display: flex;
    background:  url('images/ico_top.png') no-repeat top center, url('images/separateur.png') repeat-x top, url('images/ombre.png') repeat-x top;
    padding-top: 25px;
}

footer p, footer ul
{
    font-size: 0.8em;
}

footer h1
{
    font-size: 1.1em;
}


#tweet
{
    padding-top: 50px;
    width: 50%;
    padding-left: 100px;
}

#mes_photos
{
    width: 35%;
}

#mes_amis
{
    width: 31%;
}

#mes_photos img
{
    
    margin-right: 2px;
}

#listes_amis
{
    display: flex;
    justify-content: space-between;
    margin-top: 0;
}

#mes_amis ul
{
    list-style-image: url('images/ico_liensexterne.png');
    padding-left: 2px;
}

#mes_amis a
{
    text-decoration: none;
    color: #760001;
}
figure {
    position: relative;
    display: inline-block;
    overflow: hidden;
    margin: 0;
}
img, figcaption {
    transition: all .25s ease;
}

figcaption {
    position: bottom;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    padding: .5em;
    background: #000;
    background: rgba(0, 0, 0, .75);
    color: #fff;
    opacity: 0;
}
figure:hover img {
    transform: scale(1.1);
}
figure:hover figcaption {
    opacity: 10;
}
           li{
               color:white;
           }
           

</style>
    
<script>

  function ConfirmDelete()
  {
  var x = confirm("Voulez-vous vraiment supprimer ce produit?");
  if (x)
    return true;
  else
    return false;
  }
</script>
</head>
<body  style="background-color:white;">
<header>
<div  style="background-color:black; color:white;font-size: large;font-family: fantasy;">
    <div class="navbar navbar-inversion">
    <div class="container">
        <a id="logo" href="{{ url('produit')  }}" class="navbar-brand" style="color: white; font-size: large;font-family: fantasy; ">Compute Your Computer</a>
       
        <img src="logos/logo_facebook.png" class="navbar-right" width="40px" height="40px" style="margin: 5px;"/>
        <img src="logos/twitter-logo-294x294.png" class="navbar-right" width="40px" height="40px" style="margin: 5px;" />
        <img src="logos/google-plus-icon.png" class="navbar-right" width="40px" height="40px" style="margin: 5px;" />
        <i class=" navbar-right"> Follow us</i>
        
        
    </div>
</div>

   <nav class="navbar navbar-default" >
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse"   style="background-color:black;">
      <ul class="nav navbar-nav" >
        <li class="active" style="color:white;"><a href="{{ url('produit')  }} ">Tous produits <span class="sr-only">(current)</span></a></li>
        <li><a href="{{ url('tels')  }}">Telephones</a></li>
        <li><a href="{{ url('teles')  }}">Televiseurs</a></li>
          <li><a href="{{ url('ordi')  }}">Ordinateurs</a></li>
      </ul>
    {!! Form::open(array('url' => 'search', 'class'=>'form navbar-form navbar-right searchform')) !!}
    {!! Form::text('search', null,
                           array('required',
                                'class'=>'form-control',
                                'placeholder'=>'Rechercher un produit...')) !!}
     {!! Form::submit('Rechercher',
                                array('class'=>'btn btn-default')) !!}
 {!! Form::close() !!}
<ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Se connecter</a></li>
                            <li><a href="{{ url('/register') }}">S'inscrire</a></li>
                        @else
                            
                                
                            <div class="dropdown">
                                  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"> {{ Auth::user()->name }}
                                    <span class="caret"></span></button>
                                    
                                
                                <ul class="dropdown-menu">
                                    <li>
                                      <a href="espace" title="accueil compte">Accueil compte</a>
                                    </li>
                                    <li>    
                                        @if(Auth::check())
                                            <a href="{{ url('ajout')  }}" class="top_login"> <span width="77" height="25"></i>Ajouter un produit</span></a>
                                        @endif
                                </li>
                                    <li>  <a href="chariot"> <img src="logos/ico-cart.png" > Panier <b></b></a></li>
                            <li>  <a href="orders"> <img src="logos/ico-cart.png" >Mes commandes <b></b></a></li>
                                    <li>
                                  <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            
                                        </a>

                                
                                    
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Se deconnecter
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    
                                
                                
                                </ul>
                            </div>
     <!--           
                            
        @if(Auth::check())
    <a href="{{ url('ajout')  }}" class="top_login"> <span width="77" height="25"></i>Ajouter un produit</span></a>
    @endif
                            </li>
                            <li>
                            
                            <a href="chariot"> <img src="logos/ico-cart.png" > Panier <b></b></a></li>
    
                        @endif
-->
                    
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
 </header>




        @yield('content')
 <footer>
                <div id="tweet">
                    
                    <p>© Copyright  Amad Bakeli  2016</p>
                    
                </div>
                <div id="mes_photos">
                    <h1><b>Suivez-nous</b></h1>
                    <p><img src="logos/logo_facebook.png" alt="Photographie" width="60px" height="60px"/>
                        <img src="logos/twitter-logo-294x294.png" alt="Photographie" width="60px" height="60px" />
                        <img src="logos/google-plus-icon.png" alt="Photographie" width="60px" height="60px" /></p>
                </div>
                <div id="mes_amis">
                    <h1>Mes amis</h1>
                    <div id="listes_amis">
                        <ul>
                            <li><a href="#">Pate</a></li>
                            <li><a href="#">Mr Diallo</a></li>
                            <li><a href="#">Koweit</a></li>
                            <li><a href="#">Barrya</a></li>
                        </ul>
                        
                    </div>
                </div>
</footer>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>

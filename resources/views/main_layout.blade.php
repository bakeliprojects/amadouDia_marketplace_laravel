<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('titre')</title>
    
    <!-- Styles -->
     <!-- Bootstrap core CSS -->
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Scripts -->
    <script
  src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <script
  src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>
    
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
</style>
</head>
<body  style="background-color:white;">
<header>
<div  style="background-color:black; color:white;">
    <div class="navbar navbar-inversion">
    <div class="container">
        <a id="logo" href="{{ url('produit')  }}" class="navbar-brand" style="color: white;">Compute Your Computer</a>
        Follow us
        <img src="logos/social_facebook.png" class="navbar-right" width="40px" height="40px">
        <img src="logos/social_twitter.png" class="navbar-right" width="40px" height="40px" >
        <img src="logos/social_linkedin.png"  class="navbar-right" width="40px" height="40px">
        
        
    </div>
</div>

   <nav class="navbar navbar-default" >
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse"   style="background-color:black; color:white;">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ url('produit')  }}">Tous produits <span class="sr-only">(current)</span></a></li>
        <li><a href="{{ url('tels')  }}">Telephones</a></li>
        <li><a href="{{ url('teles')  }}">Televiseurs</a></li>
          <li><a href="{{ url('ordi')  }}">Ordinateurs</a></li>
      </ul>
    {!! Form::open(array('url' => 'search', 'class'=>'form navbar-form navbar-right searchform')) !!}
    {!! Form::text('search', null,
                           array('required',
                                'class'=>'form-control',
                                'placeholder'=>'Search for a product...')) !!}
     {!! Form::submit('Search',
                                array('class'=>'btn btn-default')) !!}
 {!! Form::close() !!}
<ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Se connecter</a></li>
                            <li><a href="{{ url('/register') }}">S'inscrire</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                  <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Se deconnecter
                                        </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
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
                            </li>
                            <li>
        @if(Auth::check())
    <a href="{{ url('ajout')  }}" class="top_login"> <span width="77" height="25"></i>Ajouter un produit</span></a>
    @endif
                            </li>
                            <li>
                            
                            <a href="chariot"> <img src="logos/ico-cart.png" > Panier <b></b></a></li>
    
                        @endif
                    </ul>
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

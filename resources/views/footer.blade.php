<html>
<head>
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
    width: 28%;
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
    border: 1px solid #181818;
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
<body>
<footer>
                <div id="tweet">
                    <h1>Mon dernier tweet</h1>
                    <p>Hii haaaaaan !</p>
                    <p>le 12 mai à 23h12</p>
                </div>
                <div id="mes_photos">
                    <h1>Mes photos</h1>
                    <p><img src="images/photo1.jpg" alt="Photographie" /><img src="images/photo2.jpg" alt="Photographie" /><img src="images/photo3.jpg" alt="Photographie" /><img src="images/photo4.jpg" alt="Photographie" /></p>
                </div>
                <div id="mes_amis">
                    <h1>Mes amis</h1>
                    <div id="listes_amis">
                        <ul>
                            <li><a href="#">Pupi le lapin</a></li>
                            <li><a href="#">Mr Baobab</a></li>
                            <li><a href="#">Kaiwaii</a></li>
                            <li><a href="#">Perceval.eu</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Belette</a></li>
                            <li><a href="#">Le concombre masqué</a></li>
                            <li><a href="#">Ptit prince</a></li>
                            <li><a href="#">Mr Fan</a></li>
                        </ul>
                    </div>
                </div>
</footer>
</body>
</html>
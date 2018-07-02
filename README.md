#### The Abstract Factory Pattern

##### Additional Documentation
UML - Drawing of the Application:
https://drive.google.com/file/d/1aGXfrGKiHqdu8q_QTQPyHRovpt-AQD7l/view?usp=sharing

#### Questions Answered
##### Welk design pattern is gekozen?
Abstract Factory Pattern

##### Wat zijn de kenmerken (toegevoegde waarde) van dit design pattern?
De Abstract Factory Pattern zorgt er voor dat er zeer flexibele objecten aangemaakt kunnen worden.

##### Welke concept is bedacht om het pattern te kunnen toepassen?
Ik heb gekozen voor 2 soorten Medabots / robots, welke verschillende delen kunnen bevatten: een hoofd, armen, benen en een Medal.

##### Wat zijn de responsibilities van de geimplementeerde classes?
De client vraagt specifiek om een RangedMedabot of een MeleeMedabot.

De factories zorgen ervoor dat de (business) logica wordt verwerkt tijdens het aanmaken van een type Medabot.

De Abstract Medabot heeft standaard properties (het hoofd, de armen, de benen, de medal en de kleur) en bijhorende getters- & setters - welke elke subclass van Medabot moet inheriten.

##### In welk opzicht wordt polymorfie bereikt?

Polymorfie wordt bereikt doordat elk verplicht onderdeel gebruik maakt van een interface of een subclass is van. Dit zorgt voor hoge configureerbaarheid en dus toont er hier polymorfie op.

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
Ik heb gekozen voor een concept waar je twee types "Medabots" kan maken, een ranged en een melee Medabot.
Deze Medabots hebben allebei verschillende types Parts, maar zijn gebaseerd op dezelfde Abstract class.

##### Wat zijn de responsibilities van de geimplementeerde classes?
De Client vraagt een Ranged- of een Melee Medabot aan.
De Client gebruikt hier een tussenklasse voor - deze is gebaseerd op een Abstract class: BuildMedabot.

Deze BuildMedabot subclasses roept de desbetreffende Factory aan; de RangedMedabotFactory of de MeleeMedabotFactory - welke tevens weer gebaseerd zijn op een Abstract MedabotFactory.

In de factories wordt logica toegpast die door de hele applicatie moet gelden - business logica heeft hier bijvoorbeeld een goede plek. Ook worden vereiste instellingen direct toegepast en wordt er een Medabot teruggegeven aan de caller.

De Abstract Medabot class heeft standaard setters- en getters voor zijn properties (hieronder de bestaande properties):
> Head
> Arms = ['left', 'right']
> Legs = ['left', 'right']
> Colour
> Medal

Deze properties zijn allemaal Objects die òf een Part zijn òf een Medal.

##### In welk opzicht wordt polymorfie bereikt?

In de Abstract Factory Pattern is alles gebaseerd op abstracte klassen. Hierdoor bestaat er een standaard set methodes die in elke subclass van deze abstracte klassen en komt er een grote configureerbaarheid te bestaan en hierdoor wordt dus polymorfie bereikt.

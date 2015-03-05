Feature: Web pages

  Scenario: Elegia o...chłopcu polskim
    Given I am on "wiersz-o-chlopcu-polskim.html"
    Then the response status code should be 200
    Then I should see "Oddzielili cie, syneczku, od snów, co jak motyl drżą,"

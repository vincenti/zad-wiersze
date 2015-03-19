Feature: Web pages

  Scenario: Moja pieszczotka
    Given I am on homepage
    When I follow "Moja pieszczotka"
    Then I should see "Lecz mowy żywość gdy oczki zapali"

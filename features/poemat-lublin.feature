Feature: Web pages

  Scenario: Poemat o miescie Lublin
    Given I am on homepage
    When I follow "Poemat o miescie Lublin"
    Then I should see "Na wieży furgotał blaszany kogucik"

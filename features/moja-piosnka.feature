Feature: Web pages

  Scenario: Moja Piosnka
    Given I am on homepage
    When I follow "Moja piosnka (II)"
    Then I should see "Do kraju tego, gdzie pierwsze ukłony"

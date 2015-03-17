Feature: Web pages

  Scenario: Paweł i Gaweł
    Given I am on homepage
    When I follow "Paweł i Gaweł"
    Then I should see "Gaweł najdziksze wymyślał swawole."
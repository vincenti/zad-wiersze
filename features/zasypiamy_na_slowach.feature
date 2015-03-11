Feature: Web pages

  Scenario: Zasypiamy na slowach.
    Given I am on "zasypiamy_na_slowach.html"
    Then the response status code should be 200
    Then I should see "Zasypiamy na słowach budzimy się w słowach"
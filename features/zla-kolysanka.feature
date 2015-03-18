Feature: Web pages

  Scenario: Zła Kołysanka
    Given I am on homepage
    When I follow "Zła kołysanka"
    Then I should see "Jesiennych liści, twoich włosów zapach"

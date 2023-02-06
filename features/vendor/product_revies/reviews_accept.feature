@product_reviews
Feature: Vendor can accept reviews of his products
  In order to manage reviews.
  As a Vendor I want to accept reviews

  Background:
    Given the store operates on a single channel in "United States"
    And the store operates in "Poland"
    And the store has customer "Alex Holannd" with email "alex@honnold.pl"
    And there is a "verified" vendor user "kim@jain.pl" registered in country "PL"
    And I am logged in as "kim@jain.pl"
    And There is a product with variant code "Quickdraws-x6" owned by logged in vendor
    And this product has a new review titled "Good" and rated 4 added by customer "alex@honnold.pl"
    And there is a "verified" vendor user "addam@ondra.pl" registered in country "PL"
    And I am logged in as "addam@ondra.pl"


  @ui
  Scenario: Accepting review of a product
    Given There is a product with variant code "Quickdraws-x5" owned by logged in vendor
    And this product has a new review titled "Good" and rated 4 added by customer "alex@honnold.pl"
    And this product has one review from customer "kim@jain.pl"
    When I am on "/en_US/account/vendor/product-reviews"
    Then I should see "2" reviews

    When I select "New" from "criteria[status]"
    And I click "Filter"
    Then I should see "1" reviews

    When I click "Accept" first review
    And I select "Accepted" from "criteria[status]"
    And I click "Filter"
    Then I should see "2" reviews

  @ui
  Scenario: Accepting two reviews of a product
    Given There is a product with variant code "Quickdraws-x5" owned by logged in vendor
    And this product has a new review titled "Good" and rated 4 added by customer "alex@honnold.pl"
    And this product has a new review titled "The best" and rated 5 added by customer "kim@jain.pl"
    When I am on "/en_US/account/vendor/product-reviews"
    Then I should see "2" reviews

    When I select "New" from "criteria[status]"
    And I click "Filter"
    Then I should see "2" reviews

    When I click "Accept" first review
    And I click "Filter"
    Then I should see "1" reviews

    When I click "Accept" first review
    And I select "Accepted" from "criteria[status]"
    And I click "Filter"
    Then I should see "2" reviews



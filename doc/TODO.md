# TODO

Goals

1. Run tests from both script (with progress and result output) and from unit test
2. Run particular test by name
3. Support YAML and JSON
4. Implement extensible way to run customized requests (find how)
    * Either already prepared method or event listeners

All
* Configure Travis and/or SLI to run all tests

ApiTester
* Use ValidatorInterface for Response/Validator
* Convert TestMetadata to object
* Try to use Constraint->root instead of explicit prefixing key
* Improve phpunit test failure output
* Read status_code constraint in the same way like body constraints?
* Implement header constraints
* ResponseValidator
    * add unit test for failure
    * use ArrayValidator in DI way
    * output information about current test

* Run from phpunit
    * Implement assert/constraint
    * Implement test output
* Run from api-tester script
    * Find a way to output progress and test results (console? progress?)
    * Install to vendor/bin using composer
    * output of errors
    * script mode: stopOnFailure
* Request: send headers
* Response: validate response headers
* Find out how to extend request from app (event, callback?)
* Provide better exception handling if yaml file is not properly parsed
* Tests

ArrayValidator
* Support simple string value as synonym for EqualTo constraint
* Implement translations (translator for validator)
* Write more tests, check coverage


Demo project
* More fixtures
    * Packagist
    * Twitter
    * GitHub/Gist
    * Need API with OAuth
    * XML Api?
* Implement php-unit solution for API testing

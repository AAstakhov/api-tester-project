# TODO

Goals

1. Run tests from both script (with progress and result output) and from unit test
2. Run particular test by name
3. Support YAML and JSON
4. Implement extensible way to run customized requests (find how)

All
* Configure Travis and/or SLI to run all tests

ApiTester
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

Validator
* Support simple string value as synonym for EqualTo constraint
* Implement translations (translator for validator)
* Write more tests, check coverage


Demo project
* More fixtures
    * Twitter
    * GitHub/Gist
* Implement php-unit solution for API testing

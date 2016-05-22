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
* R&D for yaml format compatible with RAML (or Swagger)
* Use ValidatorInterface for Response/Validator?
* Try to use Constraint->root instead of explicit prefixing key
* Read status_code constraint in the same way like body constraints?
* ResponseValidator
    * use ArrayValidator in DI way
Runner
    * script: check that input parameter provided
    * Find a way to output progress and test results (console? progress?)
    * Install to vendor/bin using composer
    * script mode: stopOnFailure
* Request: send headers
* Find out how to extend request from app (event, callback?)
* Provide better exception handling if yaml file is not properly parsed

ArrayValidator
* !!! Change algorithm of validation: iterate all available constraints, mark array keys that were not matched
* Fix test for case with wrong constraint syntax
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

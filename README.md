# codeception-testingbot
[Codeception](http://codeception.com) Integration with TestingBot.

<img src="http://codeception.com/images/logo.svg" width=130 height=130 />


## Setup
* Clone the repo
* Install dependencies `composer install`
* Update `tests/acceptance.suite.yml` file with your [TestingBot Key and Secret](https://testingbot.com/members/user/edit)

## Running your tests
* To run a single test, run `composer single`
* To run parallel tests, run `composer parallel`
* To run local tests, run `composer local`

## Notes
* You can view your test results on the [TestingBot dashboard](https://testingbot.com/members)
* To test on a different set of browsers, check out our [platform configurator](https://testingbot.com/support/getting-started/browsers.html)
* You can export the environment variables for the Key and Secret of your TestingBot account
  
  ```
  export TB_KEY=<testingbot-key> &&
  export TB_SECRET=<testingbot-secret>
  ```
  
## Additional Resources
* [Documentation for writing Automated test scripts in PHP](https://testingbot.com/support/getting-started/php.html)
* [Customizing your tests on TestingBot](https://testingbot.com/support/other/test-options)
* [Browsers & mobile devices for Selenium testing on TestingBot](https://testingbot.com/support/getting-started/browsers.html)
* [Using REST API to access information about your tests via the command-line interface](https://testingbot.com/support/api)

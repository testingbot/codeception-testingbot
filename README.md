# codeception-testingbot
[Codeception](http://codeception.com) Example with TestingBot.

This example includes `testingbot/codeception-extension`, a CodeCeption Extension, which posts test
meta-data back to TestingBot. This way, you can see test names, success/fail messages etc in
the TestingBot dashboard overview.

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
* You can also export the environment variables for the Key and Secret of your TestingBot account.
  
  ```
  export TB_KEY=<testingbot-key> &&
  export TB_SECRET=<testingbot-secret>
  ```

## Extension
By default, the [TestingBot CodeCeption extension](https://github.com/testingbot/codeception-extension) is enabled in this example.
You can see this in the `codeception.yml` file (category extensions)
  
## Additional Resources
* [Documentation for writing Automated test scripts in PHP](https://testingbot.com/support/getting-started/php.html)
* [Customizing your tests on TestingBot](https://testingbot.com/support/other/test-options)
* [Browsers & mobile devices for Selenium testing on TestingBot](https://testingbot.com/support/getting-started/browsers.html)
* [Using REST API to access information about your tests via the command-line interface](https://testingbot.com/support/api)

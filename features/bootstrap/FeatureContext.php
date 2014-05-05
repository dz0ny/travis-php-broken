<?php


    use Behat\Behat\Event\ScenarioEvent;
    use Behat\Behat\Event\SuiteEvent;
    use Behat\Mink\Exception\ElementNotFoundException;
    use Behat\MinkExtension\Context\MinkContext;


    /**
     * Features context.
     */
    class FeatureContext extends MinkContext
    {

        /**
         * @Given /^save screenshot with name "([^"]*)"$/
         */
        public function saveScreenshotWith($name)
        {
            $path = getcwd() . '/screenshots/';
            $this->saveScreenshot($name, $path);
        }

    }

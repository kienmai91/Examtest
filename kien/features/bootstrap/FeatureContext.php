<?php


namespace Behat\MinkExtension\Context;

use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Context\TranslatableContext;
/**
 * Defines application features from the specific context.
 */
class MinkContext extends RawMinkContext implements TranslatableContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Then I should see :arg1
     */
    public function iShouldSee($arg1)
    {
      $this->assertSession()->pageTextContains($this->fixStepArgument($arg1));
    }
}

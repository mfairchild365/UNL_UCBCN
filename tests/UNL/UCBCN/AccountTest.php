<?php
// Call UNL_UCBCN_AccountTest::main() if this source file is executed directly.
if (!defined("PHPUnit_MAIN_METHOD")) {
    define("PHPUnit_MAIN_METHOD", "UNL_UCBCN_AccountTest::main");
}

require_once "PHPUnit/Framework/TestCase.php";
require_once "PHPUnit/Framework/TestSuite.php";

require_once 'UNL/UCBCN/Account.php';

/**
 * Test class for UNL_UCBCN_Account.
 * Generated by PHPUnit_Util_Skeleton on 2006-11-17 at 11:44:50.
 */
class UNL_UCBCN_AccountTest extends PHPUnit_Framework_TestCase {
    /**
     * Runs the test methods of this class.
     *
     * @access public
     * @static
     */
    public static function main() {
        require_once "PHPUnit/TextUI/TestRunner.php";

        $suite  = new PHPUnit_Framework_TestSuite("UNL_UCBCN_AccountTest");
        $result = PHPUnit_TextUI_TestRunner::run($suite);
    }

    /**
     * Sets up the fixture, for example, open a network connection.
     * This method is called before a test is executed.
     *
     * @access protected
     */
    protected function setUp() {
    }

    /**
     * Tears down the fixture, for example, close a network connection.
     * This method is called after a test is executed.
     *
     * @access protected
     */
    protected function tearDown() {
    }

    /**
     * @todo Implement testStaticGet().
     */
    public function testStaticGet() {
        // Remove the following line when you implement this test.
        $this->markTestIncomplete(
          "This test has not been implemented yet."
        );
    }

    /**
     * @todo Implement testPreGenerateForm().
     */
    public function testPreGenerateForm() {
        // Remove the following line when you implement this test.
        $this->markTestIncomplete(
          "This test has not been implemented yet."
        );
    }

    /**
     * @todo Implement testAddCalendar().
     */
    public function testAddCalendar() {
        // Remove the following line when you implement this test.
        $this->markTestIncomplete(
          "This test has not been implemented yet."
        );
    }
}

// Call UNL_UCBCN_AccountTest::main() if this source file is executed directly.
if (PHPUnit_MAIN_METHOD == "UNL_UCBCN_AccountTest::main") {
    UNL_UCBCN_AccountTest::main();
}
?>

<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Validation;

use WBW\Library\Core\Tests\Fixtures\Validation\Rule\TestValidationRule;
use WBW\Library\Core\Validation\API\ValidationStatusInterface;
use WBW\Library\Core\Validation\DefaultValidator;

/**
 * Default validator test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Validation
 */
class DefaultValidatorTest extends AbstractValidationTest {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DefaultValidator($this->ruleSet);

        $this->assertSame($this->ruleSet, $obj->getRuleSet());
    }

    /**
     * Tests the validate() method.
     *
     * @return void
     */
    public function testValidate() {

        $obj = new DefaultValidator($this->ruleSet);

        $res = $obj->validate(new TestValidationRule());
        $this->assertCount(1, $res);
        $this->assertInstanceOf(ValidationStatusInterface::class, $res[0]);
        $this->assertEquals(500, $res[0]->getCode());
        $this->assertEquals("The argument is not an int", $res[0]->getMessage());
    }

}

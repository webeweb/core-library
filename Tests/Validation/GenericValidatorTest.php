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
use WBW\Library\Core\Validation\GenericValidator;

/**
 * Generic validator test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Validation
 * @final
 */
final class GenericValidatorTest extends AbstractValidationTest {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new GenericValidator($this->ruleSet);

        $this->assertSame($this->ruleSet, $obj->getRuleSet());
    }

    /**
     * Tests the isValid() method.
     *
     * @return void
     */
    public function testIsValid() {

        $obj = new GenericValidator($this->ruleSet);

        $res = $obj->isValid(new TestValidationRule());
        $this->assertCount(1, $res);
        $this->assertInstanceOf(ValidationStatusInterface::class, $res[0]);
        $this->assertEquals(500, $res[0]->getCode());
        $this->assertEquals("The argument is not an int", $res[0]->getMessage());
    }

}

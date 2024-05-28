<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Validator;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Validator\TestAbstractRuleSet;
use WBW\Library\Common\Validator\DefaultValidator;
use WBW\Library\Common\Validator\ValidatorInterface;

/**
 * Default validator test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Validator
 */
class DefaultValidatorTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        // Set a Rule set mock.
        $ruleSet = new TestAbstractRuleSet();

        $obj = new DefaultValidator($ruleSet);

        $this->assertInstanceOf(ValidatorInterface::class, $obj);

        $this->assertSame($ruleSet, $obj->getRuleSet());
    }
}

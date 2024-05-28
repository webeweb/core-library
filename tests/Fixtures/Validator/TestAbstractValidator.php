<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2024 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Fixtures\Validator;

use WBW\Library\Common\Validator\AbstractValidator;
use WBW\Library\Common\Validator\RuleSetInterface;

/**
 * Test abstract validator.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Fixtures\Validator
 */
class TestAbstractValidator extends AbstractValidator {

    /**
     * Constructor.
     *
     * @param RuleSetInterface $ruleSet The rule set.
     */
    public function __construct(RuleSetInterface $ruleSet) {
        parent::__construct($ruleSet);
    }
}

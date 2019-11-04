<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Validator;

use WBW\Library\Core\Validator\API\ValidationRuleSetInterface;

/**
 * Default validator.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Validator
 */
class DefaultValidator extends AbstractValidator {

    /**
     * Constructor.
     *
     * @param ValidationRuleSetInterface $ruleSet The rule set.
     */
    public function __construct(ValidationRuleSetInterface $ruleSet) {
        parent::__construct($ruleSet);
    }
}

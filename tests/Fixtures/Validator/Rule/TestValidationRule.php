<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Fixtures\Validator\Rule;

use WBW\Library\Core\Validator\Rule\AbstractValidationRule;
use WBW\Library\Core\Validator\Status\DefaultValidationStatus;

/**
 * Test validation rule.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Fixtures\Validator\Rule
 */
class TestValidationRule extends AbstractValidationRule {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct("Test validation rule");
    }

    /**
     * {@inheritdoc}
     */
    public function validate($object) {
        $status = new DefaultValidationStatus(200);
        if (false === is_int($object)) {
            $status->setCode(500);
            $status->setMessage("The argument is not an int");
        }
        return $status;
    }
}

<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Validation\Tests\Fixtures\Rule;

use WBW\Library\Validation\API\StatusInterface;
use WBW\Library\Validation\Rule\AbstractRule;
use WBW\Library\Validation\Status\DefaultStatus;

/**
 * Test rule.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Validation\Tests\Fixtures\Rule
 */
class TestRule extends AbstractRule {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct("Test rule");
    }

    /**
     * {@inheritDoc}
     */
    public function validate($object): StatusInterface {

        $status = new DefaultStatus(200);
        $status->setRuleName($this->getName());

        if (false === is_int($object)) {
            $status->setCode(500);
            $status->setMessage("The argument is not an int");
        }

        return $status;
    }
}

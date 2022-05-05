<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Validator\Tests\Fixtures\Rule;

use WBW\Library\Validator\Api\RuleInterface;
use WBW\Library\Validator\Api\StatusInterface;
use WBW\Library\Validator\Rule\AbstractRule;
use WBW\Library\Validator\Status\DefaultStatus;

/**
 * Test rule.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Validator\Tests\Fixtures\Rule
 */
class TestRule extends AbstractRule {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct("Test rule");
    }

    /**
     * {@inheritdoc}
     */
    public function setName(?string $name): RuleInterface {
        return parent::setName($name);
    }

    /**
     * {@inheritdoc}
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

<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Fixtures\Validator;

use WBW\Library\Common\Validator\AbstractRule;
use WBW\Library\Common\Validator\DefaultStatus;
use WBW\Library\Common\Validator\RuleInterface;
use WBW\Library\Common\Validator\StatusInterface;

/**
 * Test abstract rule.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Fixtures\Validator
 */
class TestAbstractRule extends AbstractRule {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct("test");
    }

    /**
     * Set the name as null.
     *
     * @return RuleInterface Returns this rule.
     */
    public function setNameAsNull(): RuleInterface {
        return parent::setName(null);
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

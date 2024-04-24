<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2024 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Fixtures\Validator;

use WBW\Library\Common\Validator\AbstractRuleSet;

/**
 * Test abstract rule set.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Fixtures\Validator
 */
class TestAbstractRuleSet extends AbstractRuleSet {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }
}

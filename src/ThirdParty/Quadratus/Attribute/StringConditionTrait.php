<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Condition trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringConditionTrait {

    /**
     * Condition.
     *
     * @var string
     */
    private $condition;

    /**
     * Get the condition.
     *
     * @return string Returns the condition.
     */
    public function getCondition() {
        return $this->condition;
    }

    /**
     * Set the condition.
     *
     * @param string $condition The condition.
     */
    public function setCondition($condition) {
        $this->condition = $condition;
        return $this;
    }
}

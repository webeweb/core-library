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
 * Condition spec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringConditionSpecTrait {

    /**
     * Condition spec.
     *
     * @var string
     */
    private $conditionSpec;

    /**
     * Get the condition spec.
     *
     * @return string Returns the condition spec.
     */
    public function getConditionSpec() {
        return $this->conditionSpec;
    }

    /**
     * Set the condition spec.
     *
     * @param string $conditionSpec The condition spec.
     */
    public function setConditionSpec($conditionSpec) {
        $this->conditionSpec = $conditionSpec;
        return $this;
    }
}

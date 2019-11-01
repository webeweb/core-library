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
 * Consequence trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringConsequenceTrait {

    /**
     * Consequence.
     *
     * @var string
     */
    private $consequence;

    /**
     * Get the consequence.
     *
     * @return string Returns the consequence.
     */
    public function getConsequence() {
        return $this->consequence;
    }

    /**
     * Set the consequence.
     *
     * @param string $consequence The consequence.
     */
    public function setConsequence($consequence) {
        $this->consequence = $consequence;
        return $this;
    }
}

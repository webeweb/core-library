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
 * Risque at trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRisqueAtTrait {

    /**
     * Risque at.
     *
     * @var string
     */
    private $risqueAt;

    /**
     * Get the risque at.
     *
     * @return string Returns the risque at.
     */
    public function getRisqueAt() {
        return $this->risqueAt;
    }

    /**
     * Set the risque at.
     *
     * @param string $risqueAt The risque at.
     */
    public function setRisqueAt($risqueAt) {
        $this->risqueAt = $risqueAt;
        return $this;
    }
}

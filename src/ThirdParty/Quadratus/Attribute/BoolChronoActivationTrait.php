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
 * Chrono activation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolChronoActivationTrait {

    /**
     * Chrono activation.
     *
     * @var bool
     */
    private $chronoActivation;

    /**
     * Get the chrono activation.
     *
     * @return bool Returns the chrono activation.
     */
    public function getChronoActivation() {
        return $this->chronoActivation;
    }

    /**
     * Set the chrono activation.
     *
     * @param bool $chronoActivation The chrono activation.
     */
    public function setChronoActivation($chronoActivation) {
        $this->chronoActivation = $chronoActivation;
        return $this;
    }
}

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
 * Regroup virement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRegroupVirementTrait {

    /**
     * Regroup virement.
     *
     * @var string
     */
    private $regroupVirement;

    /**
     * Get the regroup virement.
     *
     * @return string Returns the regroup virement.
     */
    public function getRegroupVirement() {
        return $this->regroupVirement;
    }

    /**
     * Set the regroup virement.
     *
     * @param string $regroupVirement The regroup virement.
     */
    public function setRegroupVirement($regroupVirement) {
        $this->regroupVirement = $regroupVirement;
        return $this;
    }
}

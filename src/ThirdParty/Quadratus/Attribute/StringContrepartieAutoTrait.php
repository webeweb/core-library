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
 * Contrepartie auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringContrepartieAutoTrait {

    /**
     * Contrepartie auto.
     *
     * @var string
     */
    private $contrepartieAuto;

    /**
     * Get the contrepartie auto.
     *
     * @return string Returns the contrepartie auto.
     */
    public function getContrepartieAuto() {
        return $this->contrepartieAuto;
    }

    /**
     * Set the contrepartie auto.
     *
     * @param string $contrepartieAuto The contrepartie auto.
     */
    public function setContrepartieAuto($contrepartieAuto) {
        $this->contrepartieAuto = $contrepartieAuto;
        return $this;
    }
}

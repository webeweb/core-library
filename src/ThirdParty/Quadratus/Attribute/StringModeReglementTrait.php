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
 * Mode reglement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModeReglementTrait {

    /**
     * Mode reglement.
     *
     * @var string
     */
    private $modeReglement;

    /**
     * Get the mode reglement.
     *
     * @return string Returns the mode reglement.
     */
    public function getModeReglement() {
        return $this->modeReglement;
    }

    /**
     * Set the mode reglement.
     *
     * @param string $modeReglement The mode reglement.
     */
    public function setModeReglement($modeReglement) {
        $this->modeReglement = $modeReglement;
        return $this;
    }
}

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
 * Salarie independant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSalarieIndependantTrait {

    /**
     * Salarie independant.
     *
     * @var string
     */
    private $salarieIndependant;

    /**
     * Get the salarie independant.
     *
     * @return string Returns the salarie independant.
     */
    public function getSalarieIndependant() {
        return $this->salarieIndependant;
    }

    /**
     * Set the salarie independant.
     *
     * @param string $salarieIndependant The salarie independant.
     */
    public function setSalarieIndependant($salarieIndependant) {
        $this->salarieIndependant = $salarieIndependant;
        return $this;
    }
}

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
 * Exclure qgc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolExclureQgcTrait {

    /**
     * Exclure qgc.
     *
     * @var bool
     */
    private $exclureQgc;

    /**
     * Get the exclure qgc.
     *
     * @return bool Returns the exclure qgc.
     */
    public function getExclureQgc() {
        return $this->exclureQgc;
    }

    /**
     * Set the exclure qgc.
     *
     * @param bool $exclureQgc The exclure qgc.
     */
    public function setExclureQgc($exclureQgc) {
        $this->exclureQgc = $exclureQgc;
        return $this;
    }
}

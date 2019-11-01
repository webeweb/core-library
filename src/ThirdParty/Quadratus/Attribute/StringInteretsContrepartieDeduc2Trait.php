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
 * Interets contrepartie deduc2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringInteretsContrepartieDeduc2Trait {

    /**
     * Interets contrepartie deduc2.
     *
     * @var string
     */
    private $interetsContrepartieDeduc2;

    /**
     * Get the interets contrepartie deduc2.
     *
     * @return string Returns the interets contrepartie deduc2.
     */
    public function getInteretsContrepartieDeduc2() {
        return $this->interetsContrepartieDeduc2;
    }

    /**
     * Set the interets contrepartie deduc2.
     *
     * @param string $interetsContrepartieDeduc2 The interets contrepartie deduc2.
     */
    public function setInteretsContrepartieDeduc2($interetsContrepartieDeduc2) {
        $this->interetsContrepartieDeduc2 = $interetsContrepartieDeduc2;
        return $this;
    }
}

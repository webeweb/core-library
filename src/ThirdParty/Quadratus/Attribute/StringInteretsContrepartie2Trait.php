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
 * Interets contrepartie2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringInteretsContrepartie2Trait {

    /**
     * Interets contrepartie2.
     *
     * @var string
     */
    private $interetsContrepartie2;

    /**
     * Get the interets contrepartie2.
     *
     * @return string Returns the interets contrepartie2.
     */
    public function getInteretsContrepartie2() {
        return $this->interetsContrepartie2;
    }

    /**
     * Set the interets contrepartie2.
     *
     * @param string $interetsContrepartie2 The interets contrepartie2.
     */
    public function setInteretsContrepartie2($interetsContrepartie2) {
        $this->interetsContrepartie2 = $interetsContrepartie2;
        return $this;
    }
}

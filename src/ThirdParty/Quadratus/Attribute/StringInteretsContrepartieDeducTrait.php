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
 * Interets contrepartie deduc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringInteretsContrepartieDeducTrait {

    /**
     * Interets contrepartie deduc.
     *
     * @var string
     */
    private $interetsContrepartieDeduc;

    /**
     * Get the interets contrepartie deduc.
     *
     * @return string Returns the interets contrepartie deduc.
     */
    public function getInteretsContrepartieDeduc() {
        return $this->interetsContrepartieDeduc;
    }

    /**
     * Set the interets contrepartie deduc.
     *
     * @param string $interetsContrepartieDeduc The interets contrepartie deduc.
     */
    public function setInteretsContrepartieDeduc($interetsContrepartieDeduc) {
        $this->interetsContrepartieDeduc = $interetsContrepartieDeduc;
        return $this;
    }
}

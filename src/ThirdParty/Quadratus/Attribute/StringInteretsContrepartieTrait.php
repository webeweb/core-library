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
 * Interets contrepartie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringInteretsContrepartieTrait {

    /**
     * Interets contrepartie.
     *
     * @var string
     */
    private $interetsContrepartie;

    /**
     * Get the interets contrepartie.
     *
     * @return string Returns the interets contrepartie.
     */
    public function getInteretsContrepartie() {
        return $this->interetsContrepartie;
    }

    /**
     * Set the interets contrepartie.
     *
     * @param string $interetsContrepartie The interets contrepartie.
     */
    public function setInteretsContrepartie($interetsContrepartie) {
        $this->interetsContrepartie = $interetsContrepartie;
        return $this;
    }
}

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
 * Lg carte appel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLgCarteAppelTrait {

    /**
     * Lg carte appel.
     *
     * @var string
     */
    private $lgCarteAppel;

    /**
     * Get the lg carte appel.
     *
     * @return string Returns the lg carte appel.
     */
    public function getLgCarteAppel() {
        return $this->lgCarteAppel;
    }

    /**
     * Set the lg carte appel.
     *
     * @param string $lgCarteAppel The lg carte appel.
     */
    public function setLgCarteAppel($lgCarteAppel) {
        $this->lgCarteAppel = $lgCarteAppel;
        return $this;
    }
}

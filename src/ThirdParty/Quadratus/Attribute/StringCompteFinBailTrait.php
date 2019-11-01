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
 * Compte fin bail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteFinBailTrait {

    /**
     * Compte fin bail.
     *
     * @var string
     */
    private $compteFinBail;

    /**
     * Get the compte fin bail.
     *
     * @return string Returns the compte fin bail.
     */
    public function getCompteFinBail() {
        return $this->compteFinBail;
    }

    /**
     * Set the compte fin bail.
     *
     * @param string $compteFinBail The compte fin bail.
     */
    public function setCompteFinBail($compteFinBail) {
        $this->compteFinBail = $compteFinBail;
        return $this;
    }
}

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
 * Compte debut bail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteDebutBailTrait {

    /**
     * Compte debut bail.
     *
     * @var string
     */
    private $compteDebutBail;

    /**
     * Get the compte debut bail.
     *
     * @return string Returns the compte debut bail.
     */
    public function getCompteDebutBail() {
        return $this->compteDebutBail;
    }

    /**
     * Set the compte debut bail.
     *
     * @param string $compteDebutBail The compte debut bail.
     */
    public function setCompteDebutBail($compteDebutBail) {
        $this->compteDebutBail = $compteDebutBail;
        return $this;
    }
}

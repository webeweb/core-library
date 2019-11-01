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
 * Donnees appel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDonneesAppelTrait {

    /**
     * Donnees appel.
     *
     * @var string
     */
    private $donneesAppel;

    /**
     * Get the donnees appel.
     *
     * @return string Returns the donnees appel.
     */
    public function getDonneesAppel() {
        return $this->donneesAppel;
    }

    /**
     * Set the donnees appel.
     *
     * @param string $donneesAppel The donnees appel.
     */
    public function setDonneesAppel($donneesAppel) {
        $this->donneesAppel = $donneesAppel;
        return $this;
    }
}

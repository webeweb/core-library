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
 * Doss compta trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDossComptaTrait {

    /**
     * Doss compta.
     *
     * @var string
     */
    private $dossCompta;

    /**
     * Get the doss compta.
     *
     * @return string Returns the doss compta.
     */
    public function getDossCompta() {
        return $this->dossCompta;
    }

    /**
     * Set the doss compta.
     *
     * @param string $dossCompta The doss compta.
     */
    public function setDossCompta($dossCompta) {
        $this->dossCompta = $dossCompta;
        return $this;
    }
}

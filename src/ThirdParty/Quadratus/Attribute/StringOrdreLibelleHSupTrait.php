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
 * Ordre libelle h sup trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringOrdreLibelleHSupTrait {

    /**
     * Ordre libelle h sup.
     *
     * @var string
     */
    private $ordreLibelleHSup;

    /**
     * Get the ordre libelle h sup.
     *
     * @return string Returns the ordre libelle h sup.
     */
    public function getOrdreLibelleHSup() {
        return $this->ordreLibelleHSup;
    }

    /**
     * Set the ordre libelle h sup.
     *
     * @param string $ordreLibelleHSup The ordre libelle h sup.
     */
    public function setOrdreLibelleHSup($ordreLibelleHSup) {
        $this->ordreLibelleHSup = $ordreLibelleHSup;
        return $this;
    }
}

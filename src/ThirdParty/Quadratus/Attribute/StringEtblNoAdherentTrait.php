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
 * Etbl no adherent trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtblNoAdherentTrait {

    /**
     * Etbl no adherent.
     *
     * @var string
     */
    private $etblNoAdherent;

    /**
     * Get the etbl no adherent.
     *
     * @return string Returns the etbl no adherent.
     */
    public function getEtblNoAdherent() {
        return $this->etblNoAdherent;
    }

    /**
     * Set the etbl no adherent.
     *
     * @param string $etblNoAdherent The etbl no adherent.
     */
    public function setEtblNoAdherent($etblNoAdherent) {
        $this->etblNoAdherent = $etblNoAdherent;
        return $this;
    }
}

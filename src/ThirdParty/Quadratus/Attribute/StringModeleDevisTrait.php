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
 * Modele devis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModeleDevisTrait {

    /**
     * Modele devis.
     *
     * @var string
     */
    private $modeleDevis;

    /**
     * Get the modele devis.
     *
     * @return string Returns the modele devis.
     */
    public function getModeleDevis() {
        return $this->modeleDevis;
    }

    /**
     * Set the modele devis.
     *
     * @param string $modeleDevis The modele devis.
     */
    public function setModeleDevis($modeleDevis) {
        $this->modeleDevis = $modeleDevis;
        return $this;
    }
}

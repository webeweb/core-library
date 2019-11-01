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
 * Mode paiement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModePaiementTrait {

    /**
     * Mode paiement.
     *
     * @var string
     */
    private $modePaiement;

    /**
     * Get the mode paiement.
     *
     * @return string Returns the mode paiement.
     */
    public function getModePaiement() {
        return $this->modePaiement;
    }

    /**
     * Set the mode paiement.
     *
     * @param string $modePaiement The mode paiement.
     */
    public function setModePaiement($modePaiement) {
        $this->modePaiement = $modePaiement;
        return $this;
    }
}

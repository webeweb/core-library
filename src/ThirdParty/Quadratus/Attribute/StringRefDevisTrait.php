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
 * Ref devis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRefDevisTrait {

    /**
     * Ref devis.
     *
     * @var string
     */
    private $refDevis;

    /**
     * Get the ref devis.
     *
     * @return string Returns the ref devis.
     */
    public function getRefDevis() {
        return $this->refDevis;
    }

    /**
     * Set the ref devis.
     *
     * @param string $refDevis The ref devis.
     */
    public function setRefDevis($refDevis) {
        $this->refDevis = $refDevis;
        return $this;
    }
}

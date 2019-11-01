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
 * Prescripteur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPrescripteurTrait {

    /**
     * Prescripteur.
     *
     * @var string
     */
    private $prescripteur;

    /**
     * Get the prescripteur.
     *
     * @return string Returns the prescripteur.
     */
    public function getPrescripteur() {
        return $this->prescripteur;
    }

    /**
     * Set the prescripteur.
     *
     * @param string $prescripteur The prescripteur.
     */
    public function setPrescripteur($prescripteur) {
        $this->prescripteur = $prescripteur;
        return $this;
    }
}

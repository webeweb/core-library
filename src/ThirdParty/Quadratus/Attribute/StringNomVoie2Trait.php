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
 * Nom voie2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomVoie2Trait {

    /**
     * Nom voie2.
     *
     * @var string
     */
    private $nomVoie2;

    /**
     * Get the nom voie2.
     *
     * @return string Returns the nom voie2.
     */
    public function getNomVoie2() {
        return $this->nomVoie2;
    }

    /**
     * Set the nom voie2.
     *
     * @param string $nomVoie2 The nom voie2.
     */
    public function setNomVoie2($nomVoie2) {
        $this->nomVoie2 = $nomVoie2;
        return $this;
    }
}

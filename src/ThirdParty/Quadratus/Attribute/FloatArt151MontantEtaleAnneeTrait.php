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
 * Art151 montant etale annee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatArt151MontantEtaleAnneeTrait {

    /**
     * Art151 montant etale annee.
     *
     * @var float
     */
    private $art151MontantEtaleAnnee;

    /**
     * Get the art151 montant etale annee.
     *
     * @return float Returns the art151 montant etale annee.
     */
    public function getArt151MontantEtaleAnnee() {
        return $this->art151MontantEtaleAnnee;
    }

    /**
     * Set the art151 montant etale annee.
     *
     * @param float $art151MontantEtaleAnnee The art151 montant etale annee.
     */
    public function setArt151MontantEtaleAnnee($art151MontantEtaleAnnee) {
        $this->art151MontantEtaleAnnee = $art151MontantEtaleAnnee;
        return $this;
    }
}

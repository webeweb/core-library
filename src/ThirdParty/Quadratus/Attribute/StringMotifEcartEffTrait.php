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
 * Motif ecart eff trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMotifEcartEffTrait {

    /**
     * Motif ecart eff.
     *
     * @var string
     */
    private $motifEcartEff;

    /**
     * Get the motif ecart eff.
     *
     * @return string Returns the motif ecart eff.
     */
    public function getMotifEcartEff() {
        return $this->motifEcartEff;
    }

    /**
     * Set the motif ecart eff.
     *
     * @param string $motifEcartEff The motif ecart eff.
     */
    public function setMotifEcartEff($motifEcartEff) {
        $this->motifEcartEff = $motifEcartEff;
        return $this;
    }
}

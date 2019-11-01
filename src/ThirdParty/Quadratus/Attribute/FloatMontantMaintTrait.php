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
 * Montant maint trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMontantMaintTrait {

    /**
     * Montant maint.
     *
     * @var float
     */
    private $montantMaint;

    /**
     * Get the montant maint.
     *
     * @return float Returns the montant maint.
     */
    public function getMontantMaint() {
        return $this->montantMaint;
    }

    /**
     * Set the montant maint.
     *
     * @param float $montantMaint The montant maint.
     */
    public function setMontantMaint($montantMaint) {
        $this->montantMaint = $montantMaint;
        return $this;
    }
}

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
 * Pas saisie des temps auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPasSaisieDesTempsAutoTrait {

    /**
     * Pas saisie des temps auto.
     *
     * @var bool
     */
    private $pasSaisieDesTempsAuto;

    /**
     * Get the pas saisie des temps auto.
     *
     * @return bool Returns the pas saisie des temps auto.
     */
    public function getPasSaisieDesTempsAuto() {
        return $this->pasSaisieDesTempsAuto;
    }

    /**
     * Set the pas saisie des temps auto.
     *
     * @param bool $pasSaisieDesTempsAuto The pas saisie des temps auto.
     */
    public function setPasSaisieDesTempsAuto($pasSaisieDesTempsAuto) {
        $this->pasSaisieDesTempsAuto = $pasSaisieDesTempsAuto;
        return $this;
    }
}

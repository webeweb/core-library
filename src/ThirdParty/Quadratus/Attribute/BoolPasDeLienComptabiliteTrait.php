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
 * Pas de lien comptabilite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPasDeLienComptabiliteTrait {

    /**
     * Pas de lien comptabilite.
     *
     * @var bool
     */
    private $pasDeLienComptabilite;

    /**
     * Get the pas de lien comptabilite.
     *
     * @return bool Returns the pas de lien comptabilite.
     */
    public function getPasDeLienComptabilite() {
        return $this->pasDeLienComptabilite;
    }

    /**
     * Set the pas de lien comptabilite.
     *
     * @param bool $pasDeLienComptabilite The pas de lien comptabilite.
     */
    public function setPasDeLienComptabilite($pasDeLienComptabilite) {
        $this->pasDeLienComptabilite = $pasDeLienComptabilite;
        return $this;
    }
}

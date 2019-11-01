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
 * Demande ar trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDemandeArTrait {

    /**
     * Demande ar.
     *
     * @var bool
     */
    private $demandeAr;

    /**
     * Get the demande ar.
     *
     * @return bool Returns the demande ar.
     */
    public function getDemandeAr() {
        return $this->demandeAr;
    }

    /**
     * Set the demande ar.
     *
     * @param bool $demandeAr The demande ar.
     */
    public function setDemandeAr($demandeAr) {
        $this->demandeAr = $demandeAr;
        return $this;
    }
}

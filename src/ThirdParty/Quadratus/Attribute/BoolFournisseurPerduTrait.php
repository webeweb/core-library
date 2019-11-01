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
 * Fournisseur perdu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFournisseurPerduTrait {

    /**
     * Fournisseur perdu.
     *
     * @var bool
     */
    private $fournisseurPerdu;

    /**
     * Get the fournisseur perdu.
     *
     * @return bool Returns the fournisseur perdu.
     */
    public function getFournisseurPerdu() {
        return $this->fournisseurPerdu;
    }

    /**
     * Set the fournisseur perdu.
     *
     * @param bool $fournisseurPerdu The fournisseur perdu.
     */
    public function setFournisseurPerdu($fournisseurPerdu) {
        $this->fournisseurPerdu = $fournisseurPerdu;
        return $this;
    }
}

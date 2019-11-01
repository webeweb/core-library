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
 * Delai tarif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntDelaiTarifTrait {

    /**
     * Delai tarif.
     *
     * @var int
     */
    private $delaiTarif;

    /**
     * Get the delai tarif.
     *
     * @return int Returns the delai tarif.
     */
    public function getDelaiTarif() {
        return $this->delaiTarif;
    }

    /**
     * Set the delai tarif.
     *
     * @param int $delaiTarif The delai tarif.
     */
    public function setDelaiTarif($delaiTarif) {
        $this->delaiTarif = $delaiTarif;
        return $this;
    }
}

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
 * Ean plateforme trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEanPlateformeTrait {

    /**
     * Ean plateforme.
     *
     * @var string
     */
    private $eanPlateforme;

    /**
     * Get the ean plateforme.
     *
     * @return string Returns the ean plateforme.
     */
    public function getEanPlateforme() {
        return $this->eanPlateforme;
    }

    /**
     * Set the ean plateforme.
     *
     * @param string $eanPlateforme The ean plateforme.
     */
    public function setEanPlateforme($eanPlateforme) {
        $this->eanPlateforme = $eanPlateforme;
        return $this;
    }
}

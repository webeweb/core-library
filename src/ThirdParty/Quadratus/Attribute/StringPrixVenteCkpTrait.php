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
 * Prix vente ckp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPrixVenteCkpTrait {

    /**
     * Prix vente ckp.
     *
     * @var string
     */
    private $prixVenteCkp;

    /**
     * Get the prix vente ckp.
     *
     * @return string Returns the prix vente ckp.
     */
    public function getPrixVenteCkp() {
        return $this->prixVenteCkp;
    }

    /**
     * Set the prix vente ckp.
     *
     * @param string $prixVenteCkp The prix vente ckp.
     */
    public function setPrixVenteCkp($prixVenteCkp) {
        $this->prixVenteCkp = $prixVenteCkp;
        return $this;
    }
}

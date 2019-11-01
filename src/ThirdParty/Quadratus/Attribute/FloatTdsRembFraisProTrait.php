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
 * Tds remb frais pro trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTdsRembFraisProTrait {

    /**
     * Tds remb frais pro.
     *
     * @var float
     */
    private $tdsRembFraisPro;

    /**
     * Get the tds remb frais pro.
     *
     * @return float Returns the tds remb frais pro.
     */
    public function getTdsRembFraisPro() {
        return $this->tdsRembFraisPro;
    }

    /**
     * Set the tds remb frais pro.
     *
     * @param float $tdsRembFraisPro The tds remb frais pro.
     */
    public function setTdsRembFraisPro($tdsRembFraisPro) {
        $this->tdsRembFraisPro = $tdsRembFraisPro;
        return $this;
    }
}

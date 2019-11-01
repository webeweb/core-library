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
 * Tds abatt frais pro trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTdsAbattFraisProTrait {

    /**
     * Tds abatt frais pro.
     *
     * @var float
     */
    private $tdsAbattFraisPro;

    /**
     * Get the tds abatt frais pro.
     *
     * @return float Returns the tds abatt frais pro.
     */
    public function getTdsAbattFraisPro() {
        return $this->tdsAbattFraisPro;
    }

    /**
     * Set the tds abatt frais pro.
     *
     * @param float $tdsAbattFraisPro The tds abatt frais pro.
     */
    public function setTdsAbattFraisPro($tdsAbattFraisPro) {
        $this->tdsAbattFraisPro = $tdsAbattFraisPro;
        return $this;
    }
}

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
 * Tva parametrage ok trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTvaParametrageOkTrait {

    /**
     * Tva parametrage ok.
     *
     * @var bool
     */
    private $tvaParametrageOk;

    /**
     * Get the tva parametrage ok.
     *
     * @return bool Returns the tva parametrage ok.
     */
    public function getTvaParametrageOk() {
        return $this->tvaParametrageOk;
    }

    /**
     * Set the tva parametrage ok.
     *
     * @param bool $tvaParametrageOk The tva parametrage ok.
     */
    public function setTvaParametrageOk($tvaParametrageOk) {
        $this->tvaParametrageOk = $tvaParametrageOk;
        return $this;
    }
}

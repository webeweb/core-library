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
 * Tva emetteur is cab trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTvaEmetteurIsCabTrait {

    /**
     * Tva emetteur is cab.
     *
     * @var bool
     */
    private $tvaEmetteurIsCab;

    /**
     * Get the tva emetteur is cab.
     *
     * @return bool Returns the tva emetteur is cab.
     */
    public function getTvaEmetteurIsCab() {
        return $this->tvaEmetteurIsCab;
    }

    /**
     * Set the tva emetteur is cab.
     *
     * @param bool $tvaEmetteurIsCab The tva emetteur is cab.
     */
    public function setTvaEmetteurIsCab($tvaEmetteurIsCab) {
        $this->tvaEmetteurIsCab = $tvaEmetteurIsCab;
        return $this;
    }
}

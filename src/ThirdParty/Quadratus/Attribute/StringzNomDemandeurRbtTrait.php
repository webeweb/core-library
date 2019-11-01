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
 * z nom demandeur rbt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringzNomDemandeurRbtTrait {

    /**
     * z nom demandeur rbt.
     *
     * @var string
     */
    private $zNomDemandeurRbt;

    /**
     * Get the z nom demandeur rbt.
     *
     * @return string Returns the z nom demandeur rbt.
     */
    public function getzNomDemandeurRbt() {
        return $this->zNomDemandeurRbt;
    }

    /**
     * Set the z nom demandeur rbt.
     *
     * @param string $zNomDemandeurRbt The z nom demandeur rbt.
     */
    public function setzNomDemandeurRbt($zNomDemandeurRbt) {
        $this->zNomDemandeurRbt = $zNomDemandeurRbt;
        return $this;
    }
}

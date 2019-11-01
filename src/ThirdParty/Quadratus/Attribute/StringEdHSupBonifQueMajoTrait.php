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
 * Ed h sup bonif que majo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEdHSupBonifQueMajoTrait {

    /**
     * Ed h sup bonif que majo.
     *
     * @var string
     */
    private $edHSupBonifQueMajo;

    /**
     * Get the ed h sup bonif que majo.
     *
     * @return string Returns the ed h sup bonif que majo.
     */
    public function getEdHSupBonifQueMajo() {
        return $this->edHSupBonifQueMajo;
    }

    /**
     * Set the ed h sup bonif que majo.
     *
     * @param string $edHSupBonifQueMajo The ed h sup bonif que majo.
     */
    public function setEdHSupBonifQueMajo($edHSupBonifQueMajo) {
        $this->edHSupBonifQueMajo = $edHSupBonifQueMajo;
        return $this;
    }
}

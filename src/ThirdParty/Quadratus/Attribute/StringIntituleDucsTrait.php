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
 * Intitule ducs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIntituleDucsTrait {

    /**
     * Intitule ducs.
     *
     * @var string
     */
    private $intituleDucs;

    /**
     * Get the intitule ducs.
     *
     * @return string Returns the intitule ducs.
     */
    public function getIntituleDucs() {
        return $this->intituleDucs;
    }

    /**
     * Set the intitule ducs.
     *
     * @param string $intituleDucs The intitule ducs.
     */
    public function setIntituleDucs($intituleDucs) {
        $this->intituleDucs = $intituleDucs;
        return $this;
    }
}

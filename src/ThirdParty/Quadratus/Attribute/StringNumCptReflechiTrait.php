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
 * Num cpt reflechi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCptReflechiTrait {

    /**
     * Num cpt reflechi.
     *
     * @var string
     */
    private $numCptReflechi;

    /**
     * Get the num cpt reflechi.
     *
     * @return string Returns the num cpt reflechi.
     */
    public function getNumCptReflechi() {
        return $this->numCptReflechi;
    }

    /**
     * Set the num cpt reflechi.
     *
     * @param string $numCptReflechi The num cpt reflechi.
     */
    public function setNumCptReflechi($numCptReflechi) {
        $this->numCptReflechi = $numCptReflechi;
        return $this;
    }
}

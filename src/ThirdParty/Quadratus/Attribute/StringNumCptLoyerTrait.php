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
 * Num cpt loyer trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCptLoyerTrait {

    /**
     * Num cpt loyer.
     *
     * @var string
     */
    private $numCptLoyer;

    /**
     * Get the num cpt loyer.
     *
     * @return string Returns the num cpt loyer.
     */
    public function getNumCptLoyer() {
        return $this->numCptLoyer;
    }

    /**
     * Set the num cpt loyer.
     *
     * @param string $numCptLoyer The num cpt loyer.
     */
    public function setNumCptLoyer($numCptLoyer) {
        $this->numCptLoyer = $numCptLoyer;
        return $this;
    }
}

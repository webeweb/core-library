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
 * Num entete trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumEnteteTrait {

    /**
     * Num entete.
     *
     * @var string
     */
    private $numEntete;

    /**
     * Get the num entete.
     *
     * @return string Returns the num entete.
     */
    public function getNumEntete() {
        return $this->numEntete;
    }

    /**
     * Set the num entete.
     *
     * @param string $numEntete The num entete.
     */
    public function setNumEntete($numEntete) {
        $this->numEntete = $numEntete;
        return $this;
    }
}

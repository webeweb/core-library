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
 * Etat2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtat2Trait {

    /**
     * Etat2.
     *
     * @var string
     */
    private $etat2;

    /**
     * Get the etat2.
     *
     * @return string Returns the etat2.
     */
    public function getEtat2() {
        return $this->etat2;
    }

    /**
     * Set the etat2.
     *
     * @param string $etat2 The etat2.
     */
    public function setEtat2($etat2) {
        $this->etat2 = $etat2;
        return $this;
    }
}

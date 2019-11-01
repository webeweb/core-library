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
 * Etat5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtat5Trait {

    /**
     * Etat5.
     *
     * @var string
     */
    private $etat5;

    /**
     * Get the etat5.
     *
     * @return string Returns the etat5.
     */
    public function getEtat5() {
        return $this->etat5;
    }

    /**
     * Set the etat5.
     *
     * @param string $etat5 The etat5.
     */
    public function setEtat5($etat5) {
        $this->etat5 = $etat5;
        return $this;
    }
}

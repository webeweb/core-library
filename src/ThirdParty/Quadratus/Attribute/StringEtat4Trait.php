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
 * Etat4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtat4Trait {

    /**
     * Etat4.
     *
     * @var string
     */
    private $etat4;

    /**
     * Get the etat4.
     *
     * @return string Returns the etat4.
     */
    public function getEtat4() {
        return $this->etat4;
    }

    /**
     * Set the etat4.
     *
     * @param string $etat4 The etat4.
     */
    public function setEtat4($etat4) {
        $this->etat4 = $etat4;
        return $this;
    }
}

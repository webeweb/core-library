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
 * Etat3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtat3Trait {

    /**
     * Etat3.
     *
     * @var string
     */
    private $etat3;

    /**
     * Get the etat3.
     *
     * @return string Returns the etat3.
     */
    public function getEtat3() {
        return $this->etat3;
    }

    /**
     * Set the etat3.
     *
     * @param string $etat3 The etat3.
     */
    public function setEtat3($etat3) {
        $this->etat3 = $etat3;
        return $this;
    }
}

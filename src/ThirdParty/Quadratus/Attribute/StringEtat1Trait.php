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
 * Etat1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtat1Trait {

    /**
     * Etat1.
     *
     * @var string
     */
    private $etat1;

    /**
     * Get the etat1.
     *
     * @return string Returns the etat1.
     */
    public function getEtat1() {
        return $this->etat1;
    }

    /**
     * Set the etat1.
     *
     * @param string $etat1 The etat1.
     */
    public function setEtat1($etat1) {
        $this->etat1 = $etat1;
        return $this;
    }
}

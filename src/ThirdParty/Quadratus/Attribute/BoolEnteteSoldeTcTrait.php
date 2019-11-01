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
 * Entete solde tc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEnteteSoldeTcTrait {

    /**
     * Entete solde tc.
     *
     * @var bool
     */
    private $enteteSoldeTc;

    /**
     * Get the entete solde tc.
     *
     * @return bool Returns the entete solde tc.
     */
    public function getEnteteSoldeTc() {
        return $this->enteteSoldeTc;
    }

    /**
     * Set the entete solde tc.
     *
     * @param bool $enteteSoldeTc The entete solde tc.
     */
    public function setEnteteSoldeTc($enteteSoldeTc) {
        $this->enteteSoldeTc = $enteteSoldeTc;
        return $this;
    }
}

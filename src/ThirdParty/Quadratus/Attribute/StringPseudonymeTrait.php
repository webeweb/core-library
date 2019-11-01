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
 * Pseudonyme trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPseudonymeTrait {

    /**
     * Pseudonyme.
     *
     * @var string
     */
    private $pseudonyme;

    /**
     * Get the pseudonyme.
     *
     * @return string Returns the pseudonyme.
     */
    public function getPseudonyme() {
        return $this->pseudonyme;
    }

    /**
     * Set the pseudonyme.
     *
     * @param string $pseudonyme The pseudonyme.
     */
    public function setPseudonyme($pseudonyme) {
        $this->pseudonyme = $pseudonyme;
        return $this;
    }
}

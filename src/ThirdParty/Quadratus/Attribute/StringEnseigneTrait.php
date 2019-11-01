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
 * Enseigne trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEnseigneTrait {

    /**
     * Enseigne.
     *
     * @var string
     */
    private $enseigne;

    /**
     * Get the enseigne.
     *
     * @return string Returns the enseigne.
     */
    public function getEnseigne() {
        return $this->enseigne;
    }

    /**
     * Set the enseigne.
     *
     * @param string $enseigne The enseigne.
     */
    public function setEnseigne($enseigne) {
        $this->enseigne = $enseigne;
        return $this;
    }
}

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
 * Poste5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPoste5Trait {

    /**
     * Poste5.
     *
     * @var string
     */
    private $poste5;

    /**
     * Get the poste5.
     *
     * @return string Returns the poste5.
     */
    public function getPoste5() {
        return $this->poste5;
    }

    /**
     * Set the poste5.
     *
     * @param string $poste5 The poste5.
     */
    public function setPoste5($poste5) {
        $this->poste5 = $poste5;
        return $this;
    }
}

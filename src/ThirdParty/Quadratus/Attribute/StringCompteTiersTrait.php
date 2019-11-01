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
 * Compte tiers trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteTiersTrait {

    /**
     * Compte tiers.
     *
     * @var string
     */
    private $compteTiers;

    /**
     * Get the compte tiers.
     *
     * @return string Returns the compte tiers.
     */
    public function getCompteTiers() {
        return $this->compteTiers;
    }

    /**
     * Set the compte tiers.
     *
     * @param string $compteTiers The compte tiers.
     */
    public function setCompteTiers($compteTiers) {
        $this->compteTiers = $compteTiers;
        return $this;
    }
}

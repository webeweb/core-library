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
 * Compte de tiers trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteDeTiersTrait {

    /**
     * Compte de tiers.
     *
     * @var string
     */
    private $compteDeTiers;

    /**
     * Get the compte de tiers.
     *
     * @return string Returns the compte de tiers.
     */
    public function getCompteDeTiers() {
        return $this->compteDeTiers;
    }

    /**
     * Set the compte de tiers.
     *
     * @param string $compteDeTiers The compte de tiers.
     */
    public function setCompteDeTiers($compteDeTiers) {
        $this->compteDeTiers = $compteDeTiers;
        return $this;
    }
}

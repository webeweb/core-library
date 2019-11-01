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
 * Nb j rtt2007 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbJRtt2007Trait {

    /**
     * Nb j rtt2007.
     *
     * @var float
     */
    private $nbJRtt2007;

    /**
     * Get the nb j rtt2007.
     *
     * @return float Returns the nb j rtt2007.
     */
    public function getNbJRtt2007() {
        return $this->nbJRtt2007;
    }

    /**
     * Set the nb j rtt2007.
     *
     * @param float $nbJRtt2007 The nb j rtt2007.
     */
    public function setNbJRtt2007($nbJRtt2007) {
        $this->nbJRtt2007 = $nbJRtt2007;
        return $this;
    }
}

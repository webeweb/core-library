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
 * Interets cap trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringInteretsCapTrait {

    /**
     * Interets cap.
     *
     * @var string
     */
    private $interetsCap;

    /**
     * Get the interets cap.
     *
     * @return string Returns the interets cap.
     */
    public function getInteretsCap() {
        return $this->interetsCap;
    }

    /**
     * Set the interets cap.
     *
     * @param string $interetsCap The interets cap.
     */
    public function setInteretsCap($interetsCap) {
        $this->interetsCap = $interetsCap;
        return $this;
    }
}

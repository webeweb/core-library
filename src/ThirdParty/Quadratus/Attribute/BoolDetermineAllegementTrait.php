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
 * Determine allegement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDetermineAllegementTrait {

    /**
     * Determine allegement.
     *
     * @var bool
     */
    private $determineAllegement;

    /**
     * Get the determine allegement.
     *
     * @return bool Returns the determine allegement.
     */
    public function getDetermineAllegement() {
        return $this->determineAllegement;
    }

    /**
     * Set the determine allegement.
     *
     * @param bool $determineAllegement The determine allegement.
     */
    public function setDetermineAllegement($determineAllegement) {
        $this->determineAllegement = $determineAllegement;
        return $this;
    }
}

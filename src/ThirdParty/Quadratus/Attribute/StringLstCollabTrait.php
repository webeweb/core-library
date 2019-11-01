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
 * Lst collab trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLstCollabTrait {

    /**
     * Lst collab.
     *
     * @var string
     */
    private $lstCollab;

    /**
     * Get the lst collab.
     *
     * @return string Returns the lst collab.
     */
    public function getLstCollab() {
        return $this->lstCollab;
    }

    /**
     * Set the lst collab.
     *
     * @param string $lstCollab The lst collab.
     */
    public function setLstCollab($lstCollab) {
        $this->lstCollab = $lstCollab;
        return $this;
    }
}

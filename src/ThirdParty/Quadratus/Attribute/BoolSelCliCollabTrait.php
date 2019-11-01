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
 * Sel cli collab trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSelCliCollabTrait {

    /**
     * Sel cli collab.
     *
     * @var bool
     */
    private $selCliCollab;

    /**
     * Get the sel cli collab.
     *
     * @return bool Returns the sel cli collab.
     */
    public function getSelCliCollab() {
        return $this->selCliCollab;
    }

    /**
     * Set the sel cli collab.
     *
     * @param bool $selCliCollab The sel cli collab.
     */
    public function setSelCliCollab($selCliCollab) {
        $this->selCliCollab = $selCliCollab;
        return $this;
    }
}

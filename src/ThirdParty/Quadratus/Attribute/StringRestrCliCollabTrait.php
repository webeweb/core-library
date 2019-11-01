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
 * Restr cli collab trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRestrCliCollabTrait {

    /**
     * Restr cli collab.
     *
     * @var string
     */
    private $restrCliCollab;

    /**
     * Get the restr cli collab.
     *
     * @return string Returns the restr cli collab.
     */
    public function getRestrCliCollab() {
        return $this->restrCliCollab;
    }

    /**
     * Set the restr cli collab.
     *
     * @param string $restrCliCollab The restr cli collab.
     */
    public function setRestrCliCollab($restrCliCollab) {
        $this->restrCliCollab = $restrCliCollab;
        return $this;
    }
}

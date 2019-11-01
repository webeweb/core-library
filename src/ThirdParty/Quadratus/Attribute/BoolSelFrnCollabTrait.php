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
 * Sel frn collab trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSelFrnCollabTrait {

    /**
     * Sel frn collab.
     *
     * @var bool
     */
    private $selFrnCollab;

    /**
     * Get the sel frn collab.
     *
     * @return bool Returns the sel frn collab.
     */
    public function getSelFrnCollab() {
        return $this->selFrnCollab;
    }

    /**
     * Set the sel frn collab.
     *
     * @param bool $selFrnCollab The sel frn collab.
     */
    public function setSelFrnCollab($selFrnCollab) {
        $this->selFrnCollab = $selFrnCollab;
        return $this;
    }
}

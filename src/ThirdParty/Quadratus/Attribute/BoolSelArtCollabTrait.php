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
 * Sel art collab trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSelArtCollabTrait {

    /**
     * Sel art collab.
     *
     * @var bool
     */
    private $selArtCollab;

    /**
     * Get the sel art collab.
     *
     * @return bool Returns the sel art collab.
     */
    public function getSelArtCollab() {
        return $this->selArtCollab;
    }

    /**
     * Set the sel art collab.
     *
     * @param bool $selArtCollab The sel art collab.
     */
    public function setSelArtCollab($selArtCollab) {
        $this->selArtCollab = $selArtCollab;
        return $this;
    }
}

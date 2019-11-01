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
 * Liste collab trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringListeCollabTrait {

    /**
     * Liste collab.
     *
     * @var string
     */
    private $listeCollab;

    /**
     * Get the liste collab.
     *
     * @return string Returns the liste collab.
     */
    public function getListeCollab() {
        return $this->listeCollab;
    }

    /**
     * Set the liste collab.
     *
     * @param string $listeCollab The liste collab.
     */
    public function setListeCollab($listeCollab) {
        $this->listeCollab = $listeCollab;
        return $this;
    }
}

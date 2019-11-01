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
 * Acces liste collab trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccesListeCollabTrait {

    /**
     * Acces liste collab.
     *
     * @var bool
     */
    private $accesListeCollab;

    /**
     * Get the acces liste collab.
     *
     * @return bool Returns the acces liste collab.
     */
    public function getAccesListeCollab() {
        return $this->accesListeCollab;
    }

    /**
     * Set the acces liste collab.
     *
     * @param bool $accesListeCollab The acces liste collab.
     */
    public function setAccesListeCollab($accesListeCollab) {
        $this->accesListeCollab = $accesListeCollab;
        return $this;
    }
}

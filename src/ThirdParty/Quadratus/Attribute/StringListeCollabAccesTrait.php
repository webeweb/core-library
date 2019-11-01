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
 * Liste collab acces trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringListeCollabAccesTrait {

    /**
     * Liste collab acces.
     *
     * @var string
     */
    private $listeCollabAcces;

    /**
     * Get the liste collab acces.
     *
     * @return string Returns the liste collab acces.
     */
    public function getListeCollabAcces() {
        return $this->listeCollabAcces;
    }

    /**
     * Set the liste collab acces.
     *
     * @param string $listeCollabAcces The liste collab acces.
     */
    public function setListeCollabAcces($listeCollabAcces) {
        $this->listeCollabAcces = $listeCollabAcces;
        return $this;
    }
}

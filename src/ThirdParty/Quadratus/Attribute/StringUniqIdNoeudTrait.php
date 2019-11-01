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
 * Uniq id noeud trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringUniqIdNoeudTrait {

    /**
     * Uniq id noeud.
     *
     * @var string
     */
    private $uniqIdNoeud;

    /**
     * Get the uniq id noeud.
     *
     * @return string Returns the uniq id noeud.
     */
    public function getUniqIdNoeud() {
        return $this->uniqIdNoeud;
    }

    /**
     * Set the uniq id noeud.
     *
     * @param string $uniqIdNoeud The uniq id noeud.
     */
    public function setUniqIdNoeud($uniqIdNoeud) {
        $this->uniqIdNoeud = $uniqIdNoeud;
        return $this;
    }
}

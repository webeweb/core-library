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
 * X fer collab tache trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerCollabTacheTrait {

    /**
     * X fer collab tache.
     *
     * @var bool
     */
    private $xFerCollabTache;

    /**
     * Get the x fer collab tache.
     *
     * @return bool Returns the x fer collab tache.
     */
    public function getXFerCollabTache() {
        return $this->xFerCollabTache;
    }

    /**
     * Set the x fer collab tache.
     *
     * @param bool $xFerCollabTache The x fer collab tache.
     */
    public function setXFerCollabTache($xFerCollabTache) {
        $this->xFerCollabTache = $xFerCollabTache;
        return $this;
    }
}

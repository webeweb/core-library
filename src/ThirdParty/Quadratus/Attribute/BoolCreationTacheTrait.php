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
 * Creation tache trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCreationTacheTrait {

    /**
     * Creation tache.
     *
     * @var bool
     */
    private $creationTache;

    /**
     * Get the creation tache.
     *
     * @return bool Returns the creation tache.
     */
    public function getCreationTache() {
        return $this->creationTache;
    }

    /**
     * Set the creation tache.
     *
     * @param bool $creationTache The creation tache.
     */
    public function setCreationTache($creationTache) {
        $this->creationTache = $creationTache;
        return $this;
    }
}

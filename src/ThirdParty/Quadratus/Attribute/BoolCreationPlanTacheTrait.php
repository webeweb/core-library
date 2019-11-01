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
 * Creation plan tache trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCreationPlanTacheTrait {

    /**
     * Creation plan tache.
     *
     * @var bool
     */
    private $creationPlanTache;

    /**
     * Get the creation plan tache.
     *
     * @return bool Returns the creation plan tache.
     */
    public function getCreationPlanTache() {
        return $this->creationPlanTache;
    }

    /**
     * Set the creation plan tache.
     *
     * @param bool $creationPlanTache The creation plan tache.
     */
    public function setCreationPlanTache($creationPlanTache) {
        $this->creationPlanTache = $creationPlanTache;
        return $this;
    }
}

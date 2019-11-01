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
 * Modif plan tache trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModifPlanTacheTrait {

    /**
     * Modif plan tache.
     *
     * @var string
     */
    private $modifPlanTache;

    /**
     * Get the modif plan tache.
     *
     * @return string Returns the modif plan tache.
     */
    public function getModifPlanTache() {
        return $this->modifPlanTache;
    }

    /**
     * Set the modif plan tache.
     *
     * @param string $modifPlanTache The modif plan tache.
     */
    public function setModifPlanTache($modifPlanTache) {
        $this->modifPlanTache = $modifPlanTache;
        return $this;
    }
}

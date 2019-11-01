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
 * Modif tache trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModifTacheTrait {

    /**
     * Modif tache.
     *
     * @var string
     */
    private $modifTache;

    /**
     * Get the modif tache.
     *
     * @return string Returns the modif tache.
     */
    public function getModifTache() {
        return $this->modifTache;
    }

    /**
     * Set the modif tache.
     *
     * @param string $modifTache The modif tache.
     */
    public function setModifTache($modifTache) {
        $this->modifTache = $modifTache;
        return $this;
    }
}

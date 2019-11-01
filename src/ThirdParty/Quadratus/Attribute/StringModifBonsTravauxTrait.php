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
 * Modif bons travaux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModifBonsTravauxTrait {

    /**
     * Modif bons travaux.
     *
     * @var string
     */
    private $modifBonsTravaux;

    /**
     * Get the modif bons travaux.
     *
     * @return string Returns the modif bons travaux.
     */
    public function getModifBonsTravaux() {
        return $this->modifBonsTravaux;
    }

    /**
     * Set the modif bons travaux.
     *
     * @param string $modifBonsTravaux The modif bons travaux.
     */
    public function setModifBonsTravaux($modifBonsTravaux) {
        $this->modifBonsTravaux = $modifBonsTravaux;
        return $this;
    }
}

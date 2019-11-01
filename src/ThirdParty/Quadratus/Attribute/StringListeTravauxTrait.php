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
 * Liste travaux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringListeTravauxTrait {

    /**
     * Liste travaux.
     *
     * @var string
     */
    private $listeTravaux;

    /**
     * Get the liste travaux.
     *
     * @return string Returns the liste travaux.
     */
    public function getListeTravaux() {
        return $this->listeTravaux;
    }

    /**
     * Set the liste travaux.
     *
     * @param string $listeTravaux The liste travaux.
     */
    public function setListeTravaux($listeTravaux) {
        $this->listeTravaux = $listeTravaux;
        return $this;
    }
}

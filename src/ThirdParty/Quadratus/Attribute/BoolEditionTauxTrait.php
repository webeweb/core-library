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
 * Edition taux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEditionTauxTrait {

    /**
     * Edition taux.
     *
     * @var bool
     */
    private $editionTaux;

    /**
     * Get the edition taux.
     *
     * @return bool Returns the edition taux.
     */
    public function getEditionTaux() {
        return $this->editionTaux;
    }

    /**
     * Set the edition taux.
     *
     * @param bool $editionTaux The edition taux.
     */
    public function setEditionTaux($editionTaux) {
        $this->editionTaux = $editionTaux;
        return $this;
    }
}

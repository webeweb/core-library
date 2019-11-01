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
 * Mt cpta negatif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMtCptaNegatifTrait {

    /**
     * Mt cpta negatif.
     *
     * @var bool
     */
    private $mtCptaNegatif;

    /**
     * Get the mt cpta negatif.
     *
     * @return bool Returns the mt cpta negatif.
     */
    public function getMtCptaNegatif() {
        return $this->mtCptaNegatif;
    }

    /**
     * Set the mt cpta negatif.
     *
     * @param bool $mtCptaNegatif The mt cpta negatif.
     */
    public function setMtCptaNegatif($mtCptaNegatif) {
        $this->mtCptaNegatif = $mtCptaNegatif;
        return $this;
    }
}

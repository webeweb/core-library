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

use DateTime;

/**
 * Validite convention fne trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeValiditeConventionFneTrait {

    /**
     * Validite convention fne.
     *
     * @var DateTime|null
     */
    private $validiteConventionFne;

    /**
     * Get the validite convention fne.
     *
     * @return DateTime|null Returns the validite convention fne.
     */
    public function getValiditeConventionFne() {
        return $this->validiteConventionFne;
    }

    /**
     * Set the validite convention fne.
     *
     * @param DateTime|null $validiteConventionFne The validite convention fne.
     */
    public function setValiditeConventionFne(DateTime $validiteConventionFne = null) {
        $this->validiteConventionFne = $validiteConventionFne;
        return $this;
    }
}

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
 * Date naiss conjoint trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateNaissConjointTrait {

    /**
     * Date naiss conjoint.
     *
     * @var DateTime|null
     */
    private $dateNaissConjoint;

    /**
     * Get the date naiss conjoint.
     *
     * @return DateTime|null Returns the date naiss conjoint.
     */
    public function getDateNaissConjoint() {
        return $this->dateNaissConjoint;
    }

    /**
     * Set the date naiss conjoint.
     *
     * @param DateTime|null $dateNaissConjoint The date naiss conjoint.
     */
    public function setDateNaissConjoint(DateTime $dateNaissConjoint = null) {
        $this->dateNaissConjoint = $dateNaissConjoint;
        return $this;
    }
}

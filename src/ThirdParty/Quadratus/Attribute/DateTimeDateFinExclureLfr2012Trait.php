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
 * Date fin exclure lfr2012 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateFinExclureLfr2012Trait {

    /**
     * Date fin exclure lfr2012.
     *
     * @var DateTime|null
     */
    private $dateFinExclureLfr2012;

    /**
     * Get the date fin exclure lfr2012.
     *
     * @return DateTime|null Returns the date fin exclure lfr2012.
     */
    public function getDateFinExclureLfr2012() {
        return $this->dateFinExclureLfr2012;
    }

    /**
     * Set the date fin exclure lfr2012.
     *
     * @param DateTime|null $dateFinExclureLfr2012 The date fin exclure lfr2012.
     */
    public function setDateFinExclureLfr2012(DateTime $dateFinExclureLfr2012 = null) {
        $this->dateFinExclureLfr2012 = $dateFinExclureLfr2012;
        return $this;
    }
}

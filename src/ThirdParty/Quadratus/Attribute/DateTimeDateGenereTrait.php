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
 * Date genere trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateGenereTrait {

    /**
     * Date genere.
     *
     * @var DateTime|null
     */
    private $dateGenere;

    /**
     * Get the date genere.
     *
     * @return DateTime|null Returns the date genere.
     */
    public function getDateGenere() {
        return $this->dateGenere;
    }

    /**
     * Set the date genere.
     *
     * @param DateTime|null $dateGenere The date genere.
     */
    public function setDateGenere(DateTime $dateGenere = null) {
        $this->dateGenere = $dateGenere;
        return $this;
    }
}

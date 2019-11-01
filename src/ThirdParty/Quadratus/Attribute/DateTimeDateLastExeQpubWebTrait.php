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
 * Date last exe qpub web trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateLastExeQpubWebTrait {

    /**
     * Date last exe qpub web.
     *
     * @var DateTime|null
     */
    private $dateLastExeQpubWeb;

    /**
     * Get the date last exe qpub web.
     *
     * @return DateTime|null Returns the date last exe qpub web.
     */
    public function getDateLastExeQpubWeb() {
        return $this->dateLastExeQpubWeb;
    }

    /**
     * Set the date last exe qpub web.
     *
     * @param DateTime|null $dateLastExeQpubWeb The date last exe qpub web.
     */
    public function setDateLastExeQpubWeb(DateTime $dateLastExeQpubWeb = null) {
        $this->dateLastExeQpubWeb = $dateLastExeQpubWeb;
        return $this;
    }
}

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
 * Date fin doc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateFinDocTrait {

    /**
     * Date fin doc.
     *
     * @var DateTime|null
     */
    private $dateFinDoc;

    /**
     * Get the date fin doc.
     *
     * @return DateTime|null Returns the date fin doc.
     */
    public function getDateFinDoc() {
        return $this->dateFinDoc;
    }

    /**
     * Set the date fin doc.
     *
     * @param DateTime|null $dateFinDoc The date fin doc.
     */
    public function setDateFinDoc(DateTime $dateFinDoc = null) {
        $this->dateFinDoc = $dateFinDoc;
        return $this;
    }
}

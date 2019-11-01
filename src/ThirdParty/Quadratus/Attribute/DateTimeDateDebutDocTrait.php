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
 * Date debut doc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDebutDocTrait {

    /**
     * Date debut doc.
     *
     * @var DateTime|null
     */
    private $dateDebutDoc;

    /**
     * Get the date debut doc.
     *
     * @return DateTime|null Returns the date debut doc.
     */
    public function getDateDebutDoc() {
        return $this->dateDebutDoc;
    }

    /**
     * Set the date debut doc.
     *
     * @param DateTime|null $dateDebutDoc The date debut doc.
     */
    public function setDateDebutDoc(DateTime $dateDebutDoc = null) {
        $this->dateDebutDoc = $dateDebutDoc;
        return $this;
    }
}

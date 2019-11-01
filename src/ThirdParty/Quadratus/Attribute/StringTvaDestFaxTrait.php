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
 * Tva dest fax trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaDestFaxTrait {

    /**
     * Tva dest fax.
     *
     * @var string
     */
    private $tvaDestFax;

    /**
     * Get the tva dest fax.
     *
     * @return string Returns the tva dest fax.
     */
    public function getTvaDestFax() {
        return $this->tvaDestFax;
    }

    /**
     * Set the tva dest fax.
     *
     * @param string $tvaDestFax The tva dest fax.
     */
    public function setTvaDestFax($tvaDestFax) {
        $this->tvaDestFax = $tvaDestFax;
        return $this;
    }
}

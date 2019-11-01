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
 * Date operation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateOperationTrait {

    /**
     * Date operation.
     *
     * @var DateTime|null
     */
    private $dateOperation;

    /**
     * Get the date operation.
     *
     * @return DateTime|null Returns the date operation.
     */
    public function getDateOperation() {
        return $this->dateOperation;
    }

    /**
     * Set the date operation.
     *
     * @param DateTime|null $dateOperation The date operation.
     */
    public function setDateOperation(DateTime $dateOperation = null) {
        $this->dateOperation = $dateOperation;
        return $this;
    }
}

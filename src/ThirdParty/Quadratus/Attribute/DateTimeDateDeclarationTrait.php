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
 * Date declaration trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDeclarationTrait {

    /**
     * Date declaration.
     *
     * @var DateTime|null
     */
    private $dateDeclaration;

    /**
     * Get the date declaration.
     *
     * @return DateTime|null Returns the date declaration.
     */
    public function getDateDeclaration() {
        return $this->dateDeclaration;
    }

    /**
     * Set the date declaration.
     *
     * @param DateTime|null $dateDeclaration The date declaration.
     */
    public function setDateDeclaration(DateTime $dateDeclaration = null) {
        $this->dateDeclaration = $dateDeclaration;
        return $this;
    }
}

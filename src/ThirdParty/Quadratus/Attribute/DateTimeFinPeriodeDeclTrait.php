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
 * Fin periode decl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeFinPeriodeDeclTrait {

    /**
     * Fin periode decl.
     *
     * @var DateTime|null
     */
    private $finPeriodeDecl;

    /**
     * Get the fin periode decl.
     *
     * @return DateTime|null Returns the fin periode decl.
     */
    public function getFinPeriodeDecl() {
        return $this->finPeriodeDecl;
    }

    /**
     * Set the fin periode decl.
     *
     * @param DateTime|null $finPeriodeDecl The fin periode decl.
     */
    public function setFinPeriodeDecl(DateTime $finPeriodeDecl = null) {
        $this->finPeriodeDecl = $finPeriodeDecl;
        return $this;
    }
}

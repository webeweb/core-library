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
 * Debut periode decl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDebutPeriodeDeclTrait {

    /**
     * Debut periode decl.
     *
     * @var DateTime|null
     */
    private $debutPeriodeDecl;

    /**
     * Get the debut periode decl.
     *
     * @return DateTime|null Returns the debut periode decl.
     */
    public function getDebutPeriodeDecl() {
        return $this->debutPeriodeDecl;
    }

    /**
     * Set the debut periode decl.
     *
     * @param DateTime|null $debutPeriodeDecl The debut periode decl.
     */
    public function setDebutPeriodeDecl(DateTime $debutPeriodeDecl = null) {
        $this->debutPeriodeDecl = $debutPeriodeDecl;
        return $this;
    }
}

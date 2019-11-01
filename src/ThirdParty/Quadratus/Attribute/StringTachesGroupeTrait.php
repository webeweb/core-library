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
 * Taches groupe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTachesGroupeTrait {

    /**
     * Taches groupe.
     *
     * @var string
     */
    private $tachesGroupe;

    /**
     * Get the taches groupe.
     *
     * @return string Returns the taches groupe.
     */
    public function getTachesGroupe() {
        return $this->tachesGroupe;
    }

    /**
     * Set the taches groupe.
     *
     * @param string $tachesGroupe The taches groupe.
     */
    public function setTachesGroupe($tachesGroupe) {
        $this->tachesGroupe = $tachesGroupe;
        return $this;
    }
}

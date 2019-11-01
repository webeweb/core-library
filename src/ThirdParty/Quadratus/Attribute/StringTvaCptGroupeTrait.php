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
 * Tva cpt groupe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCptGroupeTrait {

    /**
     * Tva cpt groupe.
     *
     * @var string
     */
    private $tvaCptGroupe;

    /**
     * Get the tva cpt groupe.
     *
     * @return string Returns the tva cpt groupe.
     */
    public function getTvaCptGroupe() {
        return $this->tvaCptGroupe;
    }

    /**
     * Set the tva cpt groupe.
     *
     * @param string $tvaCptGroupe The tva cpt groupe.
     */
    public function setTvaCptGroupe($tvaCptGroupe) {
        $this->tvaCptGroupe = $tvaCptGroupe;
        return $this;
    }
}

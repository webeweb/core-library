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
 * Delai limite saisie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntDelaiLimiteSaisieTrait {

    /**
     * Delai limite saisie.
     *
     * @var int
     */
    private $delaiLimiteSaisie;

    /**
     * Get the delai limite saisie.
     *
     * @return int Returns the delai limite saisie.
     */
    public function getDelaiLimiteSaisie() {
        return $this->delaiLimiteSaisie;
    }

    /**
     * Set the delai limite saisie.
     *
     * @param int $delaiLimiteSaisie The delai limite saisie.
     */
    public function setDelaiLimiteSaisie($delaiLimiteSaisie) {
        $this->delaiLimiteSaisie = $delaiLimiteSaisie;
        return $this;
    }
}

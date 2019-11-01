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
 * Libelle memo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelleMemoTrait {

    /**
     * Libelle memo.
     *
     * @var string
     */
    private $libelleMemo;

    /**
     * Get the libelle memo.
     *
     * @return string Returns the libelle memo.
     */
    public function getLibelleMemo() {
        return $this->libelleMemo;
    }

    /**
     * Set the libelle memo.
     *
     * @param string $libelleMemo The libelle memo.
     */
    public function setLibelleMemo($libelleMemo) {
        $this->libelleMemo = $libelleMemo;
        return $this;
    }
}

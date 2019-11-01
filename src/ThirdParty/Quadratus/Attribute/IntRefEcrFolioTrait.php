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
 * Ref ecr folio trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntRefEcrFolioTrait {

    /**
     * Ref ecr folio.
     *
     * @var int
     */
    private $refEcrFolio;

    /**
     * Get the ref ecr folio.
     *
     * @return int Returns the ref ecr folio.
     */
    public function getRefEcrFolio() {
        return $this->refEcrFolio;
    }

    /**
     * Set the ref ecr folio.
     *
     * @param int $refEcrFolio The ref ecr folio.
     */
    public function setRefEcrFolio($refEcrFolio) {
        $this->refEcrFolio = $refEcrFolio;
        return $this;
    }
}

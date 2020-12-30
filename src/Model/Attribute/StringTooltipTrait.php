<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Attribute;

/**
 * String tooltip trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringTooltipTrait {

    /**
     * Tooltip.
     *
     * @var string|null
     */
    protected $tooltip;

    /**
     * Get the tooltip.
     *
     * @return string|null Returns the tooltip.
     */
    public function getTooltip(): ?string {
        return $this->tooltip;
    }

    /**
     * Set the tooltip.
     *
     * @param string|null $tooltip The tooltip.
     */
    public function setTooltip(?string $tooltip): self {
        $this->tooltip = $tooltip;
        return $this;
    }
}
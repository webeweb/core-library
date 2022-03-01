<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Assets\Color\MaterialDesignColorPalette;

use WBW\Library\Symfony\Assets\Color\AbstractColorProvider;
use WBW\Library\Symfony\Assets\Color\MaterialDesignColorPaletteInterface;
use WBW\Library\Symfony\Provider\Assets\Color\GreyColorProviderInterface;

/**
 * Grey color provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets\Color\MaterialDesignColorPalette
 */
class GreyColorProvider extends AbstractColorProvider implements GreyColorProviderInterface, MaterialDesignColorPaletteInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.assets.color.material_design_color_palette.grey";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct(self::COLOR_DOMAIN);
    }

    /**
     * {@inheritDoc}
     */
    public function getColors(): array {
        return [
            self::COLOR_50  => self::GREY_COLOR_50,
            self::COLOR_100 => self::GREY_COLOR_100,
            self::COLOR_200 => self::GREY_COLOR_200,
            self::COLOR_300 => self::GREY_COLOR_300,
            self::COLOR_400 => self::GREY_COLOR_400,
            self::COLOR_500 => self::GREY_COLOR_500,
            self::COLOR_600 => self::GREY_COLOR_600,
            self::COLOR_700 => self::GREY_COLOR_700,
        ];
    }

    /**
     *{@inheritDoc}
     */
    public function getName(): string {
        return self::GREY_COLOR_NAME;
    }
}

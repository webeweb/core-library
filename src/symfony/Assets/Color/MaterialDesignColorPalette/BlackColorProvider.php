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
use WBW\Library\Symfony\Provider\Assets\Color\BlackColorProviderInterface;

/**
 * Black color provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets\Color\MaterialDesignColorPalette
 */
class BlackColorProvider extends AbstractColorProvider implements MaterialDesignColorPaletteInterface, BlackColorProviderInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.assets.color.material_design_color_palette.black";

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
            self::COLOR_50   => self::BLACK_COLOR_500,
            self::COLOR_100  => self::BLACK_COLOR_500,
            self::COLOR_200  => self::BLACK_COLOR_500,
            self::COLOR_300  => self::BLACK_COLOR_500,
            self::COLOR_400  => self::BLACK_COLOR_500,
            self::COLOR_500  => self::BLACK_COLOR_500,
            self::COLOR_600  => self::BLACK_COLOR_500,
            self::COLOR_700  => self::BLACK_COLOR_500,
            self::COLOR_A100 => self::BLACK_COLOR_500,
            self::COLOR_A200 => self::BLACK_COLOR_500,
            self::COLOR_A400 => self::BLACK_COLOR_500,
            self::COLOR_A700 => self::BLACK_COLOR_500,
        ];
    }

    /**
     *{@inheritDoc}
     */
    public function getName(): string {
        return self::BLACK_COLOR_NAME;
    }
}

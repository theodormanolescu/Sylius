<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Component\Taxonomy\Generator;

/**
 * @author Mateusz Zalewski <mateusz.zalewski@lakion.com>
 */
interface TaxonSlugGeneratorInterface
{
    /**
     * @param string      $name
     * @param int|null    $parentId
     * @param string|null $locale
     *
     * @return string
     */
    public function generate($name, $parentId = null, $locale = null);
}
